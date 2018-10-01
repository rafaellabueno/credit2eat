<?php

$smarty = new Template();

$cliente = new Clientes();


$smarty->assign('C', $cliente->GetClienteID(4));


$smarty->display('atualizar_cliente.tpl');
?>