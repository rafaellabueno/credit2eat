<?php
/* Smarty version 3.1.33, created on 2018-10-04 00:11:50
  from 'C:\xampp\htdocs\credit2eat\view\cadastrar_cliente.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array(
            'version' => '3.1.33',
            'unifunc' => 'content_5bb53ea6d67d17_75381853',
            'has_nocache_code' => false,
            'file_dependency' =>
            array(
                '2041037fbf825058555f59902059963cb23da357' =>
                array(
                    0 => 'C:\\xampp\\htdocs\\credit2eat\\view\\cadastrar_cliente.tpl',
                    1 => 1538603519,
                    2 => 'file',
                ),
            ),
            'includes' =>
            array(
            ),
                ), false)) {

    function content_5bb53ea6d67d17_75381853(Smarty_Internal_Template $_smarty_tpl) {
        ?><!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="UTF-8">
                <title><?php echo $_smarty_tpl->tpl_vars['TITULO_SITE']->value; ?>
                </title>
            </head>
            <body>
            <center><h3>Cadastrar Novo Cliente</h3></center>
            <hr>
            <br>
            <form name="form_cliente" action="./cadastrar_cliente" method="post">

                <div class="form-group" style="width:300px">
                    <label><font size=4>Nome do Cliente</font></label>
                    <input type="text" class="form-control" name="cli_nome" id="cli_nome" required>
                </div>
                <div class="form-group" style="width:200px">
                    <label><font size=4>Matrícula do Cliente</font></label>
                    <input type="text" class="form-control" id="cli_matricula" name="cli_matricula" required>
                </div>
                <div class="form-group">
                    <label><font size=4>Selecione o Curso</font></label>
                    <select id="curso-select" name="curso" value="<?php echo $_smarty_tpl->tpl_vars['C']->value['id_curso']; ?>
                            " >
                                <?php
                                $_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CUR']->value, 'C');
                                if ($_from !== null) {
                                    foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
                                        ?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['C']->value['id_curso']; ?>
                                        "><?php echo $_smarty_tpl->tpl_vars['C']->value['nome_curso']; ?>
                                </option>
                                <?php
                            }
                        }
                        $_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
                        ?>
                    </select>
                </div>
                <div class="form-group" style="width:200px">
                    <label><font size=4>Telefone</font></label>
                    <input type="text" class="form-control" id="cli_telefone" name="cli_telefone" maxlength="9" >
                </div>
                <div class="form-group" style="width:200px">
                    <label><font size=4>Email</font></label>
                    <input type="email" class="form-control" id="cli_email" name="cli_email" >
                </div>
                <div class="form-group" style="width:200px"> 
                    <label><font size=4>Senha</font></label>
                    <input type="password" class="form-control" id="cli_senha" name="cli_senha" required>
                </div>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-primary btn-block" name="botao">Cadastrar</button>
                </div>
                <div class="col-md-4">
                    <button type="reset" onclick="limpa()" class="btn btn-danger btn-block" name="botao2">Cancelar</button>
                </div>
            </form>
        </body>

        <?php echo '<script'; ?>
        type="text/javascript"> //PEGAR TODOS OS CLIENTES DIGITANDO MATRICULA OU NOME  
        $(document).ready(function () {
        var oldCurso = $('#curso-select').attr("value");
        $('#curso-select').selectize({
        placeholder: 'Selecione o curso...',
        onInitialize: function () {
        this.setValue(oldCurso, true);
        //$('.selectize-control').addClass('form-group');
        $('.selectize-input').addClass('form-control');
        }
        });
        <?php echo '</script'; ?>
        >


        <?php echo '<script'; ?>
        >
        function limpa() {
        if (document.getElementById('cli_nome').value != "") {
        document.getElementById('cli_nome').value = "";
        document.getElementById('cli_matricula').value = "";
        document.getElementById('cli_telefone').value = "";
        document.getElementById('cli_email').value = "";
        document.getElementById('cli_senha').value = "";
        }
        }
        <?php echo '</script'; ?>
        >

        </html><?php
    }

}
