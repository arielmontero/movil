<div class="box-principal">
<h3 class="titulo">Editar el Equipo: <?php echo  $datos['Marca'];?><hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Editar el Equipo: <?php echo  $datos['Marca'];?></h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-9">
	  			<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Marca</label>
				        <input class="form-control" value="<?php echo $datos['Marca'];?>" name="Marca" type="text" required>
				    </div>				    
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Tipo</label>
				        <input class="form-control" value="<?php echo $datos['Tipo'];?>" name="Tipo" type="text" required>
				    </div>				    
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Modelo</label>
				        <input class="form-control" value="<?php echo $datos['Modelo'];?>" name="Modelo" type="text" required>
				    </div>				    
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Imei</label>
				        <input class="form-control" value="<?php echo $datos['Imei'];?>" name="Imei" type="text" required>
				    </div>
				     <div class="col-sm-5">
						      <label for="inputEmail" class="control-label">Actua Estado: <?php echo $datos['Estado'];?> </label>
						      <select name="Estado" class="form-control">
						      	<option value="<?php echo $datos['Estado'];?>"></option>
						      	<option value="Disponible">Disponible</option>
						      	<option value="Baja">Baja</option>
						      	<option value="Cambio de número">Cambio de número</option>
						      	<option value="Suspendida">Suspendida</option>
						      </select>
						    </div>
					 <div class="form-group">
				      <label for="inputEmail" class="control-label">Comentario</label>
				        <textarea class="form-control" name="Comentario" cols="40" rows="5" required placeholder="Describir la Causa de la Modificacion!"></textarea>
				    </div>
				    <input value="<?php echo $datos['ID_Equipo'];?>" name="id" type="hidden" required>
				    <input value="<?php echo $_SESSION["usuarioactual"];?>" name="user" type="hidden" required>
				    <div class="form-group">
				    	 <button type="submit" class="btn btn-success">Editar</button>
				    </div>
				</form>
	  		</div>
	  	</div>
	  </div>
	</div>
</div>