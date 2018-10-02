<?php

$smarty = new Template();

$usuario = new Usuario();
$usuario->GetUsuario();

$smarty->assign('USER', $usuario->GetItens());

$smarty->display('minhaconta.tpl');
?>