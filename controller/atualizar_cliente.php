<?php

$smarty = new Template();

$cliente = new Clientes();
$cliente->GetClientes();

$smarty->assign('CLI', $cliente->GetItens());


#if (isset($_POST['usuario_nome'])) {
   # $usuario = new Usuario();

   # $resp = $usuario->alterarUsuario($_POST['usuario_nome'], $_POST['usuario_email']);

   # header("location:./minhaconta");
#}

$smarty->display('atualizar_cliente.tpl');
?>