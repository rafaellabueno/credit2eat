<?php
/* Smarty version 3.1.32, created on 2018-09-14 00:51:29
  from 'D:\xampp\htdocs\credit2eat\view\clientes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b9ae9f112bbd3_84802040',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af003634c900808f99ca376901d5b4d1b5e23fc9' => 
    array (
      0 => 'D:\\xampp\\htdocs\\credit2eat\\view\\clientes.tpl',
      1 => 1536879086,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b9ae9f112bbd3_84802040 (Smarty_Internal_Template $_smarty_tpl) {
?><center>
    <h3>Lista de Clientes</h3> 
</center>
<hr>

<!--<section>
        <center>
                        
        </center>	
</section> --> 

<table class="table">
    <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Matricula</th>
            <th scope="col">Email</th>
            <th scope="col">Pendências</th>
            <th scope="col">Ações</th>
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

                    <!-- <li class="col-md-4">
                     
                     <div class="thumbnail"> 
 
                             <a href="<?php echo $_smarty_tpl->tpl_vars['CLI_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['C']->value['cli_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['C']->value['c_nome'];?>
"> -->

                    <tbody>
                        <tr>			
                            <th scope="row"><a href="" style="color: #030300"><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_nome'];?>
</a></th>
                            <td><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_matricula'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_email'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_divida'];?>
</td>
                            <form action="./exclui_cliente" method="post">
                                <td><a href="#" style="color: #030300" style=""><i class="pe-7s-trash"></i></a></td>
                            </form>
                        </tr>
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
<!-- paginação inferior -->
<!--<section id="paginacao" class="row">
        <center>
                PAGINAS
        </center>
</section> --><?php }
}
