<?php
/* Smarty version 3.1.32, created on 2018-09-21 15:06:23
  from 'D:\xampp\htdocs\credit2eat\view\cadastrar_cliente.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ba4eccf158716_75352491',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b3b34ed5bdeeccc9c2cf5785cff74981931e973' => 
    array (
      0 => 'D:\\xampp\\htdocs\\credit2eat\\view\\cadastrar_cliente.tpl',
      1 => 1537534818,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ba4eccf158716_75352491 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $_smarty_tpl->tpl_vars['TITULO_SITE']->value;?>
</title>
    </head>
    <body>
    <center><h3>Cadastrar Novo Cliente</h3></center>
    <hr>
    <br>
    <form name="form_cliente" action="./cadastrar_cliente" method="post">

        <div class="form-group" style="width:300px">
            <label><font size=4>Nome do Cliente</font></label>
            <input type="text" class="form-control" name="cli_nome" id="cli_nome" required>
        </div>
        <div class="form-group" style="width:200px">
            <label><font size=4>Matrícula do Cliente</font></label>
            <input type="text" class="form-control" id="cli_matricula" name="cli_matricula" required>
        </div>
        <div class="form-group" style="width:200px">
            <label><font size=4>Telefone</font></label>
            <input type="text" class="form-control" id="cli_telefone" name="cli_telefone" maxlength="9" >
        </div>
        <div class="form-group" style="width:200px">
            <label><font size=4>Email</font></label>
            <input type="email" class="form-control" id="cli_email" name="cli_email" >
        </div>
        <div class="form-group" style="width:200px">
            <label><font size=4>Senha</font></label>
            <input type="password" class="form-control" id="cli_senha" name="cli_senha" required>
        </div>
        <!--<div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> -->
        <div class="col-md-4">
            <button type="submit" class="btn btn-primary btn-block" name="botao">Cadastrar</button>
        </div>
        <div class="col-md-4">
            <button type="reset" onclick="limpa()" class="btn btn-danger btn-block" name="botao2">Cancelar</button>
        </div>
    </form>
</body>

<?php echo '<script'; ?>
>
    function limpa() {
        if (document.getElementById('cli_nome').value != "") {
            document.getElementById('cli_nome').value = "";
            document.getElementById('cli_matricula').value = "";
            document.getElementById('cli_telefone').value = "";
            document.getElementById('cli_email').value = "";
            document.getElementById('cli_senha').value = "";
        }
    }
<?php echo '</script'; ?>
>

</html><?php }
}
