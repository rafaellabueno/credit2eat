<?php
/* Smarty version 3.1.32, created on 2018-08-27 22:31:58
  from 'C:\xampp\htdocs\credit2eat\view\cadastrar_cliente.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b845fbeebc580_64548654',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2041037fbf825058555f59902059963cb23da357' => 
    array (
      0 => 'C:\\xampp\\htdocs\\credit2eat\\view\\cadastrar_cliente.tpl',
      1 => 1535401916,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b845fbeebc580_64548654 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $_smarty_tpl->tpl_vars['TITULO_SITE']->value;?>
</title>
</head>
<body>
	<center><h3>Cadastrar Novo Cliente</h3></center>
	<hr>
	<br>
	<form name="form_cliente" action="./cadastrar_cliente" method="post">

	 	<div class="form-group" style="width:300px">
		    <label><font size=4>Nome do Cliente</font></label>
		    <input type="text" class="form-control" name="cli_nome" id="cli_nome" required>
	  	</div>
	  	<div class="form-group" style="width:200px">
		    <label><font size=4>Matrícula do Cliente</font></label>
		    <input type="text" class="form-control" id="cli_matricula" name="cli_matricula" required>
	  	</div>
	  	<div class="form-group" style="width:200px">
		    <label><font size=4>Telefone</font></label>
		    <input type="text" class="form-control" id="cli_telefone" name="cli_telefone" maxlength="9" required>
	  	</div>
	  	<div class="form-group" style="width:200px">
		    <label><font size=4>Email</font></label>
		    <input type="email" class="form-control" id="cli_email" name="cli_email" required>
	  	</div>
	  	<div class="form-group" style="width:200px">
		    <label><font size=4>Senha</font></label>
		    <input type="password" class="form-control" id="cli_senha" name="cli_senha" required>
	  	</div>
	  	<!--<div class="form-check">
		    <input type="checkbox" class="form-check-input" id="exampleCheck1">
		    <label class="form-check-label" for="exampleCheck1">Check me out</label>
	  	</div> -->
	
		<div class="col-md-4">
	  		<button type="submit" class="btn btn-primary btn-block" name="botao">Cadastrar</button>
		</div>
		<div class="col-md-4">
	  		<button type="reset" class="btn btn-danger btn-block" name="botao2">Cancelar</button>
        </div>
	</form>
</body>
</html><?php }
}
