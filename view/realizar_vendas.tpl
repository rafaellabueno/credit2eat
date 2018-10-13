<script>
    var total = 0;

    function deletaProduto(id) {
        console.log($('#' + id));
        $('#' + id).remove();
    }

    function addProduto() {
        var newSelect = $("#displayOriginal");
        newSelect = newSelect.clone();
        id = 'select-' + total++;
        newSelect.find('div').attr("id", id);
        newSelect.find('div').css('display', 'block');

        newSelect.find('div select').attr('name', 'produto[]');

        button = '<a class="btn btn-danger" role="button" onclick="deletaProduto(\'' + id + '\')" style="color: red;">Apagar Produto</a>'; //BOTAO PARA APAGAR PRODUTO // >APAGAR PRODUTO</A> TEXTO PARA BOTAO

        newSelect.find('div').append(button);

        $("#selects").append(newSelect.html());
        var oldVal = $("#selects select:last").attr('value');
        $("#selects select:last").selectize({
            placeholder: 'Digite o nome do Produto...',
            onInitialize: function () {
                this.setValue(oldVal, true);
            }

        });

        /*newSelect.find('div select').selectize({
         placeholder: 'Digite o nome do Produto...',
         onInitialize: function () {
         this.setValue(oldProduto, true);
         //$('.selectize-control').addClass('form-group');
         //newSelect.find('div select').addClass('form-control');
         }
         });/**/




        //console.log(newSelect.find('div select'));
        /*newSelect.find('div select').selectize({
         placeholder: 'Digite o nome do Produto...',
         onInitialize: function () {
         this.setValue(undefined);
         //$('.selectize-control').addClass('form-group');
         $('.selectize-input').addClass('form-control');
         }
         });*/

    }
</script>



<div class="row">
    <div class="col-md-offset-4 col-md-4">
        <center>
            <h3>Realizar Venda</h3> 
        </center>
    </div>

    <div class="col-md-4" style="" >
        <div id="img"></div>
    </div>

</div>
<hr>
<br>
<form id="form_venda" name="form_venda" action="./realizar_vendas" method="post">
    <div class="container">



        <div class="row">

            <div class="col-md-3" style="width: 400px">
                <div class="form-group">
                    <label><font size=4>Selecione o Cliente</font></label>
                    <select id="cliente-select" name="cliente" value="{$C.cli_matricula}" style="background-color: #f7f7f8; border: 0px;" >
                        {foreach from=$CLI item=C}
                            <option value="{$C.cli_matricula}">{$C.cli_nome} - {$C.cli_matricula} </option>
                        {/foreach}
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group" style="width:300px">
                    <label><font size=4>Insira a senha do cliente</font></label>
                    <input type="password" class="form-control" id="senha" name="senha" >
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <a onclick="searchCli()" class="btn btn-primary" role="button" style="display: inline-block;">
                    Procurar Cliente</a>
            </div>          
        </div>
        <br>


        <div id="displayOriginal" class="row">
            <div class="form-group" class="col-md-12" style="display: none;">
                <label><font size="4">Escolha o Produto</font></label><br>
                <select  class="produtos-select col-md-6" required>
                    {foreach from=$PRO item=P}
                        <option value="{$P.prod_id}">{$P.prod_nome} - R$ {$P.prod_valor} - Quantidade: {$P.prod_qnt} </option>
                    {/foreach}
                </select>

            </div>
        </div>


        <div id="selects">
        </div>
        <div class="row">
            <div class="col-md-12">
                <a onclick="addProduto()" class="btn btn-primary" role="button" style="display: inline-block;">
                    Adicionar Produto</a>
            </div>          
        </div>
        <br>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group" style="width:150px">
                    <label><font size=4>Valor</font></label>
                    <input type="text" class="form-control" id="valor" name="valor" >
                </div>
            </div>
        </div>
        <br>
        <div class="col-md-12" class="col-xs-6">
            <div class="col-md-3">
                <button type="submit" class="btn btn-primary btn-block" name="botao">REALIZAR VENDA A PRAZO</button>
            </div>
            <div class="col-md-3">
                <button type="reset" onclick="limpa()" class="btn btn-danger btn-block" name="botao2">CANCELAR</button>
            </div>
            <div class="col-md-3">
                <button type="submit" class="btn btn-warning btn-block" name="botao3">REALIZAR VENDA À VISTA</button>
            </div>
        </div>
    </div>
</form>

</hr>




<script>
    $(document).ready(function () {
        addProduto();
    })
</script>

<script>
    function limpa() {
        if (document.getElementById('cliente').value != "") {
            document.getElementById('cliente').value = "";
            header('location:./realizar_vendas');
        }
    }
</script>


<script>

    function searchCli() {

        var mat = $('#cliente-select').val();
        var passwd = $('#senha').val();

        var obj = {};
        obj.clienteMat = mat;
        obj.senha = passwd
        $.post('getImagem', obj, function (data) {

            console.log(data);

            $('#img').html('<div class="float-right" style="position: absolute; right: 0"><img src="' + data + '"  style="margin-bottom: 20px; border: 0px solid black; border-radius: 15px; width: 100%; right: 0; z-index: 5"></div>');


        });



    }

</script>


<!--<div class="col-md-12" class="col-xs-6">
        <div class="form-check">
            <input type="checkbox" class="form-check-input" name="a_prazo" id="a_prazo">
            <label class="form-check-label" id="a_prazo" value="a_prazo" name="a_prazo" for="a_prazo"><font size=4>A Prazo</font></label>
        </div> 
</div> -->