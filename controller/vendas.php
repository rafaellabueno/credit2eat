<?php

$smarty = new Template();

$vendas = new Vendas();
//$vendas->GetVendas();

//$smarty->assign('VEN',$vendas->GetItens());
//$smarty->assign('PRO_INFO',Rotas::pag_ProdutosInfo());


$smarty->display('vendas.tpl');


?>