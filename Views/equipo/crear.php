<div class="box-principal">
<h3 class="titulo">Agregar Equipo<hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Agregar un nueva Equipo</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-1"></div>
	  		<div class="col-md-10">
	  			<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
								<div class="form-group"> 
										<label for="inputEmail" class="control-label">Marca</label><br>
										<input class="form-control" type="text" name="Marca"  required>
								</div>
								<div class="form-group"> 
										<label for="inputEmail" class="control-label">Tipo</label><br>
										<input class="form-control" type="text" name="Tipo"  required>
								</div>			
								<div class="form-group"> 
										<label for="inputEmail" class="control-label">Modelo</label><br>
										<input class="form-control" type="text" name="Modelo"  required>
								</div>								
								<div class="form-group"> 
										<label for="inputEmail" class="control-label">Imei</label><br>
										<input class="form-control" type="text" name="Imei"  required>
								</div>		
								<input value="<?php echo $_SESSION["usuarioactual"];?>" name="user" type="hidden" required>						
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