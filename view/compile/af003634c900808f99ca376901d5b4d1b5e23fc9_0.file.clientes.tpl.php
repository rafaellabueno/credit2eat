<?php
/* Smarty version 3.1.33, created on 2018-10-01 15:51:43
  from 'D:\xampp\htdocs\credit2eat\view\clientes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bb2266fa23068_87650778',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af003634c900808f99ca376901d5b4d1b5e23fc9' => 
    array (
      0 => 'D:\\xampp\\htdocs\\credit2eat\\view\\clientes.tpl',
      1 => 1538401902,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bb2266fa23068_87650778 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
    <center>
        <h3>Lista de Clientes</h3> 
    </center>
    <!--<div style="text-align: right;"><a href="./cadastrar_cliente"><button class="btn btn-primary">Cadastrar Novo Cliente</button></a></div>-->
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
                                <th scope="row"><a href="" style="color: #000000"><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_nome'];?>
</a></th>
                                <td><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_matricula'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_email'];?>
</td>
                                <!--<td><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_curso'];?>
</td>-->
                                <td><?php echo $_smarty_tpl->tpl_vars['C']->value['cli_divida'];?>
</td>
                                <td><a href="javascript:void(0);" class="excluir" id-pessoa="<?php echo $_smarty_tpl->tpl_vars['C']->value['cli_id'];?>
" style="color: #030300" style=""><i class="pe-7s-trash"></i></a></td>
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



</html>



<?php echo '<script'; ?>
 type="text/javascript">
    $('.excluir').click(function () {
        var idPessoa = $(this).attr('id-pessoa');

        $("#ModalDelete").modal();

        $('.excluirCliente').click(function () {
            var urlConsulta = './excluir/' + idPessoa;
            console.log(idPessoa);
            $.get(urlConsulta, function (res) {
                console.log(res);
                if (res === '1') {
                    bootbox.alert("Cliente excluído com sucesso", function () {

                        window.location.reload();

                    });
                } else {
                    bootbox.alert("Falhou", function () {


                        window.location.reload();
                    });
                }

            });
        });

    });
<?php echo '</script'; ?>
>
<!-- paginação inferior -->
<!--<section id="paginacao" class="row">
        <center>
                PAGINAS
        </center>
</section> --><?php }
}
