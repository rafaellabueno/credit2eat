<?php
/* Smarty version 3.1.32, created on 2018-08-15 20:05:55
  from 'C:\xampp\htdocs\credit2eat\view\clientes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b746b832d07a4_58786423',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b1a6de485eefe4b1ee61b36e4a3407094c6f428' => 
    array (
      0 => 'C:\\xampp\\htdocs\\credit2eat\\view\\clientes.tpl',
      1 => 1534353634,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b746b832d07a4_58786423 (Smarty_Internal_Template $_smarty_tpl) {
?><center>
	<h3>Lista de Clientes</h3> 
</center>
<hr>

	<!--<section>
		<center>
				
		</center>	
	</section> --> 

		<table class="table">
			<thead>
				<tr>
					<th scope="col">Nome</th>
					<th scope="col">Matricula</th>
					<th scope="col">Email</th>
					<th>Dívida</th>
				</tr>
			</thead>


	<!-- começa a lista de clientes -->
	<section id="produtos" class="row">

		<ul style="list-style: none">
			
			<div class="row" id="pularlinha">

				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CLI']->value, 'C');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
?>

				<!--<li class="col-md-4">
				
				<div class="thumbnail"> 

					<a href="<?php echo $_smarty_tpl->tpl_vars['CLI_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['C']->value['cli_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['C']->value['c_nome'];?>
"> -->

				<tbody>
					<tr>			
							<th scope="row"><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_nome'];?>
</th>
							<td><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_matricula'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_email'];?>
</td>
							<td>0</td>
					
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

	<!--<div class="caption">
						
						<h5 class="text-center">NOME: <?php echo $_smarty_tpl->tpl_vars['C']->value['cli_nome'];?>
</h5>
						<h5 class="text-center">MATRICULA: <?php echo $_smarty_tpl->tpl_vars['C']->value['cli_matricula'];?>
</h5>
						<h5 class="text-center">EMAIL: <?php echo $_smarty_tpl->tpl_vars['C']->value['cli_email'];?>
 </h5>
						
					</div>
 --><?php }
}
