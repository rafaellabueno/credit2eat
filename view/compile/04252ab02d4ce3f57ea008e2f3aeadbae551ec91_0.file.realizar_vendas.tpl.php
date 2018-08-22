<?php
/* Smarty version 3.1.32, created on 2018-08-22 21:42:04
  from 'D:\xampp\htdocs\credit2eat\view\realizar_vendas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7dbc8c3923d4_98706885',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04252ab02d4ce3f57ea008e2f3aeadbae551ec91' => 
    array (
      0 => 'D:\\xampp\\htdocs\\credit2eat\\view\\realizar_vendas.tpl',
      1 => 1534961741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7dbc8c3923d4_98706885 (Smarty_Internal_Template $_smarty_tpl) {
?><center>
	<h3>Realizar Venda</h3> 
</center>
<hr>
<br>
	<form name="form_venda" action="./realizar_vendas" method="post">

	 	<div class="form-group" style="width:400px">
		    <label><font size=4>Informe a Matrícula</font></label>
		    <select id="cliente-select" name="cli_matricula" value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cli_matricula'];?>
" required>
                            <option></option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CLI']->value, 'C');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cli_id'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_nome'];?>
 < <?php echo $_smarty_tpl->tpl_vars['C']->value['cli_matricula'];?>
 ></option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
	  	</div>
	  	<div class="form-group" style="width:400px">
		    <label><font size=4>Escolha o Produto</font></label>
		    <select id="produtos-select" name="prod_nome" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['prod_nome'];?>
" required>
                            <option></option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['P']->value['prod_id'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['P']->value['prod_nome'];?>
 < R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['prod_valor'];?>
 ></option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
	  	</div>
	  	<div class="form-check">
		    <input type="checkbox" class="form-check-input" id="a_prazo">
		    <label class="form-check-label" value="1" for="a_prazo">A Prazo</label>
	  	</div> 
	
		<div class="col-md-2">
	  		<button type="submit" class="btn btn-primary btn-block" name="botao">Vender</button>
		</div>
                <div class="col-md-2">
	  		<button type="reset" class="btn btn-danger btn-block" name="botao2">Cancelar</button>
                </div>
	</form>
<?php }
}
