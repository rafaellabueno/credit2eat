<?php

$smarty = new Template();

$produtos = new Clientes();
$produtos->GetClientesDevem();

$smarty->assign('CLI', $produtos->GetItens());


$smarty->display('clientes_pend.tpl');
?>