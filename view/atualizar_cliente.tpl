<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>{$TITULO_SITE}</title>
    </head>
    <body>
    <center><h3>Atualizar Dados do Cliente</h3></center>
    <hr>
    <h4><b>Atualizar Dados</b></h4>
        <form name="atualizar_cliente" action="./atualizar_cliente" method="post">
            <div class="section">
                <div class="form-group" style="width:300px">
                    <label><font size=4>Nome</font></label>
                    <input type="text" value="{$C.nome}" class="form-control" name="cliente_nome" id="cliente_nome">
                </div>
                <div class="form-group" style="width:300px">
                    <label><font size=4>Email</font></label>
                    <input type="email" value="{$C.email}" class="form-control"  id="cliente_email" name="cliente_email">
                </div>
                <div class="form-group" style="width:300px">
                    <label><font size=4>Telefone</font></label>
                    <input type="telefone" value="{$C.telefone}" class="form-control"  id="cliente_telefone" name="cliente_telefone">
                </div>
            </div>
            <h4><b>Atualizar Senha</b></h4>
            <div class="form-group" style="width:300px">
                <label><font size=4>Senha Atual</font></label>
                <input type="password" value="" class="form-control" id="usuario_senha" name="usuario_senha">
            </div>
            <div class="form-group" style="width: 300px">
                <label><font size=4>Nova Senha</font></label>
                <input type="password" value="" class="form-control" id="usuario_senha" name="usuario_senha">
            </div>
            <div class="col-md-3">
                <button type="submit" class="btn btn-primary btn-block" name="botao">Atualizar</button>
            </div>
            <div class="col-md-3">
                <button type="reset" onclick="limpa()" class="btn btn-danger btn-block" name="botao2">Cancelar</button>
            </div>
        </form>


</body>

<script>
    function limpa() {
        if (document.getElementById('clientenome').value != "") {
            document.getElementById('clienteemail').value = "";
            document.getElementById('cliente_senha').value = "";
        }
    }
</script>


</html>
