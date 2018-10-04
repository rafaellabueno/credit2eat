<?php
/* Smarty version 3.1.33, created on 2018-10-04 21:21:14
  from 'C:\xampp\htdocs\credit2eat\view\estoque.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bb6682ac28207_03178126',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e872ec87957ae26bf9448b14d7612f2bfce3c8d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\credit2eat\\view\\estoque.tpl',
      1 => 1538678343,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb6682ac28207_03178126 (Smarty_Internal_Template $_smarty_tpl) {
?><center>
    <h3>Atualizar Estoque</h3> 
</center>
<hr>
<br>
        <div class="col-md-3" class="col-xs-6" style="width: 400px">
            <div class="form-group">
                <label><font size=4>Escolha um Produto</font></label>
                <select id="produto-select" name="produto" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['prod_id'];?>
" required>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
                        <option id="produto" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['prod_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['P']->value['prod_nome'];?>
 - <?php echo $_smarty_tpl->tpl_vars['P']->value['prod_qnt'];?>
 unidades </option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['EST']->value, 'E');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['E']->value) {
?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
                            <?php if ($_smarty_tpl->tpl_vars['P']->value['prod_id'] == $_smarty_tpl->tpl_vars['E']->value['produto']) {?>
                        <tbody>
                            <tr>    
                                <th scope="row"><a href="" style="color: #000000"><?php echo $_smarty_tpl->tpl_vars['P']->value['prod_nome'];?>
</a></th>
                                <td><?php echo $_smarty_tpl->tpl_vars['E']->value['qntd'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['E']->value['data'];?>
</td>
                            </tr>
                        </tbody>
                            <?php }?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



                </div>

            </ul>

        </section>

    </table>

        </div>
<?php echo '<script'; ?>
>
    $('.atualizar').click(function () {
        var idProduto = $('#produto').attr("value");
        var qtd = $('#qtd').attr("value");
        console.log(qtd);
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
<?php echo '</script'; ?>
><?php }
}
