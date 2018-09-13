<?php
/* Smarty version 3.1.32, created on 2018-09-13 16:10:05
  from 'D:\xampp\htdocs\credit2eat\view\estoque.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9a6fbd0ac665_58227412',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5801e75ec3446fcc4a037cb7b87fcae9be44aacd' => 
    array (
      0 => 'D:\\xampp\\htdocs\\credit2eat\\view\\estoque.tpl',
      1 => 1536845183,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9a6fbd0ac665_58227412 (Smarty_Internal_Template $_smarty_tpl) {
?><center>
    <h3>Atualizar Estoque</h3>
</center>
<hr>

<html>
	<form id="form_venda" name="form_venda" action="./realizar_vendas" method="post">
	    <div class="col-md-3" class="col-xs-6" style="width: 400px">
	        <div class="form-group">
	            <label><font size=4>Selecione o Cliente</font></label>
	            <select id="cliente-select" name="cliente" value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cli_matricula'];?>
" required>
	                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CLI']->value, 'C');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
?>
	                    <option value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cli_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_nome'];?>
 - <?php echo $_smarty_tpl->tpl_vars['C']->value['cli_matricula'];?>
 </option>
	                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	            </select>
	        </div>
	    </div>
    </form>
</html>

<?php echo '<script'; ?>
> 
    $(document).ready(function () {
        addProduto();
    })
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript"> //PEGAR TODOS OS CLIENTES DIGITANDO MATRICULA OU NOME  
    $(document).ready(function () {
        var oldProdutos = $('#produtos-select').attr("value");
        $('#produtos-select').selectize({
            placeholder: 'Digite a matrícula do Cliente...',
            onInitialize: function () {
                this.setValue(oldProdutos, true);
                //$('.selectize-control').addClass('form-group');
                $('.selectize-input').addClass('form-control');
            }
        });
    });
<?php echo '</script'; ?>
>

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
