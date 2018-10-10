<?php
/* Smarty version 3.1.33, created on 2018-10-10 02:58:39
  from 'C:\xampp\htdocs\credit2eat\view\tela_notificacoes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bbd4ebf9bbda4_23117594',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c995f8ec4f2b3e99cf559f938993d6255b4133e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\credit2eat\\view\\tela_notificacoes.tpl',
      1 => 1539133118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbd4ebf9bbda4_23117594 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
    <center>
        <h3>Notificações</h3> 
    </center>
    <!--<div style="text-align: right;"><a href="./cadastrar_cliente"><button class="btn btn-primary">Cadastrar Novo Cliente</button></a></div>-->
    <hr>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Notificação</th>
                <th scope="col">Data</th>
            </tr>
        </thead>


        <!-- começa a lista de clientes -->
        <section id="produtos" class="row">

            <ul style="list-style: none">

                <div class="row" id="pularlinha">

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['NOT']->value, 'N');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['N']->value) {
?>

                        <tbody>
                            <tr>	
                                <td><?php echo $_smarty_tpl->tpl_vars['N']->value['titulo'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['N']->value['data'];?>
</td>
                            </tr>
                        </tbody>

                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



                </div>

            </ul>

        </section>

    </table>



</html><?php }
}
