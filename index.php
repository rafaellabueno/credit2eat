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

if(isset($_REQUEST['pag'])){
	if($_REQUEST['pag'] == 'logout'){
		session_destroy();
		header("location:./");
	}
}
if(isset($_SESSION['id'])){
	$smarty->display('index.tpl');
}
else{
	$_REQUEST['pag'] = isset($_REQUEST['pag']) ? $_REQUEST['pag'] : '';
		if($_REQUEST['pag'] == 'cadastro'){
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