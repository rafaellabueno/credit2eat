<?php  
if(isset($_POST['senha']) && isset($_POST['nome']) && isset($_POST['email'])){
	$user = new Usuario();
	$resp = $user->cadastrar($_POST['nome'], $_POST['email'], $_POST['senha']);
}
?>