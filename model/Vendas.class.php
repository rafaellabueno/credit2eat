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

    function setVendas($cliente, $produto, $senha) {
        ///////////////////////////////////////PEGAR VALOR A PRAZO
        $queryvalorprazo = "SELECT valor_prazo FROM valor_prazo WHERE id=1";
        $varvalorprazo = $this->ExecuteSQL($queryvalorprazo);
        $valorprazo = $this->ListarDados($queryvalorprazo);
        $valor_prazo = $valorprazo['valor_prazo'];
        ////////////////////////////////////////SENHA
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