<html>
    <center>
        <h3>Buscar Cliente</h3> 
    </center>
    <hr>
    <br>
    <form id="form_divida" name="form_divida" action="./cliente_divida" method="post">
        <div align="left">
            <div class="col-md-3" class="col-xs-6" style="width: 400px">
                <div class="form-group">
                    <label><font size=4>Selecione o Cliente</font></label>
                    <select id="cliente-select" name="cliente" value="{$C.cli_matricula}" required>
                        {foreach from=$CLI item=C}
                            <option value="{$C.cli_id}">{$C.cli_nome} - {$C.cli_matricula} - {$C.cli_curso}</option>
                        {/foreach}
                    </select>
                </div>
            </div>
            <br>
            <div class="col-md-20">
                <div class="col-xs-5">
                    <div class="col-md-5">
                        <button type="submit" class="btn btn-primary btn-block" name="botao">Buscar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <hr>
</html>

<script>
    function limpa() {
        if (document.getElementById('cliente').value != "") {
            document.getElementById('cliente').value = "";
            header('location:/cliente_divida');
        }
    }
</script>