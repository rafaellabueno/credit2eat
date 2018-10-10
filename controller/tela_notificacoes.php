<?php

$smarty = new Template();

$notif = new Produtos();
$notif->GetNotificacoes();

$smarty->assign('NOT', $notif->GetItens());

$smarty->display('tela_notificacoes.tpl');
?> 