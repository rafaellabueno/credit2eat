<center>
    <h3>Atualizar Estoque</h3>
</center>
<hr>

<html>
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
    </form>
</html>

<script>
    $(document).ready(function () {
        addProduto();
    })
</script>

<script type="text/javascript"> //PEGAR TODOS OS CLIENTES DIGITANDO MATRICULA OU NOME  
    $(document).ready(function () {
        var oldProdutos = $('#produtos-select').attr("value");
        $('#produtos-select').selectize({
            placeholder: 'Digite a matrícula do Cliente...',
            onInitialize: function () {
                this.setValue(oldProdutos, true);
                //$('.selectize-control').addClass('form-group');
                $('.selectize-input').addClass('form-control');
            }
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('.produtos-select').selectize({
            placeholder: 'Digite o nome do Produto...',
            onInitialize: function () {
                this.setValue(null);
                //$('.selectize-control').addClass('form-group');
                $('.selectize-input').addClass('form-control');
            }
        });
    });

</script>