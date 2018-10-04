<?php

require './lib/autoload.php';


session_start();
$smarty = new Template();



$smarty->assign('NOME', 'GUILHERME TEIXEIRA');
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('GET_HOME', Rotas::get_SiteHOME());
$smarty->assign('GET_VENDAS', Rotas::get_SiteVENDAS());
$smarty->assign('PAG_CONTATO', Rotas::pag_Contato());
$smarty->assign('PAG_MINHACONTA', Rotas::pag_MinhaConta());
$smarty->assign('PAG_PRODUTOS', Rotas::pag_Produtos());
$smarty->assign('PAG_CLIENTES', Rotas::get_SiteCLIENTES());
$smarty->assign('ERRO', Rotas::getLastError());
//$smarty->assign('PAG_NOME', Rotas::get_PagNome());
$smarty->assign('TITULO_SITE', Config::SITE_NOME);


$dados = new Conexao();
$sql = "SELECT * FROM produtos";
$dados->ExecuteSQL($sql);
$dados->TotalDados();


$path = '';


if(isset($_REQUEST['pag'])){
	$path = explode('/',  $_REQUEST['pag']);
	foreach($path as $str){
		if($str != ''){
			$path = $str;
			break;
		}
	}


	if($path == 'logout'){
		session_destroy();
		header("location:./");
		return;
	}

	if($path == 'excluir'){

		$cliente = new Clientes();
		$id = explode('/',$_REQUEST['pag']);
		$id = $id[sizeof($id)-1];
		echo $cliente->remove($id);

		return;
	}
}
if(isset($_SESSION['id'])){
	$smarty->display('index.tpl');
}
else{
	if($path == 'cadastro'){
		$smarty->display('cadastro.tpl');
	}else{
			if((isset($_POST['nome']) && isset($_POST['senha']))){
				$user = new Usuario();
				$msg = $user->logar($_POST['nome'], $_POST['senha']);
				
			}else{
				$smarty->display('login.tpl');
			}
	}


	
}


?>