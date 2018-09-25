<?php

$smarty = new Template();

if (isset($_POST['qtd']) && isset($_POST['produto'])) {
    $produto = new Produtos();

    $resp = $produto->alterarProdutos($_POST['qtd'], $_POST['produto']);

    header("location:./estoque");
}

$smarty->display('estoque.tpl');
?>