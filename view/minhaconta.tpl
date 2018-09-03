<center>
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
                          <input type="text" class="form-control" value="<?php echo $linha['nome']; ?>" name="nome">
                        </div>
                      </div>
                      <div class="col-md-7">
                        <div class="form-group">
                          <label class="bmd-label-floating">E-mail</label>
                          <input type="text" class="form-control" value="<?php echo $linha['email']; ?>" name="email">
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
