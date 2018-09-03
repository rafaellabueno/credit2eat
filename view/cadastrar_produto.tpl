<center>
<h3>Cadastrar Novo Produto</h3>
</center>
<hr>
<br>
	<form name="form_produto" action="./cadastrar_produto" method="post">

	 	<div class="form-group" style="width:300px">
		    <label><font size=4>Nome do Produto</font></label>
		    <input type="text" class="form-control" name="prod_nome" id="prod_nome" required>
	  	</div>
	  	<div class="form-group" style="width:200px">
		    <label><font size=4>Valor do Produto</font></label>
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
		<div class="col-md-4">
	  		<button type="submit" class="btn btn-primary btn-block" name="botao">Cadastrar</button>
		</div>
		<div class="col-md-4">
	  		<button type="reset" onclick="limpa()" class="btn btn-danger btn-block" name="botao2">Cancelar</button>
        </div>
	</form>

<script>
function limpa() {
if(document.getElementById('prod_nome').value!="") {
document.getElementById('prod_nome').value="";
document.getElementById('prod_valor').value="";
document.getElementById('prod_qnt_min').value="";
document.getElementById('prod_qnt').value="";
}
}
</script>


		<!--<div class="form-check">
		    <input type="checkbox" class="form-check-input" id="exampleCheck1">
		    <label class="form-check-label" for="exampleCheck1">Check me out</label>
	  	</div> -->