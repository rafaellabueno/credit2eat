<center>
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

				{foreach from=$CLI item=C}

				<!--<li class="col-md-4">
				
				<div class="thumbnail"> 

					<a href="{$CLI_INFO}/{$C.cli_id}/{$C.c_nome}"> -->

				<tbody>
					<tr>			
							<th scope="row">{$C.cli_nome}</th>
							<td>{$C.cli_matricula}</td>
							<td>{$C.cli_email}</td>
							<td>0</td>
					
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

	<!--<div class="caption">
						
						<h5 class="text-center">NOME: {$C.cli_nome}</h5>
						<h5 class="text-center">MATRICULA: {$C.cli_matricula}</h5>
						<h5 class="text-center">EMAIL: {$C.cli_email} </h5>
						
					</div>
 -->