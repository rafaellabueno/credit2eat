<?php
$smarty = new Template();

$produtos = new Produtos();
$produtos->GetProdutos();

$smarty->assign('PRO', $produtos->GetItens());

$produtos = new Clientes();
$produtos->GetClientes();

$smarty->assign('CLI', $produtos->GetItens());

if (isset($_POST['produto']) && isset($_POST['cliente'])) {

    $realizarVenda = new Vendas();
    $resp = $realizarVenda->setVendas($_POST['cliente'], $_POST['produto']);

    $quantidade = $realizarVenda->descontarQuantidade($_POST['produto']); 

    header("location:./vendas");
}

$smarty->display('realizar_vendas.tpl');
?>

<!-- $_POST['a_prazo'],  -->

<!--$resp = $realizarVenda->setVendas($_POST['cliente'], $_POST['valor_venda'], $_POST['a_prazo'], $_POST['data_venda'], $_POST['produto_id']); -->