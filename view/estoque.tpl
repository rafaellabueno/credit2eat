

<center>
    <h3>Atualizar Estoque</h3> 
</center>
<hr>
<br>
<form id="atualiza" name="atualiza" action="./atualiza" method="post">
    <div>
    <div class="col-md-3" class="col-xs-6" style="width: 400px">
        <div class="form-group">
            <label><font size=4>Escolha um Produto</font></label>
            <select id="produto-select" name="produto" value="{$P.prod_id}" required>
                {foreach from=$PRO item=P}
                    <option value="{$P.prod_id}">{$P.prod_nome} - {$P.prod_valor} </option>
                {/foreach}
            </select>
        </div>
    </div>
    <div class="col-md-3" class="col-xs-6">
        <div class="form-group" style="width:400px">
            <label><font size=4>Insira a quantidade:</font></label>
            <input type="number" class="form-control" id="qtd" name="qtd" required>
    </div>
    </div>
    <div class="col-md-12" class="col-xs-6">
        <div class="col-md-3">
            <button type="submit" class="btn btn-primary btn-block" name="botao">ATUALIZAR ESTOQUE</button>
        </div>
    </div>
</form>
<hr>





<script>
    function limpa() {
        if (document.getElementById('cliente').value != "") {
            document.getElementById('cliente').value = "";
            header('location:./realizar_vendas');
        }
    }
</script>


<!--<div class="col-md-12" class="col-xs-6">
        <div class="form-check">
            <input type="checkbox" class="form-check-input" name="a_prazo" id="a_prazo">
            <label class="form-check-label" id="a_prazo" value="a_prazo" name="a_prazo" for="a_prazo"><font size=4>A Prazo</font></label>
        </div> 
</div> -->