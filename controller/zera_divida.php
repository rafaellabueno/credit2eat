<?php

$smarty = new Template();
$produto = new Produtos();
$nomecliente = $_POST['cliente_nome'];
$produtos = explode(", ", $_POST['vendas']);
foreach ($produtos as $p) {
    $vendas = explode("-", $p);
    $query1 = "UPDATE venda_produto SET pendente=0 WHERE produto_id = $vendas[0] and venda_id = $vendas[1]";
    $var1 = $produto->ExecuteSQL($query1);
    $query2 = "UPDATE cliente SET cli_divida=0 WHERE cli_nome = '$nomecliente'";
    $var2 = $produto->ExecuteSQL($query2);
}
header("location:./cliente_divida");
?>