<center>
    <h3>Atualizar Estoque</h3>
</center>
<hr>

<html>
    <form action="">
        <div id="selects">
            <div id="displayOriginal">
                <div class="form-group" class="col-md-6" style="width:500px; display: none;">
                    <label><font size=4>Escolha o Produto</font></label>
                    <select class="produtos-select" required>
                        {foreach from=$PRO item=P}
                            <option value="{$P.prod_id}">{$P.prod_nome} - R$ {$P.prod_valor} </option>
                        {/foreach}
                    </select>
                </div>
            </div>
        </div>
    </form>
</html>

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