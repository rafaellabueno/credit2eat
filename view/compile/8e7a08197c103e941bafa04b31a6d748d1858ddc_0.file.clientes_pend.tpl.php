<?php
/* Smarty version 3.1.33, created on 2018-11-06 12:50:32
  from 'C:\xampp\htdocs\credit2eat\view\clientes_pend.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be1800858dba7_85486566',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e7a08197c103e941bafa04b31a6d748d1858ddc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\credit2eat\\view\\clientes_pend.tpl',
      1 => 1541504989,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be1800858dba7_85486566 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
    <center>
        <h3>Lista de Clientes com Pendências</h3> 
    </center>

    <hr>

    <div class="table-responsive table-full-width">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Matricula</th>
                    <th scope="col">Email</th>
                    <th scope="col">Curso</th>
                    <th scope="col">Pendências</th>
                </tr>
            </thead>


            <!-- começa a lista de clientes -->
            <section id="produtos" class="row">

                <ul style="list-style: none">

                    <div class="row" id="pularlinha">

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CLI']->value, 'C');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
?>

                            <tbody>
                                <tr>	
                                    <th scope="row"><a href="" style="color: #000000"><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_nome'];?>
</a></th>
                                    <td><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_matricula'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_email'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_curso'];?>
</td>
                                    <td>R$<?php echo $_smarty_tpl->tpl_vars['C']->value['cli_divida'];?>
</td>
                            </tbody>


                            <!--</a>
    
                            </div>
    
                            </li> -->

                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



                    </div>

                </ul>

            </section>

        </table>
    </div>



</html>

<!-- paginação inferior -->
<!--<section id="paginacao" class="row">
        <center>
                PAGINAS
        </center>
</section> --><?php }
}
