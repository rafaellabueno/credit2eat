<?php
/* Smarty version 3.1.32, created on 2018-09-03 14:55:08
  from 'D:\xampp\htdocs\credit2eat\view\realizar_vendas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b8d2f2cbc7321_68001849',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04252ab02d4ce3f57ea008e2f3aeadbae551ec91' => 
    array (
      0 => 'D:\\xampp\\htdocs\\credit2eat\\view\\realizar_vendas.tpl',
      1 => 1535979307,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b8d2f2cbc7321_68001849 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
	var total = 0;

	function deletaProduto(id) {
		console.log($('#' + id));
		$('#' + id).remove();
	}

	function addProduto() {
		var newSelect = $("#displayOriginal");
		newSelect = newSelect.clone();
		id =  'select-' + total++;
		newSelect.find('div').attr("id", id);
		newSelect.find('div').css('display', 'block');

		newSelect.find('div select').attr('name', 'produto[]');

		button = '<a class="btn btn-danger" role="button" onclick="deletaProduto(\'' + id + '\')" style="color: red;">Apagar Produto</a>'; //BOTAO PARA APAGAR PRODUTO // >APAGAR PRODUTO</A> TEXTO PARA BOTAO

		console.log(button);
		newSelect.find('div').append(button);

       	console.log($('.produtos-select').attr("value"));
		$("#selects").append(newSelect.html());

		

		console.log(newSelect.find('div select'));
        /*newSelect.find('div select').selectize({
            placeholder: 'Digite o nome do Produto...',
            onInitialize: function () {
            	this.setValue(undefined);
                //$('.selectize-control').addClass('form-group');
                $('.selectize-input').addClass('form-control');
            }
        });*/

	}
<?php echo '</script'; ?>
>

<center>
	<h3>Realizar Venda</h3> 
</center>
<hr>
<br>
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
		  	<div class="col-md-3" class="col-xs-6">
		  		<div class="form-group" style="width:400px">
		  			<label><font size=4>Insira a senha do cliente</font></label>
		  			<input type="password" class="form-control" id="senhacliente" name="senhacliente" required>
		  		</div>
		  	</div>
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
		<div class="col-md-12" class="col-xs-6">
			<a onclick="addProduto()" class="btn btn-primary" role="button">
				Adicionar Produto
			</a>
		</div>
		<div class="col-md-12" class="col-xs-6">
			<div class="col-md-4">
		  		<button type="submit" class="btn btn-primary btn-block" name="botao">VENDA À VISTA</button>
			</div>
			<div class="col-md-4">
				<button type="submit" class="btn btn-warning btn-block" name="botao3">VENDA A PRAZO</button>
			</div>
	        <div class="col-md-4">
		  		<button type="reset" onclick="limpa()" class="btn btn-danger btn-block" name="botao2">CANCELAR</button>
	        </div>
    	</div>
	</form>
<hr>




	<?php echo '<script'; ?>
>
		$(document).ready(function() {
			addProduto();
		})
	<?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
>
		function limpa() {
		if(document.getElementById('cliente').value!="") {
		document.getElementById('cliente').value="default";
		header('location:./realizar_vendas');
		}
		}
	<?php echo '</script'; ?>
>


		<!--<div class="col-md-12" class="col-xs-6">
		  	<div class="form-check">
			    <input type="checkbox" class="form-check-input" name="a_prazo" id="a_prazo">
			    <label class="form-check-label" id="a_prazo" value="a_prazo" name="a_prazo" for="a_prazo"><font size=4>A Prazo</font></label>
		  	</div> 
		</div> --><?php }
}
