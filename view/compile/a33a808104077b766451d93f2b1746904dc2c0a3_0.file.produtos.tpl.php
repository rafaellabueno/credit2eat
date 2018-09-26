<?php
/* Smarty version 3.1.33, created on 2018-09-26 15:43:52
  from 'D:\xampp\htdocs\credit2eat\view\produtos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bab8d187059d1_01616951',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a33a808104077b766451d93f2b1746904dc2c0a3' => 
    array (
      0 => 'D:\\xampp\\htdocs\\credit2eat\\view\\produtos.tpl',
      1 => 1537969430,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bab8d187059d1_01616951 (Smarty_Internal_Template $_smarty_tpl) {
?><center>
    <h3>Lista de Produtos</h3>
</center>
   <!-- <div style="text-align: right;"><a href="./cadastrar_produto"><button class="btn btn-primary">Cadastrar Novo Produto</button></a></div> -->
<hr>

<!--	<section>
                <center>
                        PAGINAS
                </center>	
        </section> -->

<table class="table">
    <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Valor</th>
            <th scope="col">Quantidade</th>
            <th scope="col">Mínimo</th>
            <th scope="col">Vendidos</th>
        </tr>
    </thead>


    <!-- começa a lista de produtos -->
    <section id="produtos" class="row">

        <ul style="list-style: none">

            <div class="row" id="pularlinha">

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>

                    <tbody>
                        <tr>			
                            <th scope="row"><a href="" style="color: #030300"><?php echo $_smarty_tpl->tpl_vars['P']->value['prod_nome'];?>
</a></th>                          
                            <td>R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['prod_valor'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['P']->value['prod_qnt'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['P']->value['prod_qnt_min'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['P']->value['prod_qnt_ven'];?>
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

<?php }
}
