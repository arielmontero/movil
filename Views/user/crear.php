<div class="box-principal">
<h3 class="titulo">Agregar User<hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Agregar User</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-1"></div>
	  		<div class="col-md-10">
	  			<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">

								<div class="form-group"> 
										<label for="inputEmail" class="control-label">User</label><br>
										<input class="form-control" type="text" name="User"  required>
								</div>

								<div class="form-group"> 
										<label for="inputPassword" class="control-label">Clave</label><br>
										<input class="form-control" type="inputPassword" name="Clave" required>
								</div>
								<div class="form-group"> 
										<label for="inputEmail" class="control-label">Estado</label><br>
										<input class="form-control" type="number" name="Estado" min="1" max="2"  required>
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
