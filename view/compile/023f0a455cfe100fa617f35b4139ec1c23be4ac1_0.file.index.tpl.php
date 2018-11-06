<?php
/* Smarty version 3.1.33, created on 2018-11-06 12:56:34
  from 'C:\xampp\htdocs\credit2eat\view\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be18172b70d98_78884693',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '023f0a455cfe100fa617f35b4139ec1c23be4ac1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\credit2eat\\view\\index.tpl',
      1 => 1541505393,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be18172b70d98_78884693 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>

<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <link rel="icon" type="image/png" href=".\media\imagens\Credit2Eat---Icon.png"> <!-- ICONE DO SITE -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title><?php echo $_smarty_tpl->tpl_vars['TITULO_SITE']->value;?>
</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />


        <!-- Bootstrap core CSS     -->
        <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/bootstrap.min.css" rel="stylesheet" />

        <!-- Animation library for notifications   -->
        <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/animate.min.css" rel="stylesheet"/>

        <!--  Light Bootstrap Table core CSS    -->
        <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>

        <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/selectize.css" rel="stylesheet">
        <!--  CSS for Demo Purpose, don't include it in your project     -->
        <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/demo.css" rel="stylesheet" />


        <!--     Fonts and icons     -->
        <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

        <!--  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">  TEM QUE INSTALAR A FONTE--> 

        <link href='<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
        <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/pe-icon-7-stroke.css" rel="stylesheet" />

        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/jquery.3.2.1.min.js" type="text/javascript"><?php echo '</script'; ?>
>

    </head>
    <body>

        <div class="wrapper">
            <div class="sidebar" data-color="blue">  <!--data-color="a" -->

                <!--
            
                    Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
                    Tip 2: you can also add an image using data-image tag
            
                -->

                <div class="sidebar-wrapper">
                    <div class="logo">
                        <a href="./menu" class="simple-text">
                            <img width="220px" height="55px"  
                                 src=".\media\imagens\Credit2Eat---Complete.png"/>
                        </a>
                    </div>

                    <ul class="nav">
                        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents1" data-parent="#exampleAccordion">
                                <i class="pe-7s-id"></i>
                                <p>Clientes</p>
                            </a>
                            <ul class="sidenav-second-level collapse" id="collapseComponents1">
                                <!-- <li>
                                    <a href="cadastrar_cliente">
                                        <i class="pe-7s-add-user"></i>
                                        <p href="">Cadastrar Cliente</p>
                                    </a>
                                </li> -->
                                <li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTES']->value;?>
">
                                        <i class="pe-7s-users"></i>
                                        <p>Ver Clientes</p>
                                    </a>
                                </li> 
                                <li>
                                    <a href="clientes_pend">
                                        <i class="pe-7s-note2"></i>
                                        <p>Ver Clientes Pendentes</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="cliente_divida">
                                        <i class="pe-7s-piggy"></i>
                                        <p>Quitar Dívidas</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents2" data-parent="#exampleAccordion">
                                <i class="pe-7s-graph"></i>
                                <p>Produtos</p>
                            </a>
                            <ul class="sidenav-second-level collapse" id="collapseComponents2">
                                <li>
                                    <a href="cadastrar_produto">
                                        <i class="pe-7s-plus"></i>
                                        <p href="">Cadastrar Produto</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="editar_produto">
                                        <i class="pe-7s-pen"></i>
                                        <p href="">Editar Produto</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
">
                                        <i class="pe-7s-server"></i>
                                        <p>Ver Produtos</p>
                                    </a>
                                </li> 
                                <li>
                                    <a href="estoque">
                                        <i class="pe-7s-refresh-2"></i>
                                        <p href="">Estoque</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents3" data-parent="#exampleAccordion">
                                <i class="pe-7s-cart"></i>
                                <p>Vendas</p>
                            </a>
                            <ul class="sidenav-second-level collapse" id="collapseComponents3">
                                <!--<li>
                                    <a href="venda_vista">
                                        <i class="pe-7s-cash"></i>
                                        <p href="">Venda à Vista</p>
                                    </a>
                                </li>-->
                                <li>
                                    <a href="realizar_vendas">
                                        <i class="pe-7s-cash"></i>
                                        <p href="">Realizar Venda</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['GET_VENDAS']->value;?>
">
                                        <i class="pe-7s-menu"></i>
                                        <p>Ver Vendas</p>
                                    </a>
                                </li> 
                            </ul>
                        </li>
                        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents4" data-parent="#exampleAccordion">
                                <i class="pe-7s-tools"></i>
                                <p>Configurações</p>
                            </a>
                            <ul class="sidenav-second-level collapse" id="collapseComponents4">
                                <!-- <li>
                                    <a href="cadastrar_curso">
                                        <i class="pe-7s-plus"></i>
                                        <p href="">Cadastrar Curso</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="cursos">
                                        <i class="pe-7s-menu"></i>
                                        <p href="">Cursos</p>
                                    </a>
                                </li> -->
                                <li>
                                    <a href="valor_prazo">
                                        <i class="pe-7s-cash"></i>
                                        <p href="">Definir Valor a Prazo</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="active-pro">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_MINHACONTA']->value;?>
">
                                <i class="pe-7s-user"></i>
                                <p>Minha Conta</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="main-panel">
                <nav class="navbar navbar-default navbar-fixed">
                    <div class="container-fluid">
                        <div class="navbar-header" >
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#"><!--<?php echo $_smarty_tpl->tpl_vars['PAG_NOME']->value;?>
--></a>
                        </div>
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <!--<li>
                                   <a href="">
                                       <p>Account</p>
                                    </a>
                                </li> -->
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <p>Notificações</p>
                                    </a>
                                    <?php  $notif = new Produtos();
                                        $notif->GetNotificacoesCima(); 
                                        $teste = $notif->GetItens();
                                    ?>
                                    <ul class="dropdown-menu">
                                        <?php  foreach($teste as $t){ ?>
                                        <li><a href="tela_notificacoes"><?php  echo $t['titulo'] ?></a></li>
                                        <?php  } ?>



                                </ul>
                                </li> 
                                <li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_MINHACONTA']->value;?>
">
                                        <p>
                                            <?php 
                                                echo $_SESSION['nome'];
                                            ?>
                                        </p> 
                                    </a>
                                </li>
                                <li>
                                    <a href="./logout">
                                        <p>Log out</p>
                                    </a>
                                </li>
                                <li class="separator hidden-lg"></li>
                                </ul>
                            </div>
                        </div>
                    </nav>

                    <div class="content"> <!--// CONTEUDO DA PAGINA -->
                        <div class="container-fluid"> <!-- CONTEUDO DA PAGINA // CONTEUDO DA PAGINA // CONTEUDO DA PAGINA -->
                            <?php 
                            Rotas::get_Pagina();
                            ?>
                        </div>
                    </div>               

                    <!--RODAPÉ -->
                    <footer class="sticky-footer">
                        <p class="copyright pull-right">
                        <center>
                            <hr>
                            <h5>&copy; <?php echo '<script'; ?>
>document.write(new Date().getFullYear())<?php echo '</script'; ?>
> <a href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
">Credit2Eat</a></h5>
                        </center>
                        </p>
                    </footer>

                </div>
            </div>


        </body>
        <div id="ModalDelete" class="modal" role="dialog"> <!-- EXCLUIR CLIENTE -->
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Você tem certeza que deseja excluir o cliente?</h5>
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary excluirCliente" data-dismiss="modal">Excluir</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="ModalDelete" class="modal" role="dialog"> <!-- ZERAR DIVIDA CLIENTE -->
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Você tem certeza que deseja excluir o cliente?</h5>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary excluirCliente" data-dismiss="modal">Excluir</button>
                    </div>
                </div>
            </div>
        </div>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/selectize.min.js"><?php echo '</script'; ?>
>
        <!--   Core JS Files   -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>

        <!--  Charts Plugin -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/chartist.min.js"><?php echo '</script'; ?>
>

        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/bootbox.min.js"><?php echo '</script'; ?>
>

        <!--  Notifications Plugin    -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/bootstrap-notify.js"><?php echo '</script'; ?>
>

        <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/light-bootstrap-dashboard.js?v=1.4.0"><?php echo '</script'; ?>
>

        <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/demo.js"><?php echo '</script'; ?>
>

        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/selectize.min.js"><?php echo '</script'; ?>
>

        <?php echo '<script'; ?>
 type="text/javascript"> //PEGAR TODOS OS CLIENTES DIGITANDO MATRICULA OU NOME  
                                $(document).ready(function () {
                                    var oldCliente = $('#cliente-select').attr("value");
                                    $('#cliente-select').selectize({
                                        create: true,
                                        placeholder: 'Digite a matrícula do Cliente...',
                                        onInitialize: function () {
                                            this.setValue(oldCliente, true);
                                            //$('.selectize-control').addClass('form-group');
                                            $('.selectize-input').addClass('form-control');
                                        }
                                    });

                                    var oldProduto = '';
                                    $('#produto-select').selectize({
                                        placeholder: 'Digite o nome do Produto...',
                                        onInitialize: function () {
                                            this.setValue(oldProduto, true);
                                        }
                                    });



                                    /*$('.produtos-select').each(function(id, el){
                                     var oldProduto = $(el).attr("value");
                                     
                                     $(el).selectize({
                                     placeholder: 'Digite o nome do Produto...',
                                     onInitialize: function () {
                                     this.setValue(oldProduto, true);
                                     //$('.selectize-control').addClass('form-group');
                                     $('.selectize-input').addClass('form-control');
                                     }
                                     });
                                     
                                     
                                     });/**/


                                });
        <?php echo '</script'; ?>
> 
        <!--<?php echo '<script'; ?>
 type="text/javascript"> //PEGAR TODOS OS PRODUTOS DIGITANDO MATRICULA OU NOME  
                                $(document).ready(function () {
                                    var oldProdutos = $('#produtos-select').attr("value");
                                    $('#produtos-select').selectize({
                                        placeholder: 'Digite a matrícula do Cliente...',
                                        onInitialize: function () {
                                            this.setValue(oldProdutos, true);
                                            //$('.selectize-control').addClass('form-group');
                                            $('.selectize-input').addClass('form-control');
                                        }
                                    });
    
    
                                });
        <?php echo '</script'; ?>
> -->

        <?php echo '<script'; ?>
 type="text/javascript">
            /*$(document).ready(function () {
             $('.produtos-select').selectize({
             placeholder: 'Digite o nome do Produto...',
             onInitialize: function () {
             this.setValue(null);
             //$('.selectize-control').addClass('form-group');
             $('.selectize-input').addClass('form-control');
             }
             });
             });*/

        <?php echo '</script'; ?>
>


    </html>


    <!--<li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['GET_VENDAS']->value;?>
">
                            <i class="pe-7s-cash"></i>
                            <p>Vendas</p>
                        </a>
                    </li> -->
    <!--<li>
       <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
">
           <i class="pe-7s-graph"></i>
           <p>Produtos</p>
       </a>
    </li> -->
    <!--<li> 
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CLIENTES']->value;?>
">
            <i class="pe-7s-user"></i>
            <p>Clientes</p>
        </a>
    </li>-->
    <!--<li>
        <a href="">
            <i class="pe-7s-news-paper"></i>
            <p>Minha Conta</p>
        </a>
    </li> -->
    <!--<li>
        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CONTATO']->value;?>
">
            <i class="pe-7s-science"></i>
            <p>Contato</p>
        </a>
    </li> -->



    <!--<ul class="nav navbar-nav navbar-left">
        <li>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-dashboard"></i>
                <p class="hidden-lg hidden-md">(pegar nome da pagina atual)</p>
            </a>
        </li>
    </ul>--><?php }
}
