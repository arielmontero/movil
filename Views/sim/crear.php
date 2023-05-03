<?php
$plan = $sim->listarplan();
$referencia = $sim->listarreferencia();

?>
<div class="box-principal">
<h3 class="titulo">Agregar Sim<hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Agregar un nueva Sim</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-1"></div>
	  		<div class="col-md-10">
	  			<form class="form-horizontal  bg-3" action="" method="POST" enctype="multipart/form-data">
						

								<div class="form-group"> 
										<label for="inputEmail" class="control-label">Numero</label><br>
										<input class="form-control" type="number" name="Numero"  required>
								</div>								
								<div class="form-group"> 
										<label for="inputEmail" class="control-label">Imei</label><br>
										<input class="form-control" type="number" name="Imei"  required>
								</div>								
						     <div class="col-sm-5">
								      <label for="inputEmail" class="control-label">Tipo</label>
								      <select name="Tipo" class="form-control">
								      	<option value="Linea">Linea</option>
								      	<option value="Modem">Modem</option>
								      	<option value="Avl">Avl</option>
								      </select>
								    </div>
								  <br>
							      <br>
							      <br>
								<div class="col-sm-5">
							      <label for="inputEmail" class="control-label">Referencia</label>
							      <select id="Referencia_ID" name="Referencia_ID" class="form-control">
							      	<option value=""></option>
							      	<?php while($row = mysqli_fetch_array($referencia)){ ?>
							      		<option value="<?php echo $row['ID_Referencia']; ?>"><?php echo $row['Referencia']; ?></option>
							      	<?php } ?>
							      </select>
							      <br>
							      <br>
							      <br>
							    </div>											
							    <div class="col-sm-5">
							      <label for="inputEmail" class="control-label">Plan</label>
							      <select id="Plan_ID" name="Plan_ID" class="form-control">
							      	<option value=""></option>
							      	<?php while($row = mysqli_fetch_array($plan)){ ?>
							      		<option value="<?php echo $row['ID_Plan']; ?>"><?php echo $row['Nombre']; ?></option>
							      	<?php } ?>
							      </select>
							      <br>
							      <br>
							      <br>
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