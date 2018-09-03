<script>
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
</script>

<center>
	<h3>Realizar Venda</h3> 
</center>
<hr>
<br>
	<form id="form_venda" name="form_venda" action="./realizar_vendas" method="post">
			<div class="col-md-3" class="col-xs-6" style="width: 400px">
			 	<div class="form-group">
				    <label><font size=4>Selecione o Cliente</font></label>
				    <select id="cliente-select" name="cliente" value="{$C.cli_matricula}" required>
		            	{foreach from=$CLI item=C}
		                	<option value="{$C.cli_id}">{$C.cli_nome} - {$C.cli_matricula} </option>
		                {/foreach}
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
		                {foreach from=$PRO item=P}
		                    <option value="{$P.prod_id}">{$P.prod_nome} - R$ {$P.prod_valor} </option>
		                {/foreach}
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




	<script>
		$(document).ready(function() {
			addProduto();
		})
	</script>

	<script>
		function limpa() {
		if(document.getElementById('cliente').value!="") {
		document.getElementById('cliente').value="";
		header('location:./realizar_vendas');
		}
		}
	</script>


		<!--<div class="col-md-12" class="col-xs-6">
		  	<div class="form-check">
			    <input type="checkbox" class="form-check-input" name="a_prazo" id="a_prazo">
			    <label class="form-check-label" id="a_prazo" value="a_prazo" name="a_prazo" for="a_prazo"><font size=4>A Prazo</font></label>
		  	</div> 
		</div> -->