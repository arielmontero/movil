<div class="box-principal">
<h3 class="titulo">Editar el Plan: <?php echo  $datos['Minutos'];?><hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Editar el Plan: <?php echo  $datos['Minutos'];?></h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-9">
	  			<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Minutos</label>
				        <input class="form-control" value="<?php echo $datos['Minutos'];?>" name="Minutos" type="text" required>
				    </div>				    
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Datos</label>
				        <input class="form-control" value="<?php echo $datos['Datos'];?>" name="Datos" type="text" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Sms</label>
				        <input class="form-control" value="<?php echo $datos['Sms'];?>" name="Sms" type="text" required>
				    </div>				    
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Cobertura</label>
				        <input class="form-control" value="<?php echo $datos['Cobertura'];?>" name="Cobertura" type="text" required>
				    </div>				    
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Costo</label>
				        <input class="form-control" value="<?php echo $datos['Costo'];?>" name="Costo" type="text" required>
				    </div>

				    <input value="<?php echo $datos['ID_Plan'];?>" name="id" type="hidden" required>
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