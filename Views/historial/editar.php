<div class="box-principal">
<h3 class="titulo">Editar el Historial: <?php echo  $datos['Entidad'];?><hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Editar el Historial: <?php echo  $datos['Entidad'];?></h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-9">
	  			<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Comentario</label>
				        <input class="form-control" value="<?php echo $datos['Comentario'];?>" name="Comentario" type="text" required>
				    </div>				    
				    <input value="<?php echo $datos['ID_HistorialSim'];?>" name="id" type="hidden" required>
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