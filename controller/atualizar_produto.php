<?php

$smarty = new Template();

if (isset($_POST['nome_produto']) && ($_POST['valor_produto'])) {
    $produto = new Produtos();

    $resp = $produto->atualizarProduto($_POST['nome_produto'], $_POST['valor_produto'], $_POST['quantidade_produto'], $_POST['id']);
    echo 'oi';
    header("location:./editar_produto");
}

$smarty->display('editar_produto.tpl');
?>