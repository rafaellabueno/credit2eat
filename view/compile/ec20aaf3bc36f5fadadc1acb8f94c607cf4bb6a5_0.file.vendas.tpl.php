<?php
/* Smarty version 3.1.32, created on 2018-08-28 02:14:12
  from 'D:\xampp\htdocs\credit2eat\view\vendas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b8493d40965c6_92230087',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec20aaf3bc36f5fadadc1acb8f94c607cf4bb6a5' => 
    array (
      0 => 'D:\\xampp\\htdocs\\credit2eat\\view\\vendas.tpl',
      1 => 1535415250,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b8493d40965c6_92230087 (Smarty_Internal_Template $_smarty_tpl) {
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
					<th scope="col">ID</th>
					<th scope="col">Cliente</th>
					<th scope="col">Valor</th>
					<th scope="col">Produto</th>
					<th scope="col">Data</th>
				</tr>
			</thead>
			

	<!-- começa a lista de vendas -->
	<section id="vendas" class="row">

		<ul style="list-style: none">
			
			<div class="row" id="pularlinha">

				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['VEN']->value, 'V');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['V']->value) {
?>
					<tbody>
						<tr>	
							<th scope="row"><?php echo $_smarty_tpl->tpl_vars['V']->value['id_venda'];?>
</th>	
							<th scope="row"><?php echo $_smarty_tpl->tpl_vars['V']->value['nome_cli'];?>
</th>
							<td>R$<?php echo $_smarty_tpl->tpl_vars['V']->value['valor_prod'];?>
</td> <!-- VALOR TEM QUE SER SOMA DO VALOR DOS PRODUTOS DE DENTRO DA TABELA -->
							<td><?php echo $_smarty_tpl->tpl_vars['V']->value['nome_prod'];?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['V']->value['data_venda'];?>
</td>		
						</tr>
					</tbody>
					
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
					
				

			</div>

		</ul>

	</section>

	</table>

	<?php }
}