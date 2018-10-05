<?php

$smarty = new Template();

$produto = new Produtos();
$produto->GetProdutos();

$smarty->assign('PRO', $produto->GetItens());


#if (isset($_POST['usuario_nome'])) {
# $usuario = new Usuario();
# $resp = $usuario->alterarUsuario($_POST['usuario_nome'], $_POST['usuario_email']);
# header("location:./minhaconta");
#}

$smarty->display('atualizar_produto.tpl');
?>