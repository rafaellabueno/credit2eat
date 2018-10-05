<center>
    <h3>Atualizar Estoque</h3> 
</center>
<hr>
<br>
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
<div class="col-md-3" class="col-xs-6">
    <div class="form-group" style="width:400px">
        <label><font size=4>Insira a quantidade:</font></label>
        <input type="number" class="form-control" id="qtd" name="qtd" required>
    </div>
</div>
<div class="col-md-12" class="col-xs-6">
    <div class="col-md-3">
        <a href="javascript:void(0);" class="atualizar btn" style="color: #030300">ATUALIZAR ESTOQUE</a>
    </div>
</div>
<div class="col-md-12" class="col-xs-6">
    <hr>
    <center>
        <h3>Histórico de Atualizações</h3> 
    </center>
    <hr>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Produto</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Data</th>
            </tr>
        </thead>


        <!-- começa a lista de clientes -->
        <section id="produtos" class="row">

            <ul style="list-style: none">

                <div class="row" id="pularlinha">

                    {foreach from=$EST item=E}
                        {foreach from=$PRO item=P}
                            {if $P.prod_id == $E.produto}
                                <tbody>
                                    <tr>    
                                        <th scope="row"><a href="" style="color: #000000">{$P.prod_nome}</a></th>
                                        <td>{$E.qntd}</td>
                                        <td>{$E.data}</td>
                                    </tr>
                                </tbody>
                            {/if}
                        {/foreach}
                    {/foreach}



                </div>

            </ul>

        </section>

    </table>

</div>
<script>
    $('.atualizar').click(function () {
        var idProduto = $('#produto-select').val();
        var qtd = $('#qtd').val();
        //console.log(qtd + idProduto);
        var urlConsulta = './atualizar/' + idProduto + '/' + qtd;
        $.get(urlConsulta, function (res) {

            console.log(res);
            if (res === '1') {
                bootbox.alert("Estoque atualizado", function () {

                    window.location.reload();

                });
            } else {
                bootbox.alert("Não foi possível atualizar o estoque!", function () {


                    window.location.reload();
                });
            }
        });

    });

    function limpa() {
        if (document.getElementById('cliente').value != "") {
            document.getElementById('cliente').value = "";
            header('location:./realizar_vendas');
        }
    }
</script>