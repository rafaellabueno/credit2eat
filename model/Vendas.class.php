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
        $query = "SELECT * FROM venda inner join venda_produto where venda.id_venda = venda_produto.venda_id and id_user = $_SESSION[id]";

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

    function setVendas($cliente, $produtos) {
        $query = "INSERT INTO venda (id_cliente, id_user) VALUES ('$cliente','$_SESSION[id]')";
        $var = $this->ExecuteSQL($query);
        $id = $this->LastInsertID();
        foreach ($produtos as $produto) {
            $valor = "SELECT prod_valor FROM produtos WHERE prod_id = $produto";
            $valor_total = $valor + $valor_total;
            $query2 = "INSERT INTO venda_produto (venda_id, produto_id) VALUES ('{$id}', $produto);";
            $var2 = $this->ExecuteSQL($query2);
        }
        $query3 = "UPDATE cliente SET cli_divida='$valor_total' WHERE cli_id = $cliente"; 
        $var3 = $this->ExecuteSQL($query3);
    }

    function setVendaVista($produtos) {
        $query = "INSERT INTO venda (id_cliente, id_user) VALUES ('12','$_SESSION[id]')";
        $var = $this->ExecuteSQL($query);
        $id = $this->LastInsertID();
        foreach ($produtos as $produto) {
            $query2 = "INSERT INTO venda_produto (venda_id, produto_id) VALUES ('{$id}', $produto);";
            $var2 = $this->ExecuteSQL($query2);
        }
    }

}

?>
