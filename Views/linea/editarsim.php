<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<?php 
$sim = $linea->listarsimactivos();
?>

<?php
if ($datos['Numero']=='N/A') {
	$ban=2;
 ?>
<div class="box-principal">
	<div class="panel panel-success">
	  <div class="panel-body">
		<div class="container-fluid bg-3 text-center"> 	
			<div class="row">
	  		<div class="col-md-1"></div>
	  		<div class="col-md-10">




			<div class="panel-body">


	 					<table class="table table-striped table-hover">
	 										 <div class="panel-heading">
	    <h3 class="panel-title">Elige una linea disponible para asignarle a la Persona</h3>
	 </div>
					<td>

					</td>
			</table>
				<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">

				<input class="form-control mr-sm-2" id="myInput" type="text"  placeholder="Buscar...">	




				<table class="table table-striped table-hover">
					<thead>
						<th>Id</th>
						<th>Linea</th>
					</thead>
					<tbody id="myTable">
<?php while ($riw = mysqli_fetch_array($sim)){ ?>
						<tr>

						<td><?php echo $riw['ID_Sim'];?></td>
						<td><?php echo $riw['Numero'];?></td>

						<td>

				    	
				        <input value="<?php echo $_GET['Linea'];?>" name="idlinea" type="hidden" required>
					    <input value="<?php echo $datos['ID_Sim'];?>" name="id" type="hidden" required>
					    <input value="<?php echo $ban;?>" name="ban" type="hidden" required>
					    <input value="<?php echo $_SESSION["usuarioactual"];?>" name="user" type="hidden" required>
						</td>
						</tr>
	<?php } 	?>	
		<div class="container-fluid bg-3 text-center"> 
			<input value="" id="Sim_ID" name="Sim_ID"  required>	
				    <button type="submit" class="btn btn-success" name="enviar">Asignar</button>   	    	 
				    </div>
	  

 
			
					</tbody>

				</table>

					</form>
			</div>



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
<h3 class="titulo">Liberar el Sim: <?php echo  $datos['Numero'];?><hr></h3>
	<div class="panel panel-success">
	  <div class="panel-body">
	  	<div class="container-fluid bg-3 text-center">
	  	<div class="row">
	  		<div class="col-md-1"></div>
	  		<div class="col-md-10">
	  			<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
	    			<div class="Panel with panel-primary class" style="background-color:#EEEEEE;">
				 	 <div class="panel-heading">
				    <h5 class="panel-title">Esta Seguro que decea Desvincular esta Linea? (<b><?php echo $datos['Estado'];?></b>)</h5>    
				  </div>		
	  						<div class="col-md-12">
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
									      <label for="inputEmail" class="control-label">Numero</label>
									        <input class="form-control" value="<?php echo $datos['Numero'];?>" name="Imei" type="text"  readonly required>
									    </div>
									    <div class="form-group">
									      <label for="inputEmail" class="control-label">Imei</label>
									        <input class="form-control" value="<?php echo $datos['Imei'];?>" name="Imei" type="text" readonly required>
									    </div>
									    <div class="form-group">
									      <label for="inputEmail" class="control-label">Tipo</label>
									        <input class="form-control" value="<?php echo $datos['Tipo'];?>" name="Tipo" type="text" readonly required>
									    </div>									    
									    <div class="form-group">
									      <label for="inputEmail" class="control-label">Referencia</label>
									        <input class="form-control" value="<?php echo $datos['referencia'];?>" name="Referencia" type="text" readonly required>
									    </div>									    
									    <div class="form-group">
									      <label for="inputEmail" class="control-label">Periodo</label>
									        <input class="form-control" value="<?php echo $datos['periodo'];?>" name="Periodo" type="text" readonly required>
									    </div>
								    	 <div class="form-group">
									      <label for="inputEmail" class="control-label">Comentario</label>
									        <textarea class="form-control" name="Comentario" cols="40" rows="5" required placeholder="Describir la Causa de la Modificacion!"></textarea>
									    </div>					    
			    
									    <input value="<?php echo $_GET['Linea'];?>" name="idlinea" type="hidden" required>
									    <input value="<?php echo $datos['ID_Sim'];?>" name="id" type="hidden" required>
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
