<?php

$smarty = new Template();

$produtos = new Produtos();
$produtos->GetProdutos();

$estoque = new Produtos();
$estoque->GetEstoque();

$smarty->assign('PRO', $produtos->GetItens());

$smarty->assign('EST', $estoque->GetItens());

$smarty->display('estoque.tpl');
?>