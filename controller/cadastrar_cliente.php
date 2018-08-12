<?php

$smarty = new Template();

if(isset($_POST['cli_nome'])){

	$cli = new Clientes();
	$resp = $cli->setCliente($_POST['cli_nome'], $_POST['cli_matricula'], $_POST['cli_telefone'], $_POST['cli_email'], $_POST['cli_senha']);

/*	echo '<pre>';
	print_r($_POST);
	echo '</pre>'; */

	header("location:./clientes");
}


$smarty->display('cadastrar_cliente.tpl');


?>