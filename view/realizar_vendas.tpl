<center>
	<h3>Realizar Venda</h3> 
</center>
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
<hr>
<br>
	<form id="form_venda" name="form_venda" action="./realizar_vendas" method="post">

	 	<div class="form-group" style="width:400px;">
		    <label><font size=4>Informe a Matrícula</font></label>
		    <select id="cliente-select" name="cliente" value="{$C.cli_matricula}" required>
                            {foreach from=$CLI item=C}
                                <option value="{$C.cli_id}">{$C.cli_nome} < {$C.cli_matricula} ></option>
                            {/foreach}
                    </select>
	  	</div>
	  	<div id="selects">
		  	<div id="displayOriginal">
			  	<div class="form-group" style="width:900px; display: none;">
		    <label><font size=4>Escolha o Produto</font></label>
		    <select class="produtos-select" name="produto[]" required>
                            {foreach from=$PRO item=P}
                                <option value="{$P.prod_id}">{$P.prod_nome} < R$ {$P.prod_valor} ></option>
                            {/foreach}
                    </select>
		  	</div>
		  </div>
		</div>
		<a onclick="addProduto()" class="btn btn-primary" role="button">Adicionar Produto</a>
	  	<div class="form-check">
		    <input type="checkbox" class="form-check-input" name="a_prazo" id="a_prazo">
		    <label class="form-check-label" id="a_prazo" value="a_prazo" name="a_prazo" for="a_prazo">A Prazo</label>
	  	</div> 
	
		<div class="col-md-4">
	  		<button type="submit" class="btn btn-primary btn-block" name="botao">Vender</button>
		</div>
        <div class="col-md-4">
	  		<button type="reset" class="btn btn-danger btn-block" name="botao2">Cancelar</button>
        </div>
	</form>
	
	<script>
		$(document).ready(function() {
			addProduto();
		})
	</script>
