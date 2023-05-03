<?php
$us=$_SESSION["idUser"];

?>

<div class="box-principal">
<h3 class="titulo">Cambiar Contraseña del  user <?php echo $_SESSION["usuarioactual"];?><hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Cambiar Contraseña del user <?php echo $_SESSION["usuarioactual"];?></h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-9">
	  			<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Contraseña Anterior</label>
				        <input class="form-control"  name="ClaveActual" type="password" required>
				    </div>
				    <div class="form-group">
				      <label for="inputPassword" class="control-label">Contraseña Nueva</label>
				        <input class="form-control"  name="Clave" type="password" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Repetir Contraseña</label>
				        <input class="form-control"  name="Clave2" type="password" required>
				    </div>
				    <input value="<?php echo $datos['ID_User'];?>" name="id" type="hidden" required>
				    <input value="<?php echo $_SESSION["usuarioactual"];?>" name="User" type="hidden" required>
				    	 <button type="submit" class="btn btn-success">Editar</button>
				    </div>
				</form>
	  		</div>
	  	</div>
	  </div>
	</div>
</div>