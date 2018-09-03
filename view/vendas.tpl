<center>
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

				{foreach from=$VEN item=V}
					<tbody>
						<tr>	
							<th scope="row">{$V.id_venda}</th>	
							<th scope="row">{$V.nome_cli}</th>
							<td>R${$V.valor_prod}</td> <!-- VALOR TEM QUE SER SOMA DO VALOR DOS PRODUTOS DE DENTRO DA TABELA -->
							<td>{$V.nome_prod}</td>
                            <td>{$V.data_venda}</td>		
						</tr>
					</tbody>
					
				{/foreach} 
					
				

			</div>

		</ul>

	</section>

	</table>

	