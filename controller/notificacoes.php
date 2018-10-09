<?php

$smarty = new Template();

$produtos = new Clientes();
$produtos->GetClientes();

$smarty->assign('CLI', $produtos->GetItens());


$smarty->display('index.tpl');
?>




<!--<?php

/*$smarty = new Template();

$notif = new Produtos();
$notif->GetNotificacoes();

$smarty->assign('NOT', $notif->GetItens());

$smarty->display('index.tpl');
?> -->