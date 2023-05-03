
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
 <script > 


  function estadoCivil(){
     var civil = document.getElementById('pregunta');//cogemos los campos
     var tc1 = document.getElementById('Equipo_ID');
     var tc2 = document.getElementById('Sim_ID');

     if(civil.selectedIndex==1){//si no escogio nd
      tc1.disabled = true ;//se desactivan los campos
      tc2.disabled = false ;//se desactivan los campos

     }else{
		     if(civil.selectedIndex==2){//si no escogio nd
		      tc1.disabled = false ;//se desactivan los campos
		      tc2.disabled = true ;//se desactivan los campos

		     }else{
						     if(civil.selectedIndex==3){//si no escogio nd
						      tc1.disabled = false ;//se quedan los campos activos
						      tc2.disabled = false ;//se quedan los campos activos

				     }else{

				       }
	     		  }
	     }
    }

</script>	



<?php 
$area = $linea->listararea();
$organismo = $linea->listarorganismo();
$equipo = $linea->listarequipoactivo();
$sim = $linea->listarsimactivos();
?>
<div class="box-principal">
<h3 class="titulo">Agregar Linea<hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	   <!-- <h3 class="panel-title">Agregar Linea</h3> -->
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-1"></div>
	  		<div class="col-md-12">
	  			<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
	  				<div class="Panel with panel-primary class" style="background-color:#EEEEEE;">
	  <div class="panel-body">
<div class="container-fluid bg-3 text-center"> 
	<div class="row">
			
			<div class="col-sm-6"> 
					<label for="inputEmail" class="control-label">Usuario</label><br>
					<input class="form-control" type="text" name="Usuario"   required>
			</div>									
			<div class="col-sm-6"> 
					<label for="inputEmail" class="control-label">Funcion</label><br>
					<input class="form-control" type="text" name="Funcion"   required>	
			<br>
			</div>
	
			<div class="col-sm-6">
		      <label for="Area_ID" class="control-label">Area</label>
		      <select id="Area_ID" name="Area_ID" class="Area_ID">
		      	<option value=""></option>
		      	<?php while($row = mysqli_fetch_array($area)){ ?>
		      		<option value="<?php echo $row['ID_Area']; ?>"><?php echo $row['Area']; ?></option>
		      	<?php } ?>
		      </select>
		    </div>

		    <div class="col-sm-6">
		      <label for="Organismo_ID" class="control-label">Organismo</label>
		      <select id="Organismo_ID" name="Organismo_ID" class="Organismo_ID">
		      	<option value=""></option>
		      	<?php while($row = mysqli_fetch_array($organismo)){ ?>
		      		<option value="<?php echo $row['ID_Organismo']; ?>"><?php echo $row['Organismo']; ?></option>
		      	<?php } ?>
		      </select>
		      <br> 
		      <br> 
		    </div>		    
	    
		    <div class="col-sm-10">
				<label for="inputEmail" class="control-label">Seleccione Una Opcion</label>
				<select onchange="estadoCivil()"  id="pregunta" name="pregunta" required> 
				<option value="4" ></option>
				<option value="1" >Asignar Linea</option>
				<option value="2" >Asignar Equipo</option>
				<option value="3" >Asignar Linea Y Equipo</option>
				</select>
				<br> 
		      <br>
		    </div>
		

		 <div class="col-sm-6">
	      <label for="Sim_ID" class="control-label">Sim</label>
	      <select id="Sim_ID" name="Sim_ID" class="Sim_ID" disabled="on" style="width: 300px; height: 80px;" placeholder="Selecciona una opción">
	      	<option value=""></option>
	      	<?php while($row = mysqli_fetch_array($sim)){ ?>
	      		<option value="<?php echo $row['ID_Sim']; ?>"><?php echo  $row['Numero']; ?></option>
	      	<?php } ?>
	      </select> 	
		<br>
	    </div>	
		 <div class="col-sm-6">
		      <label for="Equipo_ID" class="control-label">Equipo</label>
		      <select id="Equipo_ID" name="Equipo_ID" class="Equipo_ID" disabled="on" style="width: 300px; height: 80px;" placeholder="Selecciona una opción">
		      	<option value=""></option>
		      	<?php while($row = mysqli_fetch_array($equipo)){ ?>
		      		<option value="<?php echo $row['ID_Equipo']; ?>"><?php echo  $row['Marca'] . " " . $row['Modelo']; ?></option>
		      	<?php } ?>
		      </select> 
		    </div>	
			
			
		<input value="<?php echo $_SESSION["usuarioactual"];?>" name="user" type="hidden" required>


				    </div>
				    </div>
				    </div>
				    <br>	
				    <br>
				    <br>
				    	 <div class="container-fluid bg-3 text-center">
				    	 <button type="submit" class="btn btn-success" name="enviar">Registrar</button>
				        <button type="reset" class="btn btn-warning">Borrar</button>
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
</div>

<script > 

   $(document).ready(function() {
       $('.Sim_ID').select2();
       $('.Equipo_ID').select2();
       $('.Organismo_ID').select2();
       $('.Area_ID').select2();
});

</script>