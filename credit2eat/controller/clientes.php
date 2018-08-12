<?php

$smarty = new Template();

$produtos = new Clientes();
$produtos->GetClientes();

$smarty->assign('CLI',$produtos->GetItens());
$smarty->assign('PRO_INFO',Rotas::pag_ProdutosInfo());


$smarty->display('clientes.tpl');



?>