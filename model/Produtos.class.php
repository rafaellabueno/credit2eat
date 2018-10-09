<?php

class Produtos extends Conexao {

    function __construct() {
        parent::__construct();
    }

    public $nome = '';
    public $valor = '';
    public $qnt_min = '';
    public $qnt = ''; 

    function GetProdutos() {
        //busca os produtos
        $query = "SELECT * FROM produtos WHERE usuario_id = $_SESSION[id]";

        $query .= " ORDER BY prod_nome"; //prod_id DESC

        $this->ExecuteSQL($query);

        $this->GetLista();
    }

    function GetProdutosID($id) {
        //busca os produtos
        $query = "SELECT * FROM produtos WHERE prod_id = {$id}";

        $this->ExecuteSQL($query);

        return $this->ListarDados();
    }

    private function GetLista() {
        $i = 1;
        while ($lista = $this->ListarDados()) {
            $this->itens[$i] = array(
                'prod_id' => $lista['prod_id'],
                'prod_nome' => $lista['prod_nome'],
                'prod_valor' => $lista['prod_valor'],
                'prod_qnt_min' => $lista['prod_qnt_min'],
                'prod_qnt' => $lista['prod_qnt'],
                'prod_qnt_ven' => $lista['prod_qnt_ven'],
                'usuario_id' => $lista['usuario_id']
            );
            $i++;
        }
    }

    public function setProduto($nome, $valor, $qnt_min, $qnt_atual) {

        $query = "INSERT INTO produtos (prod_nome, prod_valor, prod_qnt_min, prod_qnt, usuario_id) VALUES ('$nome', '$valor', '$qnt_min','$qnt_atual','$_SESSION[id]');";
        $var = $this->ExecuteSQL($query);

        //header("location:./menu");
    }

    public function alterarProdutos($qtd, $produto) {
        /////// BUSCAR QUANTIDADE ATUAL DO PRODUTO
        $query = "SELECT prod_qnt FROM produtos WHERE prod_id = $produto";
        $var = $this->ExecuteSQL($query);
        $res = $this->ListarDados($query);
        $qnt = $res['prod_qnt'] + $qtd;
        /////// ALTERA QUANTIDADE DO PRODUTO
        $query2 = "UPDATE produtos SET prod_qnt='$qnt' WHERE prod_id = $produto";
        $var2 = $this->ExecuteSQL($query2);
        //////// ATUALIZA INFORMAÇÕES NO ESTOQUE
        $query3 = "INSERT INTO estoque (produto, qntd) VALUES ($produto, $qtd)";
        $var3 = $this->ExecuteSQL($query3);
        return $var3;
    }

    function ExibirProdutos() {
        return $this->fetchAll(PDO::FETCH_ASSOC);
    }

    function GetEstoque() {
        $query = "SELECT * FROM estoque";

        $this->ExecuteSQL($query);

        $this->GetListaEstoque();
    }

    private function GetListaEstoque() {
        while ($lista = $this->ListarDados()) {

            $i = 1;
            while ($lista = $this->ListarDados()) {
                $data = $lista['data'];
                $data = strtotime($data);
                $data = date('H:i | d/m/Y', $data);
                $this->itens[$i] = array(
                    'id' => $lista['id'],
                    'produto' => $lista['produto'],
                    'qntd' => $lista['qntd'],
                    'datav' => $lista['data'],
                    'data' => $data
                        //'usuario_id' => $lista['usuario_id']
                );
                $i++;
            }
        }
    }

    function verificaEstoque($produto) {
        /////////QUANTIDADE ATUAL DO PRODUTO
        $query = "SELECT prod_qnt FROM produtos WHERE prod_id = $produto";
        $var = $this->ExecuteSQL($query);
        $res = $this->ListarDados($query);
        $quantidade = $res['prod_qnt'];
        /////////QUANTIDADE MINIMA DO PRODUTO
        $query2 = "SELECT prod_qnt_min FROM produtos WHERE prod_id = $produto";
        $var2 = $this->ExecuteSQL($query2);
        $res2 = $this->ListarDados($query2);
        $quantidademinima = $res2['prod_qnt_min'];
        //////VERIFICA SE A QUANTIDADE É MENOR QUE A MINIMA
        if ($quantidade < $quantidademinima) {
            $query4 = "SELECT prod_nome FROM produtos WHERE prod_id = $produto";
            $var4 = $this->ExecuteSQL($query4);
            $res4 = $this->ListarDados($query4);
            $nomeproduto = $res4['prod_nome'];
            $query3 = "INSERT INTO notificacoes (titulo) VALUES ('O produto $nomeproduto possui poucas unidades!')";
            $var3 = $this->ExecuteSQL($query3);
        }
    }

    function GetNotificacoes() {
        //busca os produtos
        $query = "SELECT * FROM notificacoes";

        //$query .= " ORDER BY id DESC"; //prod_id DESC

        $this->ExecuteSQL($query);

        $this->GetListaNotificacoes();
    }

    private function GetListaNotificacoes() {
        $i = 1;
        while ($lista = $this->ListarDados()) {
            $this->itens[$i] = array(
                'id' => $lista['id'],
                'titulo' => $lista['titulo']
            );
            $i++;
        }
    }

}

?>