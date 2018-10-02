<?php

$smarty = new Template();

$produtos = new Clientes();
$produtos->GetClientes();

$smarty->assign('CLI', $produtos->GetItens());


//$smarty->display('clientes.tpl');
?>