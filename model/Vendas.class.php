<?php

class Vendas extends Conexao {

    function __construct() {
        parent::__construct();
    }

    public $valor = '';
    public $data = '';
    public $cliente = '';
    public $produtos = '';

    function GetVendas() {
        $query = "SELECT * FROM venda inner join venda_produto where venda.id_venda = venda_produto.venda_id and id_user = $_SESSION[id] order by id_venda desc";

        $this->ExecuteSQL($query);

        $this->GetLista();
    }

    private function GetLista() {
        while ($lista = $this->ListarDados()) {

            $cli = new Clientes();
            $nome_cli = $cli->GetClienteID($lista['id_cliente'])['cli_nome'];
            if ($nome_cli == '')
                continue;

            $prod = new Produtos();
            $nome_prod = $prod->GetProdutosID($lista['produto_id'])['prod_nome'];
            $valor_prod = $prod->GetProdutosID($lista['produto_id'])['prod_valor'];
            $qntd_prod = $prod->GetProdutosID($lista['produto_id'])['prod_qnt'];
            $data = $lista['data_venda'];

            $data = strtotime($data);
            $data = date('H:i | d/m/Y', $data);  //DATA         d/m/Y | H:i

            if (isset($this->itens[$lista['id_venda']])) {

                $this->itens[$lista['id_venda']]['valor_prod'] = number_format($this->itens[$lista['id_venda']]['valor_prod'] + $valor_prod, 2, '.', '');
                $this->itens[$lista['id_venda']]['nome_prod'] .= ', ' . $nome_prod;
            } else {

                $this->itens[$lista['id_venda']] = array(
                    'id_venda' => $lista['id_venda'],
                    'a_prazo' => $lista['a_prazo'],
                    'id_cliente' => $lista['id_cliente'],
                    'produto_id' => $lista['produto_id'],
                    'data_venda' => $data,
                    'nome_cli' => $nome_cli,
                    'nome_prod' => $nome_prod,
                    'valor_prod' => $valor_prod,
                    'qntd_prod' => $qntd_prod
                );
            }
        }
    }

    function descontarQuantidade($produto) {
        $qntd_prod = "SELECT prod_qnt FROM produtos WHERE prod_id = $produto";
        $var = $this->ExecuteSQL($qntd_prod);
        $res = $this->ListarDados($qntd_prod);
        $qntd = $res['prod_qnt'] - 1;
        $query = "UPDATE produtos SET prod_qnt='$qntd' WHERE prod_id = $produto";
        $var = $this->ExecuteSQL($query);
    }

    function setVendas($clienteMat, $produto, $senha) {
        ///////////////////////////////////////PEGAR VALOR A PRAZO
        $queryvalorprazo = "SELECT valor_prazo FROM valor_prazo WHERE id=1";
        $varvalorprazo = $this->ExecuteSQL($queryvalorprazo);
        $valorprazo = $this->ListarDados($queryvalorprazo);
        $valor_prazo = $valorprazo['valor_prazo'];
        ////////////////////////////////////////SENHA
        $queryExiste = "SELECT cli_id FROM cliente WHERE cli_matricula = $clienteMat";
        $varExiste = $this->ExecuteSQL($queryExiste);
        $clienteExiste = $this->ListarDados($queryExiste);
        $cliente = false;
        $cliente = $clienteExiste['cli_id'];
        if ($cliente) {
            $querysenha = "SELECT cli_senha FROM cliente WHERE cli_id = $cliente";
            $varsenha = $this->ExecuteSQL($querysenha);
            $clientesenha = $this->ListarDados($querysenha);
            $senha123 = $clientesenha['cli_senha'];
            if (password_verify($senha, $senha123)) { ////////////////// VERIFICA SENHA
                $query = "INSERT INTO venda (id_cliente, id_user) VALUES ('$cliente','$_SESSION[id]')";
                $var = $this->ExecuteSQL($query);
                $id = $this->LastInsertID();
                foreach ($produto as $produto) {
                    $valor_prod = "SELECT prod_valor FROM produtos WHERE prod_id = $produto";
                    $var3 = $this->ExecuteSQL($valor_prod);
                    $res = $this->ListarDados($valor_prod);
                    $valor_total = $valor_total + $res['prod_valor'] + $valor_prazo; ////VALOR_PRODUTO + VALOR_PRAZO
                    $query2 = "INSERT INTO venda_produto (venda_id, produto_id, pendente) VALUES ('{$id}', $produto, 1);";
                    $var2 = $this->ExecuteSQL($query2);
                    /////////////////////////////////////ACRESCENTAR EM VENDIDOS
                    $vendidos = "SELECT prod_qnt_ven FROM produtos WHERE prod_id = $produto";
                    $var7 = $this->ExecuteSQL($vendidos);
                    $res7 = $this->ListarDados($vendidos);
                    $novo_vendidos = $res7['prod_qnt_ven'] + 1;
                    $query7 = "UPDATE produtos SET prod_qnt_ven='$novo_vendidos' WHERE prod_id = $produto";
                    $var8 = $this->ExecuteSQL($query7);
                }
                ////////////////////////////////////////////// SETAR DIVIDA
                $divida_atual = "SELECT cli_divida FROM cliente WHERE cli_id = $cliente";
                $var5 = $this->ExecuteSQL($divida_atual);
                $res2 = $this->ListarDados($divida_atual);
                $nova_divida = $valor_total + $res2['cli_divida'];
                $query3 = "UPDATE cliente SET cli_divida='$nova_divida' WHERE cli_id = $cliente";
                $var4 = $this->ExecuteSQL($query3);
            }
        } else {

            // Dispara a consulta ao WebService
            $ch = curl_init();

            $fields["user"] = $clienteMat;
            $fields["password"] = $senha;

            curl_setopt_array($ch, array(
                CURLOPT_URL => 'https://auth.canoas.ifrs.edu.br/login.php',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_TIMEOUT => 30000,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => $fields
            ));

            //XGH
            // TODO: baixar e implementar certificado SSL
            // https://pt.stackoverflow.com/questions/110991/php-curl-emite-erro-unable-to-get-local-issuer-certificate
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

            $response = curl_exec($ch);
            $err = curl_error($ch);

            curl_close($ch);

            if (!$err) {

                // Fix String JSON
                $response = json_decode(preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $response), true);


                if ($response['result'] == 1) { // Login e senha corretos
                    // Cadastra o usuario
                    /* if (!Usuario::where('matricula', $fields['user'])->first()) {

                      Usuario::create(array(
                      'nome' => $response['name'],
                      'matricula' => $fields['user'],
                      'sexo' => $response['genre'],
                      // TODO: mudar o campo no banco para aceitar a imagem em base64
                      //'imagem' => $response['foto']
                      'imagem' => '',
                      'moodle' => true,
                      ));

                      }

                      // Pega o id do usuário e faz o login
                      $usuario = Usuario::where('matricula', $fields['user'])->first();
                      Auth::loginUsingId($usuario['id'], false);

                      return redirect('/select-game');/* */

                      $arr = array(
                      'nome' => $response['name'],
                      'matricula' => $fields['user'],
                      'email' => $response['mail'],
                      'curso' => $response['curso'],
                      'sexo' => $response['genre'],
                      'imagem' => $response['foto'],
                      'moodle' => true,
                      );

                      file_put_contents('./img.jpg', $arr['imagem']);

                      //return $arr;

                      $newCliente = new Clientes();
                      $newCliente->setCliente($arr['nome'], $arr['matricula'], $arr['email'], $fields['password'], $arr['curso']);

                      $this->setVendas($clienteMat, $produto, $senha);

                } else {
                    
                }
            } else {
                
            }
        }
    }

    function setVendaVista($produtos) {
        $query = "INSERT INTO venda (id_cliente, id_user) VALUES ('12','$_SESSION[id]')";
        $var = $this->ExecuteSQL($query);
        $id = $this->LastInsertID();
        foreach ($produtos as $produto) {
            $query2 = "INSERT INTO venda_produto (venda_id, produto_id) VALUES ('{$id}', $produto);";
            $var2 = $this->ExecuteSQL($query2);
            /////////////////////////////////////ACRESCENTAR EM VENDIDOS
            $vendidos = "SELECT prod_qnt_ven FROM produtos WHERE prod_id = $produto";
            $var7 = $this->ExecuteSQL($vendidos);
            $res7 = $this->ListarDados($vendidos);
            $novo_vendidos = $res7['prod_qnt_ven'] + 1;
            $query7 = "UPDATE produtos SET prod_qnt_ven='$novo_vendidos' WHERE prod_id = $produto";
            $var8 = $this->ExecuteSQL($query7);
        }
    }

}

?>