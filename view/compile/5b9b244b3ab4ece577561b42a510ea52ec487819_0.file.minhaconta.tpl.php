<?php
/* Smarty version 3.1.32, created on 2018-09-04 16:41:56
  from 'D:\xampp\htdocs\credit2eat\view\minhaconta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b8e99b4e8d127_98513330',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b9b244b3ab4ece577561b42a510ea52ec487819' => 
    array (
      0 => 'D:\\xampp\\htdocs\\credit2eat\\view\\minhaconta.tpl',
      1 => 1536071537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b8e99b4e8d127_98513330 (Smarty_Internal_Template $_smarty_tpl) {
?><center>
	<h3>Minha Conta</h3>
</center>
<hr>

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-">
                  <h4 class="card-title">Editar Perfil</h4>
                  <p class="card-category">Complete seu perfil</p>
                </div>
                <div class="card-body">
                  <form class="form-signin" action="../php/update.php" method="post">
                    <div class="row">
                      <div class="col-md-7">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nome</label>
                          <input type="text" class="form-control" value="<?php echo '<?php ';?>echo $_SESSION['nome']; <?php echo '?>';?>" name="nome">
                        </div>
                      </div>
                      <div class="col-md-7">
                        <div class="form-group">
                          <label class="bmd-label-floating">E-mail</label>
                          <input type="text" class="form-control" value="<?php echo '<?php ';?>echo $_SESSION['email']; <?php echo '?>';?>" name="email">
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Salvar Alterações</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>
<?php }
}
