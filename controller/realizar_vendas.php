<?php

$smarty = new Template();

$produtos = new Produtos();
$produtos->GetProdutos();

$smarty->assign('PRO',$produtos->GetItens());

$produtos = new Clientes();
$produtos->GetClientes();

$smarty->assign('CLI',$produtos->GetItens());


if(isset($_POST['id_produto'])){

	$venda = new Vendas();
	$resp = $venda->setVendas($_POST['id_cliente'], $_POST['valor_venda'], $_POST['a_prazo'], $_POST['data_venda'], $_POST['produto_id']);

}

$smarty->display('realizar_vendas.tpl');


?>