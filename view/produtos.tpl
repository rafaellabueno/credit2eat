<center>
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

				{foreach from=$PRO item=P}

				<!--<li class="col-md-4">
				
				<div class="thumbnail"> -->

					<!--<a href="{$PRO_INFO}/{$P.prod_id}"> -->

				<tbody>
					<tr>			
							<th scope="row">{$P.prod_nome}</th>
							<td>R$ {$P.prod_valor}</td>
							<td>{$P.prod_qnt}</td>
							<td>{$P.prod_qnt_min}</td>
							<td>{$P.prod_qnt_ven}</td>					
					</tr>
				</tbody>
					

				<!--</a>

				</div> 

				</li> -->

				{/foreach}
					
				

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
						
						<h5 class="text-center"><b>{$P.prod_nome}</b></h5>
						<h5 class="text-center">R${$P.prod_valor}</h5>
						<h5 class="text-center">Quantidade: {$P.prod_qnt} Unidades</h5>
						<h5 class="text-center">Quantidade mínima: {$P.prod_qnt_min}</h5>
						<h5 class="text-center">Quantidade vendidos: {$P.prod_qnt_ven}</h5>
					</div> -->