<?php

require './lib/autoload.php';

$smarty = new Template();



$smarty->assign('NOME', 'GUILHERME TEIXEIRA');
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('GET_HOME', Rotas::get_SiteHOME());
$smarty->assign('GET_VENDAS', Rotas::get_SiteVENDAS());
$smarty->assign('PAG_CONTATO', Rotas::pag_Contato());
$smarty->assign('PAG_MINHACONTA', Rotas::pag_MinhaConta());
$smarty->assign('PAG_PRODUTOS', Rotas::pag_Produtos());
$smarty->assign('PAG_CLIENTES', Rotas::get_SiteCLIENTES());
$smarty->assign('TITULO_SITE', Config::SITE_NOME);

$dados = new Conexao();
$sql = "SELECT * FROM produtos";
$dados->ExecuteSQL($sql);
$dados->TotalDados();


$smarty->display('index.tpl');
?>