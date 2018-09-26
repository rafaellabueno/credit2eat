<?php
$smarty = new Template();

$produtos = new Produtos();
$produtos->GetProdutos();

$smarty->assign('PRO', $produtos->GetItens());


if (isset($_POST['produto'])) {

    $realizarVenda = new Vendas();
    $resp = $realizarVenda->setVendas($_POST['cliente'], $_POST['produto']);

    $quantidade = $realizarVenda->descontarQuantidade($_POST['produto']); //nao está funcionando

    header("location:./vendas");
}

$smarty->display('venda_vista.tpl');
?>

<!-- $_POST['a_prazo'],  -->

<!--$resp = $realizarVenda->setVendas($_POST['cliente'], $_POST['valor_venda'], $_POST['a_prazo'], $_POST['data_venda'], $_POST['produto_id']); -->