<?php
/* Smarty version 3.1.33, created on 2018-10-09 23:57:35
  from 'C:\xampp\htdocs\credit2eat\view\realizar_vendas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bbd244f4b8a68_63119618',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a63e1693968850f2a91f716a6c9cb78a14e593cf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\credit2eat\\view\\realizar_vendas.tpl',
      1 => 1539122254,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbd244f4b8a68_63119618 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
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
<?php echo '</script'; ?>
>


<div class="row" style="display: block;">
    <div class="col-md-12">
        <div class="col-md-2"></div>
        <div class="col-md-4" id="img"></div>
    </div>
</div>


<center>
    <h3>Realizar Venda a Prazo</h3> 
</center>
<hr>
<br>
<form id="form_venda" name="form_venda" action="./realizar_vendas" method="post">
    <div class="container">



        <div class="row">

            <div class="col-md-3" style="width: 400px">
                <div class="form-group">
                    <label><font size=4>Selecione o Cliente</font></label>
                    <select id="cliente-select" name="cliente" value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cli_matricula'];?>
" style="background-color: #f7f7f8; border: 0px;" required>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CLI']->value, 'C');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cli_matricula'];?>
"><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_nome'];?>
 - <?php echo $_smarty_tpl->tpl_vars['C']->value['cli_matricula'];?>
 </option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group" style="width:300px">
                    <label><font size=4>Insira a senha do cliente</font></label>
                    <input type="password" class="form-control" id="senha" name="senha" required>

                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="col-md-3"></div>
                <a onclick="searchCli()" class="btn btn-primary" role="button" style="display: inline-block;">
                    Procurar Cliente</a>
            </div>          
        </div>


        <div id="displayOriginal" class="row">
            <div class="form-group" class="col-md-12" style="display: none;">
                <label><font size="4">Escolha o Produto</font></label><br>
                <select  class="produtos-select col-md-6" required>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['P']->value['prod_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['P']->value['prod_nome'];?>
 - R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['prod_valor'];?>
 - Quantidade: <?php echo $_smarty_tpl->tpl_vars['P']->value['prod_qnt'];?>
 </option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>

            </div>
        </div>


        <div id="selects">
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-3"></div>
                <a onclick="addProduto()" class="btn btn-primary" role="button" style="display: inline-block;">
                    Adicionar Produto</a>
            </div>          
        </div>
        <br>
        <br>
        <br>
        <div class="col-md-12" class="col-xs-6">
            <div class="col-md-4">
                <button type="submit" class="btn btn-primary btn-block" name="botao">REALIZAR VENDA</button>
            </div>
            <div class="col-md-4">
                <button type="reset" onclick="limpa()" class="btn btn-danger btn-block" name="botao2">CANCELAR</button>
            </div>
        </div>
    </div>
</form>
</hr>




<?php echo '<script'; ?>
>
    $(document).ready(function () {
        addProduto();
    })
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    function limpa() {
        if (document.getElementById('cliente').value != "") {
            document.getElementById('cliente').value = "";
            header('location:./realizar_vendas');
        }
    }
<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
>

    function searchCli() {

        var mat = $('#cliente-select').val();
        var passwd = $('#senha').val();

        var obj = {};
        obj.clienteMat = mat;
        obj.senha = passwd
        $.post('getImagem', obj, function (data) {

            console.log(data);

            $('#img').html('<img src="' + data + '"  style="margin-bottom: 20px; position: fixed; border: 0px solid black; border-radius: 15px; width: 20%; right: 0; z-index: 5">');


        });



    }

<?php echo '</script'; ?>
>


<!--<div class="col-md-12" class="col-xs-6">
        <div class="form-check">
            <input type="checkbox" class="form-check-input" name="a_prazo" id="a_prazo">
            <label class="form-check-label" id="a_prazo" value="a_prazo" name="a_prazo" for="a_prazo"><font size=4>A Prazo</font></label>
        </div> 
</div> --><?php }
}
