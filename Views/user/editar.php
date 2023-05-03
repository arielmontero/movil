<div class="box-principal">
<h3 class="titulo">Editar user <?php echo $datos['User'];?><hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Editar user <?php echo $datos['User'];?></h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-9">
	  			<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">User</label>
				        <input class="form-control" value="<?php echo $datos['User'];?>" name="User" type="text" required>
				    </div>
				    <div class="form-group">
				      <label for="inputPassword" class="control-label">Clave</label>
				        <input class="form-control" value="<?php echo $datos['Clave'];?>" name="Clave" type="text" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Estado</label>
				        <input class="form-control" value="<?php echo $datos['Estado'];?>" name="Estado" type="text" required>
				    </div>
				    <input value="<?php echo $datos['ID_User'];?>" name="id" type="hidden" required>
				    	 <button type="submit" class="btn btn-success">Editar</button>
				    </div>
				</form>
	  		</div>
	  	</div>
	  </div>
	</div>
</div>