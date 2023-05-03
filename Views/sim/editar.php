<?php
$plan = $sim->listarplan();
$referencia = $sim->listarreferencia();
?>
<div class="box-principal">
<h3 class="titulo">Editar el Sim: <?php echo  $datos['Numero'];?><hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Editar el Sim: <?php echo  $datos['Numero'];?></h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-9">
	  			<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Numero</label>
				        <input class="form-control" value="<?php echo $datos['Numero'];?>" name="Numero" type="number" required>
				    </div>					    
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Imei</label>
				        <input class="form-control" value="<?php echo $datos['Imei'];?>" name="Imei" type="number" required>
				    </div>				    
				     <div class="col-sm-5">
						      <label for="inputEmail" class="control-label">Actua Tipo: <?php echo $datos['Tipo'];?> </label>
						      <select name="Tipo" class="form-control">
						      	<option value="<?php echo $datos['Tipo'];?>"></option>
						      	<option value="Linea">Linea</option>
						      	<option value="Moden">Moden</option>
						      	<option value="Avl">Avl</option>
						      </select>
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
					<div class="col-sm-5">
				      <label for="inputEmail" class="control-label"> (<b>Referencia  Actual: <?php echo $datos['referencia']; ?></b>)</label>
				      <select id="Referencia_ID" name="Referencia_ID" class="form-control">
				      	<option value="<?php echo $datos['Referencia_ID']; ?>"><?php echo $datos['Referencia']; ?></option>
				      	<?php while($row = mysqli_fetch_array($referencia)){ ?>
				      		<option value="<?php echo $row['ID_Referencia']; ?>"><?php echo $row['Referencia']; ?></option>
				      	<?php } ?>
				      </select>
				    </div>   
				    					<div class="col-sm-5">
				      <label for="inputEmail" class="control-label"> (<b>Plan Actual: <?php echo $datos['plan']; ?></b>)</label>
				      <select id="Plan_ID" name="Plan_ID" class="form-control">
				      	<option value="<?php echo $datos['Plan_ID']; ?>"><?php echo $datos['Nombre']; ?></option>
				      	<?php while($row = mysqli_fetch_array($plan)){ ?>
				      		<option value="<?php echo $row['ID_Plan']; ?>"><?php echo $row['Nombre']; ?></option>
				      	<?php } ?>
				      </select>
				    </div>   

				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Comentario</label>
				        <textarea class="form-control" name="Comentario" cols="40" rows="5" required placeholder="Describir la Causa de la Modificacion!"></textarea>
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