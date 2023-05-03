<?php 
$user= $permiso->listarUser();
$app= $permiso->listarApp();

?>
<div class="box-principal">
<h3 class="titulo">Agregar<hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Agregar</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-1"></div>
	  		<div class="col-md-10">
	  			<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">

		    <div class="col-sm-4">
		      <label for="inputEmail" class="control-label">User</label>
		      <select id="User" name="User" class="form-control">
		      	<option value=""></option>
		      	<?php while($row = mysqli_fetch_array($user)){ ?>
		      		<option value="<?php echo $row['ID_User']; ?>"><?php echo $row['User']; ?></option>
		      	<?php } ?>
		      </select>
		    </div>		    
		    <div class="col-sm-4">
		      <label for="inputEmail" class="control-label">App</label>
		      <select id="App" name="App" class="form-control">
		      	<option value=""></option>
		      	<?php while($row = mysqli_fetch_array($app)){ ?>
		      		<option value="<?php echo $row['ID_App']; ?>"><?php echo $row['App']; ?></option>
		      	<?php } ?>
		      </select>
		    </div>
				    <div class="form-group">
				    	 <button type="submit" class="btn btn-success" name="enviar">Registrar</button>
				        <button type="reset" class="btn btn-warning">Borrar</button>
				    </div>
				</form>
	  		</div>
	  		<div class="col-md-1"></div>
	  	</div>
	  </div>
	</div>
</div>
