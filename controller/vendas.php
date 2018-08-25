<?php

$smarty = new Template();

$vendas = new Vendas();
$vendas->GetVendas();

$smarty->assign('VEN',$vendas->GetItens());
//$smarty->assign('VENP',$vendas->GetItensP());

$smarty->display('vendas.tpl');


?>