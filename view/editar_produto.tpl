<center>
    <h3>Buscar Produto</h3> 
</center>
<hr>
<br>
<form id="editar_produto" name="editar_produto" action="./editar_produto" method="post">
    <div class="col-md-3" class="col-xs-6" style="width: 400px">
        <div class="form-group">
            <label><font size=4>Escolha um Produto</font></label>
            <select id="produto-select" name="produto" value="{$P.prod_id}" required>
                {foreach from=$PRO item=P}
                    <option id="produto" value="{$P.prod_id}">{$P.prod_nome} - {$P.prod_qnt} unidades </option>
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
</form>