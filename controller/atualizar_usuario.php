<?php

$smarty = new Template();

if (isset($_POST['usuario_nome'])) {
    $usuario = new Usuario();

    $resp = $usuario->alterarUsuario($_POST['usuario_nome'], $_POST['usuario_email']);

    header("location:./minhaconta");
}

$smarty->display('minhaconta.tpl');
?>