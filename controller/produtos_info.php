<?php

$smarty = new Template();

$produtos = new Produtos();

$smarty->display('produtos_info.tpl');

?>