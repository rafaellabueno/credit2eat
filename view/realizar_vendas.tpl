<center>
	<h3>Realizar Venda</h3> 
</center>
<hr>
<br>
	<form name="form_venda" action="./realizar_vendas" method="post">

	 	<div class="form-group" style="width:400px">
		    <label><font size=4>Informe a Matrícula</font></label>
		    <select id="cliente-select" name="cliente" value="{$C.cli_matricula}" required>
                            <option></option>
                            {foreach from=$CLI item=C}
                                <option value="{$C.cli_id}" selected>{$C.cli_nome} < {$C.cli_matricula} ></option>
                            {/foreach}
                    </select>
	  	</div>
	  	<div class="form-group" style="width:400px">
		    <label><font size=4>Escolha o Produto</font></label>
		    <select id="produtos-select" name="produto" value="{$P.prod_nome}" required>
                            <option></option>
                            {foreach from=$PRO item=P}
                                <option value="{$P.prod_id}" selected>{$P.prod_nome} < R$ {$P.prod_valor} ></option>
                            {/foreach}
                    </select>
	  	</div>
	  	<div class="form-check">
		    <input type="checkbox" class="form-check-input" name="a_prazo" id="a_prazo">
		    <label class="form-check-label" id="a_prazo" value="a_prazo" name="a_prazo" for="a_prazo">A Prazo</label>
	  	</div> 
	
		<div class="col-md-2">
	  		<button type="submit" class="btn btn-primary btn-block" name="botao">Vender</button>
		</div>
                <div class="col-md-2">
	  		<button type="reset" class="btn btn-danger btn-block" name="botao2">Cancelar</button>
                </div>
	</form>
