<center>
	<h3>Lista de Produtos</h3>
</center>
<hr>

<!--	<section>
		<center>
			PAGINAS
		</center>	
	</section> -->

	<!-- começa a lista de produtos -->
	<section id="produtos" class="row">

		<ul style="list-style: none">
			
			<div class="row" id="pularlinha">

				{foreach from=$PRO item=P}

				<li class="col-md-4">
				
				<div class="thumbnail">

					<!--<a href="{$PRO_INFO}/{$P.prod_id}/{$P.prod_slug}"> -->

					<div class="caption">
						
						<h5 class="text-center"><b>{$P.prod_nome}</b></h5>
						<h5 class="text-center">R${$P.prod_valor}</h5>
						<h5 class="text-center">Quantidade: {$P.prod_qnt} Unidades</h5>
						<h5 class="text-center">Quantidade mínima: {$P.prod_qnt_min}</h5>
						<h5 class="text-center">Quantidade vendidos: {$P.prod_qnt_ven}</h5>
					</div>

					</a>

				</div>

				</li>

				{/foreach}

			</div>
		
		</ul>

	</section>

	<!-- paginação inferior -->
	<!--<section id="paginacao" class="row">
		<center>
			PAGINAS
		</center>
	</section> -->