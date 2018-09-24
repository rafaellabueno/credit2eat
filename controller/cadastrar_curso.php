<?php 

$smarty = new Template();

if(isset($_POST['curso_nome'])){

	$curso = new Configuracoes();

	$resp = $curso->setCursos($_POST['curso_nome']);

	header("location:./cursos");
}

$smarty->display('cadastrar_curso.tpl');

?>