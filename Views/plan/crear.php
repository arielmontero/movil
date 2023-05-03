<script>         
function verimonto() {
	var Costo=document.getElementById("Costo").value; 
	if (document.getElementById("Costo").readOnly==true){
		//apprise('identificador'+Costo);
	}else{
		var RE =/^\d+(\.\d{1,2})?$/;
		var mont=document.getElementById("Costo").value; 
		//   /^\d+(\.\d{1,2})?$/   /^d*(.d{1})?d{0,1}$/     /^(\d{1,3},)*\d{1,3}(\.\d+)?$/
		if (RE.test(mont) && (mont.length)) {
			document.getElementById("vuelta").value=mont;
			// document.getElementById('Costo').readOnly = true;
			return;
		}else{
			apprise('formato no valido ej:1234567.89, Ingrese los decimales luego de un punto.');
			document.getElementById("Costo").value= null; 
			document.getElementById("vuelta").focus();
		return;
		}
		} 
}		

</script>



<div class="box-principal">
<h3 class="titulo">Agregar Plan<hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Agregar un nueva Plan</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-1"></div>
	  		<div class="col-md-10">
	  			<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
						<input type="hidden" name="vuelta" id="vuelta">

								<div class="form-group"> 
										<label for="inputEmail" class="control-label">Nombre</label><br>
										<input class="form-control" type="text" name="Nombre"  required>
								</div>								
								<div class="form-group"> 
										<label for="inputEmail" class="control-label">Minutos</label><br>
										<input class="form-control" type="number" name="Minutos"  required>
								</div>								
								<div class="form-group"> 
										<label for="inputEmail" class="control-label">Datos</label><br>
										<input class="form-control" type="number" name="Datos"  required>
								</div>								
								<div class="form-group"> 
										<label for="inputEmail" class="control-label">Sms</label><br>
										<input class="form-control" type="number" name="Sms"  required>
								</div>								
								<div class="form-group"> 
										<label for="inputEmail" class="control-label">Cobertura</label><br>
										<input class="form-control" type="text" name="Cobertura"  required>
								</div>								
								<div class="form-group"> 
										<label for="inputEmail" class="control-label">Costo</label><br>
										<input class="form-control" type="text" id="Costo" name="Costo" onblur="verimonto()"  required>
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