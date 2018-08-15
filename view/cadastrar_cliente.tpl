<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{$TITULO_SITE}</title>
</head>
<body>
	<center><h3>Cadastrar Novo Cliente</h3></center>
	<hr>
	<br>
	<form name="form_cliente" action="./cadastrar_cliente" method="post">

	 	<div class="form-group" style="width:300px">
		    <label><font size=4>Nome do Cliente</font></label>
		    <input type="text" class="form-control" name="cli_nome" id="cli_nome" required>
	  	</div>
	  	<div class="form-group" style="width:200px">
		    <label><font size=4>Matrícula do Cliente</font></label>
		    <input type="text" class="form-control" id="cli_matricula" name="cli_matricula" required>
	  	</div>
	  	<div class="form-group" style="width:200px">
		    <label><font size=4>Telefone</font></label>
		    <input type="text" class="form-control" id="cli_telefone" name="cli_telefone" maxlength="9" required>
	  	</div>
	  	<div class="form-group" style="width:200px">
		    <label><font size=4>Email</font></label>
		    <input type="email" class="form-control" id="cli_email" name="cli_email" required>
	  	</div>
	  	<div class="form-group" style="width:200px">
		    <label><font size=4>Senha</font></label>
		    <input type="password" class="form-control" id="cli_senha" name="cli_senha" required>
	  	</div>
	  	<!--<div class="form-check">
		    <input type="checkbox" class="form-check-input" id="exampleCheck1">
		    <label class="form-check-label" for="exampleCheck1">Check me out</label>
	  	</div> -->
	
		<div class="col-md-2">
	  		<button type="submit" class="btn btn-primary btn-block" name="botao">Cadastrar</button>
		</div>
	</form>
</body>
</html>