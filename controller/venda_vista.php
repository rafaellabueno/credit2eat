<?php

$smarty = new Template();

$produtos = new Produtos();
$produtos->GetProdutos();

$smarty->assign('PRO', $produtos->GetItens());


if (isset($_POST['produto'])) {

    $realizarVenda = new Vendas();
    $resp = $realizarVenda->setVendaVista($_POST['produto']);

    foreach ($_POST['produto'] as $p) {
        $quantidade = $realizarVenda->descontarQuantidade($p);
    }

    // header("location:./vendas");
}

$smarty->display('venda_vista.tpl');
?>
