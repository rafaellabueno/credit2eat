<?php
/* Smarty version 3.1.32, created on 2018-08-15 20:52:45
  from 'C:\xampp\htdocs\credit2eat\view\realizar_vendas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b74767dba6140_08308805',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a63e1693968850f2a91f716a6c9cb78a14e593cf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\credit2eat\\view\\realizar_vendas.tpl',
      1 => 1534359163,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b74767dba6140_08308805 (Smarty_Internal_Template $_smarty_tpl) {
?>

<center>
	<h3>Realizar Venda</h3> 
</center>
<hr>
<br>
	<form name="form_venda" action="./cadastrar_produto" method="post">

	 	<div class="form-group" style="width:300px">
		    <label><font size=4>Informe a Matrícula</font></label>
		    <select id="cliente-select" name="cli_nome" value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cli_nome'];?>
" required>
                            <option></option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CLI']->value, 'C');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cli_id'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_nome'];?>
 < <?php echo $_smarty_tpl->tpl_vars['C']->value['cli_email'];?>
 ></option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
	  	</div>
	  	<div class="form-group" style="width:200px">
		    <label><font size=4>Escolha o Produto</font></label>
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
	  	<!--<div class="form-check">
		    <input type="checkbox" class="form-check-input" id="exampleCheck1">
		    <label class="form-check-label" for="exampleCheck1">Check me out</label>
	  	</div> -->
	
		<div class="col-md-2">
	  		<button type="submit" class="btn btn-primary btn-block" name="botao">Cadastrar</button>
		</div>
	</form>
<?php }
}
