<?php
/* Smarty version 3.1.33, created on 2018-09-24 22:08:50
  from 'C:\xampp\htdocs\credit2eat\view\minhaconta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array(
            'version' => '3.1.33',
            'unifunc' => 'content_5ba944525be745_25069001',
            'has_nocache_code' => false,
            'file_dependency' =>
            array(
                'fd166a3674b849f386e3d1d0ddf7dc6247e73021' =>
                array(
                    0 => 'C:\\xampp\\htdocs\\credit2eat\\view\\minhaconta.tpl',
                    1 => 1537808147,
                    2 => 'file',
                ),
            ),
            'includes' =>
            array(
            ),
                ), false)) {

    function content_5ba944525be745_25069001(Smarty_Internal_Template $_smarty_tpl) {
        ?><!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="UTF-8">
                <title><?php echo $_smarty_tpl->tpl_vars['TITULO_SITE']->value; ?>
                </title>
            </head>
            <body>
            <center><h3>Minha Conta</h3></center>
            <hr>
            <h4><b>Atualizar Dados</b></h4>
            <?php
            $_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['USER']->value, 'U');
            if ($_from !== null) {
                foreach ($_from as $_smarty_tpl->tpl_vars['U']->value) {
                    ?>
                    <form name="form_cliente" action="./atualizar_usuario" method="post">
                        <div class="section">
                            <div class="form-group" style="width:300px">
                                <label><font size=4>Nome</font></label>
                                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['U']->value['nome']; ?>
                                       " class="form-control" name="usuario_nome" id="usuario_nome">
                            </div>
                            <div class="form-group" style="width:300px">
                                <label><font size=4>Email</font></label>
                                <input type="email" value="<?php echo $_smarty_tpl->tpl_vars['U']->value['email']; ?>
                                       " class="form-control"  id="usuario_email" name="usuario_email">
                            </div>
                        </div>
                        <h4><b>Atualizar Senha</b></h4>
                        <div class="form-group" style="width:300px">
                            <label><font size=4>Senha Atual</font></label>
                            <input type="password" value="" class="form-control" id="usuario_senha" name="usuario_senha">
                        </div>
                        <div class="form-group" style="width: 300px">
                            <label><font size=4>Nova Senha</font></label>
                            <input type="password" value="" class="form-control" id="usuario_senha" name="usuario_senha">
                        </div>
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-primary btn-block" name="botao">Atualizar</button>
                        </div>
                        <div class="col-md-3">
                            <button type="reset" onclick="limpa()" class="btn btn-danger btn-block" name="botao2">Cancelar</button>
                        </div>
                    </form>

                    <?php
                }
            }
            $_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
            ?>

        </body>

        <?php echo '<script'; ?>
        >
        function limpa() {
        if (document.getElementById('usuario_nome').value != "") {
        document.getElementById('usuario_email').value = "";
        document.getElementById('usuario_senha').value = "";
        }
        }
        <?php echo '</script'; ?>
        >


        </html>
    <?php
    }

}
