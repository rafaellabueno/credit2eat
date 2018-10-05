<?php

$cliente = new Cliente();
$id = explode('/', $_REQUEST['pag']);
$id = $id[$id->length - 1];
//$cliente->remove();
echo $id;
?>