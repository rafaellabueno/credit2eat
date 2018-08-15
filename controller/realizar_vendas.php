<?php

$smarty = new Template();

$produtos = new Produtos();
$produtos->GetProdutos();

$smarty->assign('PRO',$produtos->GetItens());
//$smarty->assign('PRO_INFO',Rotas::pag_ProdutosInfo());

$produtos = new Clientes();
$produtos->GetClientes();

$smarty->assign('CLI',$produtos->GetItens());

$smarty->display('realizar_vendas.tpl');


?>