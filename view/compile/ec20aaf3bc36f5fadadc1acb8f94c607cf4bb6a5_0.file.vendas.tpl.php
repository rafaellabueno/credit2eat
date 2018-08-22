<?php
/* Smarty version 3.1.32, created on 2018-08-21 20:35:52
  from 'D:\xampp\htdocs\credit2eat\view\vendas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7c5b884bbd94_43943989',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec20aaf3bc36f5fadadc1acb8f94c607cf4bb6a5' => 
    array (
      0 => 'D:\\xampp\\htdocs\\credit2eat\\view\\vendas.tpl',
      1 => 1534876551,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7c5b884bbd94_43943989 (Smarty_Internal_Template $_smarty_tpl) {
?><center>
	<h3>Lista de Vendas</h3>
</center>
<hr>

<!--	<section>
		<center>
			PAGINAS
		</center>	
	</section> -->

		<table class="table">
			<thead>
				<tr>
					<th scope="col">Cliente</th>
					<th scope="col">Valor</th>
					<th scope="col">Data</th>
					<th scope="col">Produtos</th>
				</tr>
			</thead>
			

	<!-- começa a lista de produtos -->
	<section id="vendas" class="row">

		<ul style="list-style: none">
			
			<div class="row" id="pularlinha">

				<!--<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['VEN']->value, 'V');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['V']->value) {
?>

				<!--<li class="col-md-4">
				
				<div class="thumbnail"> -->

					<!--<a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['prod_id'];?>
"> -->

				<tbody>
					<tr>			
							<!--<th scope="row"><?php echo $_smarty_tpl->tpl_vars['P']->value['prod_nome'];?>
</th>
							<td>R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['prod_valor'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['P']->value['prod_qnt'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['P']->value['prod_qnt_min'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['P']->value['prod_qnt_ven'];?>
</td>	-->				
					</tr>
				</tbody>
					

				<!--</a>

				</div> 

				</li> 

				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> -->
					
				

			</div>

		</ul>

	</section>

	</table>

	<?php }
}
