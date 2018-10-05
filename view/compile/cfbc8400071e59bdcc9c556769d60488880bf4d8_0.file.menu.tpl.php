<?php
/* Smarty version 3.1.33, created on 2018-09-26 15:53:30
  from 'D:\xampp\htdocs\credit2eat\view\menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array(
            'version' => '3.1.33',
            'unifunc' => 'content_5bab8f5a970385_34587892',
            'has_nocache_code' => false,
            'file_dependency' =>
            array(
                'cfbc8400071e59bdcc9c556769d60488880bf4d8' =>
                array(
                    0 => 'D:\\xampp\\htdocs\\credit2eat\\view\\menu.tpl',
                    1 => 1537970009,
                    2 => 'file',
                ),
            ),
            'includes' =>
            array(
            ),
                ), false)) {

    function content_5bab8f5a970385_34587892(Smarty_Internal_Template $_smarty_tpl) {
        ?><center>
            <div class="thumbnail">
                <h3> <b> BEM VINDO AO CREDIT2EAT </b> </h3> 
                <h4> Sistema de Gerenciamento de Cantinas </h4>
            </div>
            <div class="thumbnail">
                <h4><b>ESCOLHA O QUE DESEJA FAZER:</b></h4>  
                <h4><a href="cadastrar_cliente"> Cadastrar Novo Cliente</a> - <a href="clientes">Ver Clientes</a></h4>
                <h4><a href="cadastrar_produto"> Cadastrar Novo Produto</a> - <a href="produtos">Ver Produtos</a> - <a href="estoque">Atualizar Estoque</a></h4>
                <h4><a href="venda_vista"> Vender à Vista</a> - <a href="realizar_vendas">Vender a Prazo</a> - <a href="vendas">Ver Vendas</a> </h4>
            </div>
        </center>       <?php
    }

}
