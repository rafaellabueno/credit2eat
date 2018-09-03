<?php
/* Smarty version 3.1.32, created on 2018-09-03 14:51:37
  from 'D:\xampp\htdocs\credit2eat\view\cadastrar_produto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b8d2e59e52033_82078032',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7f6c1a1b2d7525a339272ca3a64e850bd34c216' => 
    array (
      0 => 'D:\\xampp\\htdocs\\credit2eat\\view\\cadastrar_produto.tpl',
      1 => 1535979093,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b8d2e59e52033_82078032 (Smarty_Internal_Template $_smarty_tpl) {
?><center>
<h3>Cadastrar Novo Produto</h3>
</center>
<hr>
<br>
	<form name="form_produto" action="./cadastrar_produto" method="post">

	 	<div class="form-group" style="width:300px">
		    <label><font size=4>Nome do Produto</font></label>
		    <input type="text" class="form-control" name="prod_nome" id="prod_nome" required>
	  	</div>
	  	<div class="form-group" style="width:200px">
		    <label><font size=4>Valor do Produto</font></label>
		    <input type="text" class="form-control" id="prod_valor" name="prod_valor" required>
	  	</div>
	  	<div class="form-group" style="width:200px">
		    <label><font size=4>Quantidade Mínima</font></label>
		    <input type="text" class="form-control" id="prod_qnt_min" name="prod_qnt_min" required>
	  	</div>
	  	<div class="form-group" style="width:200px">
		    <label><font size=4>Quantidade Atual</font></label>
		    <input type="text" class="form-control" id="prod_qnt" name="prod_qnt" required>
	  	</div>
		<div class="col-md-4">
	  		<button type="submit" class="btn btn-primary btn-block" name="botao">Cadastrar</button>
		</div>
		<div class="col-md-4">
	  		<button type="reset" onclick="limpa()" class="btn btn-danger btn-block" name="botao2">Cancelar</button>
        </div>
	</form>

<?php echo '<script'; ?>
>
function limpa() {
if(document.getElementById('prod_nome').value!="") {
document.getElementById('prod_nome').value="";
document.getElementById('prod_valor').value="";
document.getElementById('prod_qnt_min').value="";
document.getElementById('prod_qnt').value="";
}
}
<?php echo '</script'; ?>
>


		<!--<div class="form-check">
		    <input type="checkbox" class="form-check-input" id="exampleCheck1">
		    <label class="form-check-label" for="exampleCheck1">Check me out</label>
	  	</div> --><?php }
}
