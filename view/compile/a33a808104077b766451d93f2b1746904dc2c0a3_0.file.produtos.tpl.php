<?php
/* Smarty version 3.1.32, created on 2018-08-15 02:01:58
  from 'D:\xampp\htdocs\credit2eat\view\produtos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b736d76e906a0_70204560',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a33a808104077b766451d93f2b1746904dc2c0a3' => 
    array (
      0 => 'D:\\xampp\\htdocs\\credit2eat\\view\\produtos.tpl',
      1 => 1534291316,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b736d76e906a0_70204560 (Smarty_Internal_Template $_smarty_tpl) {
?><center>
	<h3>Lista de Produtos</h3>
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
					<th scope="col">Nome</th>
					<th scope="col">Valor</th>
					<th scope="col">Quantidade</th>
					<th scope="col">Mínimo</th>
					<th scope="col">Vendidos</th>
				</tr>
			</thead>
			

	<!-- começa a lista de produtos -->
	<section id="produtos" class="row">

		<ul style="list-style: none">
			
			<div class="row" id="pularlinha">

				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>

				<!--<li class="col-md-4">
				
				<div class="thumbnail"> -->

					<!--<a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['prod_id'];?>
"> -->

				<tbody>
					<tr>			
							<th scope="row"><?php echo $_smarty_tpl->tpl_vars['P']->value['prod_nome'];?>
</th>
							<td>R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['prod_valor'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['P']->value['prod_qnt'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['P']->value['prod_qnt_min'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['P']->value['prod_qnt_ven'];?>
</td>					
					</tr>
				</tbody>
					

				<!--</a>

				</div> 

				</li> -->

				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					
				

			</div>

		</ul>

	</section>

	</table>

	<!-- paginação inferior -->
	<!--<section id="paginacao" class="row">
		<center>
			PAGINAS
		</center>
	</section> -->


<!--						<div class="caption">
						
						<h5 class="text-center"><b><?php echo $_smarty_tpl->tpl_vars['P']->value['prod_nome'];?>
</b></h5>
						<h5 class="text-center">R$<?php echo $_smarty_tpl->tpl_vars['P']->value['prod_valor'];?>
</h5>
						<h5 class="text-center">Quantidade: <?php echo $_smarty_tpl->tpl_vars['P']->value['prod_qnt'];?>
 Unidades</h5>
						<h5 class="text-center">Quantidade mínima: <?php echo $_smarty_tpl->tpl_vars['P']->value['prod_qnt_min'];?>
</h5>
						<h5 class="text-center">Quantidade vendidos: <?php echo $_smarty_tpl->tpl_vars['P']->value['prod_qnt_ven'];?>
</h5>
					</div> --><?php }
}