<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>{$TITULO_SITE}</title>
    </head>
    <body>
    <center><h3>Minha Conta</h3></center>
    <hr>
    <h4><b>Atualizar Dados</b></h4>
    {foreach from=$USER item=U}
        <form name="form_cliente" action="./atualizar_usuario" method="post">
            <div class="section">
                <div class="form-group" style="width:300px">
                    <label><font size=4>Nome</font></label>
                    <input type="text" value="{$U.nome}" class="form-control" name="usuario_nome" id="usuario_nome">
                </div>
                <div class="form-group" style="width:300px">
                    <label><font size=4>Email</font></label>
                    <input type="email" value="{$U.email}" class="form-control"  id="usuario_email" name="usuario_email">
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

    {/foreach}

</body>

<script>
    function limpa() {
        if (document.getElementById('usuario_nome').value != "") {
            document.getElementById('usuario_email').value = "";
            document.getElementById('usuario_senha').value = "";
        }
    }
</script>


</html>
