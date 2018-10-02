<?php

$smarty = new Template();

$usuario = new Usuario();
//$usuario->GetClientes();

/*if(isset($_SESSION['id'])){
    $id = $_SESSION['id'];
    $nomeuser = "SELECT nome FROM usuario WHERE id = $id";
}*/

$smarty->display('index.tpl');

?>