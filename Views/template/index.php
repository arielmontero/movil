<div class="box-principal">
		<div class="panel panel-success">
			<div class="panel-body">
				<table class="table table-striped table-hover">
					<thead>
					</thead>
					<tbody>
					</tbody>
				</table>
			</div>
<?php
if($_SESSION["autentica"] !== "SIP"){
?>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Iniciar Sesión</h5>
            <hr class="my-4">
            <form class="form-signin" action="<?php echo URL;?>login/login" method="POST">
              <div class="form-label-group">
                <label for="inputEmail"> Usuario </label>
                <input type="text"  class="form-control" name="User" placeholder="Usuario" required autofocus>
              </div>
              <div class="form-label-group">
                <label for="inputPassword">Password</label>
                <input type="password" id="inputPassword" name="Clave" class="form-control" placeholder="Password" required>
              </div>
            <hr class="my-4">
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Iniciar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php } else {
  ?> <h3 class="titulo">Bienvenido <?php echo "  " . $_SESSION["usuarioactual"];?></h3>
  <?php } ?>
  </div>
</div>

