<?php
/* Smarty version 3.1.32, created on 2018-09-13 02:14:02
  from 'D:\xampp\htdocs\credit2eat\view\estoque.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b99abca85ac04_06850986',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5801e75ec3446fcc4a037cb7b87fcae9be44aacd' => 
    array (
      0 => 'D:\\xampp\\htdocs\\credit2eat\\view\\estoque.tpl',
      1 => 1536797641,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b99abca85ac04_06850986 (Smarty_Internal_Template $_smarty_tpl) {
?><center>
    <h3>Atualizar Estoque</h3>
</center>
<hr>

<html>
<form action="">
	<div id="selects">
        <div id="displayOriginal">
            <div class="form-group" class="col-md-6" style="width:500px; display: none;">
                <label><font size=4>Escolha o Produto</font></label>
                <select class="produtos-select" required>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['P']->value['prod_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['P']->value['prod_nome'];?>
 - R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['prod_valor'];?>
 </option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </div>
        </div>
    </div>
    </form>
</html>

    <?php echo '<script'; ?>
 type="text/javascript">
        $(document).ready(function () {
         $('.produtos-select').selectize({
         placeholder: 'Digite o nome do Produto...',
         onInitialize: function () {
         this.setValue(null);
         //$('.selectize-control').addClass('form-group');
         $('.selectize-input').addClass('form-control');
         }
         });
         });

    <?php echo '</script'; ?>
><?php }
}
