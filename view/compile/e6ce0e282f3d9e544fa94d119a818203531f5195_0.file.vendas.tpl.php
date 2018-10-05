<?php
/* Smarty version 3.1.33, created on 2018-09-26 22:32:33
  from 'C:\xampp\htdocs\credit2eat\view\vendas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array(
            'version' => '3.1.33',
            'unifunc' => 'content_5babece1ea38f0_47986501',
            'has_nocache_code' => false,
            'file_dependency' =>
            array(
                'e6ce0e282f3d9e544fa94d119a818203531f5195' =>
                array(
                    0 => 'C:\\xampp\\htdocs\\credit2eat\\view\\vendas.tpl',
                    1 => 1537972197,
                    2 => 'file',
                ),
            ),
            'includes' =>
            array(
            ),
                ), false)) {

    function content_5babece1ea38f0_47986501(Smarty_Internal_Template $_smarty_tpl) {
        ?><center>
            <h3>Lista de Vendas</h3>
        </center>
        <hr>

        <!--	<section>
                        <center>
                                PAGINAS
                        </center>	
                </section> -->

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Cliente</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Produto(s)</th>
                    <th scope="col">Hora/data</th>
                </tr>
            </thead>


            <!-- começa a lista de vendas -->
            <section id="vendas" class="row">

                <ul style="list-style: none">

                    <div class="row" id="pularlinha">

                        <?php
                        $_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['VEN']->value, 'V');
                        if ($_from !== null) {
                            foreach ($_from as $_smarty_tpl->tpl_vars['V']->value) {
                                ?>
                                <tbody>
                                    <tr>	
                                        <th scope="row"><?php echo $_smarty_tpl->tpl_vars['V']->value['nome_cli']; ?>
                                        </th>
                                        <td>R$<?php echo $_smarty_tpl->tpl_vars['V']->value['valor_prod']; ?>
                                        </td> 
                                        <td><?php echo $_smarty_tpl->tpl_vars['V']->value['nome_prod']; ?>
                                        </td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['V']->value['data_venda']; ?>
                                        </td>		
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

        </table>

    <?php
    }

}
