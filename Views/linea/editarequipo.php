<?php 
$equipo = $linea->listarequipoactivo();
?>



	<div class="row">
<?php
if ($datos['Marca']=='N/A') {
	$ban=2;
 ?>
				
<div class="box-principal">
	<div class="panel panel-success">
	  <div class="panel-body">
	  	<div class="container-fluid bg-3 text-center"> 
	  		<div class="row">
	  		<div class="col-md-1"></div>
	  		<div class="col-md-10">
	  			<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
	  				<div class="Panel with panel-primary class" style="background-color:#EEEEEE;">		
	  <div class="panel-heading">
	    <h3 class="panel-title">Elige un Equipo disponible para asignarle a la Persona</h3>
	 </div>
            <br>
		    <br>
		    <div class="col-sm-12">
		      <label for="inputEmail" class="control-label">Equipo</label>
		      <select id="Equipo_ID" name="Equipo_ID" class="form-control" required>
		      	<option value=""></option>
		      	<?php while($row = mysqli_fetch_array($equipo)){ ?>
		      		<option value="<?php echo $row['ID_Equipo']; ?>"><?php echo  $row['Marca'] . " " . $row['Modelo']; ?></option>
		      	<?php } ?>
		      </select> 
		    </div>
		    		    <br>
		    <br>
		    <br>	




					    <input value="<?php echo $_GET['Linea'];?>" name="idlinea" type="hidden" required>
					    <input value="<?php echo $datos['ID_Equipo'];?>" name="id" type="hidden" required>
					    <input value="<?php echo $ban;?>" name="ban" type="hidden" required>
					    <input value="<?php echo $_SESSION["usuarioactual"];?>" name="user" type="hidden" required>
				    <div class="container-fluid bg-3 text-center">
				    	 <button type="submit" class="btn btn-success" name="enviar">Asignar</button>
				    </div>
				    <br>
				    <br>
				    </div>

				</form>
	  		</div>
	  		<div class="col-md-1"></div>
	  	</div>
	  </div>
	</div>
 <?php
}else{	
	$ban=1;
?>
<div class="box-principal">
<h3 class="titulo">Liberar el Equipo: <?php echo  $datos['Marca'];?><hr></h3>
	<div class="panel panel-success">
	  <div class="panel-body">
	  	<div class="container-fluid bg-3 text-center"> 
	  	<div class="row">
	  		<div class="col-md-1"></div>
	  		<div class="col-sm-10">
	  			<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
	  				<div class="Panel with panel-primary class" style="background-color:#EEEEEE;">
					 <div class="panel-heading">
					    <h5 class="panel-title">Esta Seguro que decea Desvincular este Equipo? (<b><?php echo $datos['Estado'];?></b>)</h5>    
					  </div>
	    					<div class="col-sm-12">
						      <label for="inputEmail" class="control-label"></label>
						      <select name="Estado" class="form-control">
						      	<option value="Asignada"></option>
						      	<option value="Disponible">Disponible</option>
						      	<option value="Baja">Baja</option>
						      	<option value="Cambio de número">Cambio de número</option>
						      	<option value="Suspendida">Suspendida</option>
						      </select>
						    </div> 
				  			<div class="col-md-12">
				  			<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
							    <div class="form-group">
							      <label for="inputEmail" class="control-label">Marca</label>
							        <input class="form-control" value="<?php echo $datos['Marca'];?>" name="Marca" type="text" readonly required>
							    </div>				    
							    <div class="form-group">
							      <label for="inputEmail" class="control-label">Tipo</label>
							        <input class="form-control" value="<?php echo $datos['Tipo'];?>" name="Tipo" type="text" readonly required>
							    </div>				    
							    <div class="form-group">
							      <label for="inputEmail" class="control-label">Modelo</label>
							        <input class="form-control" value="<?php echo $datos['Modelo'];?>" name="Modelo" type="text" readonly required>
							    </div>				    
							    <div class="form-group">
							      <label for="inputEmail" class="control-label">Imei</label>
							        <input class="form-control" value="<?php echo $datos['Imei'];?>" name="Imei" type="text" readonly required>
							    </div>
								<div class="form-group">
								<label for="inputEmail" class="control-label">Comentario</label>
								<textarea class="form-control" name="Comentario" cols="40" rows="5" required placeholder="Describir la Causa de la Modificacion!"></textarea>
								</div>
							    <input value="<?php echo $_GET['Linea'];?>" name="idlinea" type="hidden" required>
							    <input value="<?php echo $datos['ID_Equipo'];?>" name="id" type="hidden" required>
							     <input value="<?php echo $ban;?>" name="ban" type="hidden" required>
							    <input value="<?php echo $_SESSION["usuarioactual"];?>" name="user" type="hidden" required>
							    <div class="form-group">
							    	 <button type="submit" class="btn btn-success">Editar</button>
							    </div>
							</form>
				  		</div>
	  		<div class="col-md-1"></div>
	  	</div>
	  </div>
	</div>
</div>
<?php
}
?>