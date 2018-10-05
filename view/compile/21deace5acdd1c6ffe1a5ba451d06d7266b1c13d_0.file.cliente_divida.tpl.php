<?php
/* Smarty version 3.1.33, created on 2018-10-04 15:06:30
  from 'D:\xampp\htdocs\credit2eat\view\cliente_divida.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array(
            'version' => '3.1.33',
            'unifunc' => 'content_5bb610560110d8_41724854',
            'has_nocache_code' => false,
            'file_dependency' =>
            array(
                '21deace5acdd1c6ffe1a5ba451d06d7266b1c13d' =>
                array(
                    0 => 'D:\\xampp\\htdocs\\credit2eat\\view\\cliente_divida.tpl',
                    1 => 1538570202,
                    2 => 'file',
                ),
            ),
            'includes' =>
            array(
            ),
                ), false)) {

    function content_5bb610560110d8_41724854(Smarty_Internal_Template $_smarty_tpl) {
        ?><html>
            <center>
                <h3>Buscar Cliente</h3> 
            </center>
            <hr>
            <br>
            <form id="form_divida" name="form_divida" action="./cliente_divida" method="post">
                <div align="left">
                    <div class="col-md-3" class="col-xs-6" style="width: 400px">
                        <div class="form-group">
                            <label><font size=4>Selecione o Cliente</font></label>
                            <select id="cliente-select" name="cliente" value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cli_matricula']; ?>
                                    " required>
                                        <?php
                                        $_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CLI']->value, 'C');
                                        if ($_from !== null) {
                                            foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
                                                ?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cli_id']; ?>
                                                "><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_nome']; ?>
                                            - <?php echo $_smarty_tpl->tpl_vars['C']->value['cli_matricula']; ?>
                                            - <?php echo $_smarty_tpl->tpl_vars['C']->value['cli_curso']; ?>
                                        </option>
                                        <?php
                                    }
                                }
                                $_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
                                ?>
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
                </div>
            </form>
            <hr>
        </html>

        <?php echo '<script'; ?>
        >
        function limpa() {
        if (document.getElementById('cliente').value != "") {
        document.getElementById('cliente').value = "";
        header('location:/cliente_divida');
        }
        }
        <?php echo '</script'; ?>
        ><?php
    }

}
