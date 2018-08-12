<?php
/* Smarty version 3.1.32, created on 2018-07-01 04:55:01
  from 'D:\xampp\htdocs\credit2eat\view\clientes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b384285aad069_01749092',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af003634c900808f99ca376901d5b4d1b5e23fc9' => 
    array (
      0 => 'D:\\xampp\\htdocs\\credit2eat\\view\\clientes.tpl',
      1 => 1530413700,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b384285aad069_01749092 (Smarty_Internal_Template $_smarty_tpl) {
?><h3>Lista de Clientes</h3>
<hr>

	<section>
		<center>
			PAGINAS
		</center>	
	</section>

	<!-- começa a lista de clientes -->
	<section id="produtos" class="row">

		<ul style="list-style: none">
			
			<div class="row" id="pularlinha">

				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CLI']->value, 'C');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
?>

				<li class="col-md-4">
				
				<div class="thumbnail">

					<a href="<?php echo $_smarty_tpl->tpl_vars['CLI_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['C']->value['cli_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['C']->value['c_nome'];?>
">

					<div class="caption">
						
						<h5 class="text-center">NOME: <?php echo $_smarty_tpl->tpl_vars['C']->value['cli_nome'];?>
</h5>
						<h5 class="text-center">MATRICULA: <?php echo $_smarty_tpl->tpl_vars['C']->value['cli_matricula'];?>
</h5>
						<h5 class="text-center">EMAIL: <?php echo $_smarty_tpl->tpl_vars['C']->value['cli_email'];?>
 </h5>
						<!--<h4 class="text-center">Quantidade vendidos: <?php echo $_smarty_tpl->tpl_vars['C']->value['prod_qnt_ven'];?>
</h4>
						<h4 class="text-center">Quantidade mínima: <?php echo $_smarty_tpl->tpl_vars['C']->value['prod_qnt_min'];?>
</h4> -->

					</div>

					</a>

				</div>

				</li>

				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

			</div>
		
		</ul>

	</section>

	<!-- paginação inferior -->
	<!--<section id="paginacao" class="row">
		<center>
			PAGINAS
		</center>
	</section> --><?php }
}
