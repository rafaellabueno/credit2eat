<?php

$smarty = new Template();

$cursos = new Configuracoes();
$cursos->GetCursos();

$smarty->assign('CUR', $cursos->GetItens());


$smarty->display('cursos.tpl');
?>