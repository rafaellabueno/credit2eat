

<center>
	<h3>Realizar Venda</h3> 
</center>
<hr>
<br>
	<form name="form_venda" action="./cadastrar_produto" method="post">

	 	<div class="form-group" style="width:300px">
		    <label><font size=4>Informe a Matrícula</font></label>
		    <select id="cliente-select" name="cli_nome" value="{$C.cli_nome}" required>
                            <option></option>
                            {foreach from=$CLI item=C}
                                <option value="{$C.cli_id}" selected>{$C.cli_nome} < {$C.cli_email} ></option>
                            {/foreach}
                    </select>
	  	</div>
	  	<div class="form-group" style="width:200px">
		    <label><font size=4>Escolha o Produto</font></label>
		    <input type="text" class="form-control" id="prod_valor" name="prod_valor" required>
	  	</div>
	  	<div class="form-group" style="width:200px">
		    <label><font size=4>Quantidade Mínima</font></label>
		    <input type="text" class="form-control" id="prod_qnt_min" name="prod_qnt_min" required>
	  	</div>
	  	<div class="form-group" style="width:200px">
		    <label><font size=4>Quantidade Atual</font></label>
		    <input type="text" class="form-control" id="prod_qnt" name="prod_qnt" required>
	  	</div>
	  	<!--<div class="form-check">
		    <input type="checkbox" class="form-check-input" id="exampleCheck1">
		    <label class="form-check-label" for="exampleCheck1">Check me out</label>
	  	</div> -->
	
		<div class="col-md-2">
	  		<button type="submit" class="btn btn-primary btn-block" name="botao">Cadastrar</button>
		</div>
	</form>
