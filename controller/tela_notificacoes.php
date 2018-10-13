<?php

$smarty = new Template();

$notif = new Produtos();
$notif->GetNotificacoes();

$smarty->assign('NOT', $notif->GetItens());

$smarty->display('tela_notificacoes.tpl');

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    ////////////ALTERAR VISTO PARA 1 PARA NAO APARECER LA EM CIMA
    $query = "UPDATE notificacoes SET visto='1'WHERE id='$id'";
    $var = $notif->ExecuteSQL($query);
    ///////////INSERIR (VISTO) DO LADO DA MENSAGEM
    $query2 = "SELECT * FROM notificacoes WHERE id='$id' ";
    $var2 = $notif->ExecuteSQL($query2);
    $res2 = $notif->ListarDados($query2);
    $texto = $res2['titulo'];
    $novotexto = $texto . " (VISTO)";
    /////////ATUALIZAR TITULO NO BANCO
    $query3 = "UPDATE notificacoes SET titulo='$novotexto' WHERE id='$id'";
    $var3 = $notif->ExecuteSQL($query3);

    header('location:./tela_notificacoes');
}
?> 