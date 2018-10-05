<?php
/* Smarty version 3.1.33, created on 2018-09-24 15:50:06
  from 'D:\xampp\htdocs\credit2eat\view\cursos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array(
            'version' => '3.1.33',
            'unifunc' => 'content_5ba8eb8ef3a9c8_30886726',
            'has_nocache_code' => false,
            'file_dependency' =>
            array(
                '8c6b182fdf09e24eae82846850cff76f81a624ac' =>
                array(
                    0 => 'D:\\xampp\\htdocs\\credit2eat\\view\\cursos.tpl',
                    1 => 1537797005,
                    2 => 'file',
                ),
            ),
            'includes' =>
            array(
            ),
                ), false)) {

    function content_5ba8eb8ef3a9c8_30886726(Smarty_Internal_Template $_smarty_tpl) {
        ?><center>
            <h3>Lista de Cursos</h3> 
        </center>
        <hr>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome Curso</th>
                </tr>
            </thead>

            <section id="cursos" class="row">

                <ul style="list-style: none">

                    <div class="row" id="pularlinha">

                        <?php
                        $_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CUR']->value, 'C');
                        if ($_from !== null) {
                            foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
                                ?>

                                <tbody>
                                    <tr>			
                                        <th scope="row"><a href="" style="color: #030300"><?php echo $_smarty_tpl->tpl_vars['C']->value['nome_curso']; ?>
                                            </a></th>
                                    </tr>
                                </tbody>

                                <?php
                            }
                        }
                        $_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
                        ?>

                    </div>

                </ul>

            </section>

        </table><?php
                    }

                }
