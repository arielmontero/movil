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

<?php
$referencia = $plan->listarreferencia();
?>
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
				      <label for="inputEmail" class="control-label">Nombre</label>
				        <input class="form-control" value="<?php echo $datos['Nombre'];?>" name="Nombre" type="text" required>
				    </div>					    
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Minutos</label>
				        <input class="form-control" value="<?php echo $datos['Minutos'];?>" name="Minutos" type="number" required>
				    </div>				    
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Datos</label>
				        <input class="form-control" value="<?php echo $datos['Datos'];?>" name="Datos" type="number" required>
				    </div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Sms</label>
				        <input class="form-control" value="<?php echo $datos['Sms'];?>" name="Sms" type="number" required>
				    </div>				    
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Cobertura</label>
				        <input class="form-control" value="<?php echo $datos['Cobertura'];?>" name="Cobertura" type="text" required>
				    </div>				    
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Costo</label>
				        <input class="form-control" value="<?php echo $datos['Costo'];?>" id="Costo" name="Costo" type="text" onblur="verimonto()" required>
				    </div>

					<div class="col-sm-5">
				      <label for="inputEmail" class="control-label"> (<b>Referencia Actual: <?php echo $datos['Referencia_ID']; ?></b>)</label>
				      <select id="Referencia_ID" name="Referencia_ID" class="form-control">
				      	<option value="<?php echo $datos['Referencia_ID']; ?>"><?php echo $datos['Referencia']; ?></option>
				      	<?php while($row = mysqli_fetch_array($referencia)){ ?>
				      		<option value="<?php echo $row['ID_Referencia']; ?>"><?php echo $row['Referencia']; ?></option>
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