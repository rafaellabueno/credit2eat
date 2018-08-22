<?php

$smarty = new Template();

if(isset($_POST['cli_matricula'])){

	$venda = new Vendas();
	$resp = $venda->setVendas($_POST['']);

}

$smarty->display('realizar_vendas.tpl');


?>