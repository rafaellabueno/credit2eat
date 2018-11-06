<?php
/* Smarty version 3.1.33, created on 2018-10-16 18:47:57
  from 'C:\xampp\htdocs\credit2eat\view\editar_produto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc6163d55c601_95915969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3effe583245fdc8b4d78bdfb65294d945e2bc7d6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\credit2eat\\view\\editar_produto.tpl',
      1 => 1539134302,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bc6163d55c601_95915969 (Smarty_Internal_Template $_smarty_tpl) {
?><center>
    <h3>Buscar Produto</h3> 
</center>
<hr>
<br>
<form id="editar_produto" name="editar_produto" action="./editar_produto" method="post">
    <div class="col-md-3" class="col-xs-6" style="width: 400px">
        <div class="form-group">
            <label><font size=4>Escolha um Produto</font></label>
            <select id="produto-select" name="produto" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['prod_id'];?>
" required>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
                    <option id="produto" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['prod_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['P']->value['prod_nome'];?>
 - <?php echo $_smarty_tpl->tpl_vars['P']->value['prod_qnt'];?>
 unidades </option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
    </div>
    <br>
    <div class="col-md-20">
        <div class="col-xs-5">
            <div class="col-md-5">
                <button type="submit" class="btn btn-primary btn-block" name="botao">Buscar</button>
            </div>
        </div>
    </div>
</form><?php }
}
