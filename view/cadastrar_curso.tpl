<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>{$TITULO_SITE}</title>
    </head>
    <body>
    <center><h3>Cadastrar Novo Curso</h3></center>
    <hr>
    <br>
    <form name="form_curso" action="./cadastrar_curso" method="post">

        <div class="form-group" style="width:300px">
            <label><font size=4>Nome do Curso</font></label>
            <input type="text" class="form-control" name="curso_nome" id="curso_nome" required>
        </div>
        <div class="col-md-2">
            <button type="submit" class="btn btn-primary btn-block" name="botao">Cadastrar</button>
        </div>
        <div class="col-md-2">
            <button type="reset" onclick="limpa()" class="btn btn-danger btn-block" name="botao2">Cancelar</button>
        </div>
    </form>
</body>

<script>
    function limpa() {
        if (document.getElementById('curso_nome').value != "") {
            document.getElementById('curso_nome').value = "";
    }
</script>

</html>