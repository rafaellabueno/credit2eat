<?php
/* Smarty version 3.1.33, created on 2018-09-26 01:46:39
  from 'D:\xampp\htdocs\credit2eat\view\atualizar_cliente.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5baac8dfd5d833_38440815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f45fc2428b701c1f070d98f6272b961880abd885' => 
    array (
      0 => 'D:\\xampp\\htdocs\\credit2eat\\view\\atualizar_cliente.tpl',
      1 => 1537919122,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5baac8dfd5d833_38440815 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $_smarty_tpl->tpl_vars['TITULO_SITE']->value;?>
</title>
    </head>
    <body>
    <center><h3>Atualizar Dados do Cliente</h3></center>
    <hr>
    <h4><b>Atualizar Dados</b></h4>
        <form name="atualizar_cliente" action="./atualizar_cliente" method="post">
            <div class="section">
                <div class="form-group" style="width:300px">
                    <label><font size=4>Nome</font></label>
                    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['C']->value['nome'];?>
" class="form-control" name="cliente_nome" id="cliente_nome">
                </div>
                <div class="form-group" style="width:300px">
                    <label><font size=4>Email</font></label>
                    <input type="email" value="<?php echo $_smarty_tpl->tpl_vars['C']->value['email'];?>
" class="form-control"  id="cliente_email" name="cliente_email">
                </div>
                <div class="form-group" style="width:300px">
                    <label><font size=4>Telefone</font></label>
                    <input type="telefone" value="<?php echo $_smarty_tpl->tpl_vars['C']->value['telefone'];?>
" class="form-control"  id="cliente_telefone" name="cliente_telefone">
                </div>
            </div>
            <h4><b>Atualizar Senha</b></h4>
            <div class="form-group" style="width:300px">
                <label><font size=4>Senha Atual</font></label>
                <input type="password" value="" class="form-control" id="usuario_senha" name="usuario_senha">
            </div>
            <div class="form-group" style="width: 300px">
                <label><font size=4>Nova Senha</font></label>
                <input type="password" value="" class="form-control" id="usuario_senha" name="usuario_senha">
            </div>
            <div class="col-md-3">
                <button type="submit" class="btn btn-primary btn-block" name="botao">Atualizar</button>
            </div>
            <div class="col-md-3">
                <button type="reset" onclick="limpa()" class="btn btn-danger btn-block" name="botao2">Cancelar</button>
            </div>
        </form>


</body>

<?php echo '<script'; ?>
>
    function limpa() {
        if (document.getElementById('clientenome').value != "") {
            document.getElementById('clienteemail').value = "";
            document.getElementById('cliente_senha').value = "";
        }
    }
<?php echo '</script'; ?>
>


</html>
<?php }
}
