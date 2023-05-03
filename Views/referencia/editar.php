<div class="box-principal">
<h3 class="titulo">Editar Referencia <?php echo $datos['Referencia'];?><hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Editar Referencia <?php echo $datos['Referencia'];?></h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-9">
	  			<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Cuenta</label>
				        <input class="form-control" value="<?php echo $datos['Cuenta'];?>" name="Cuenta" type="number" required>
				    </div>				    
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">Referencia</label>
				        <input class="form-control" value="<?php echo $datos['Referencia'];?>" name="Referencia" type="text" required>
				    </div>
				     <div class="col-sm-5">
				      <label for="inputEmail" class="control-label">Actua Periodo: <?php echo $datos['Periodo'];?> </label>
				      <select name="Periodo" class="form-control">
				      	<option value="<?php echo $datos['Periodo'];?>"></option>
				      	<option value="7">7</option>
				      	<option value="14">14</option>
				      	<option value="21">21</option>
				      	<option value="28">28</option>
				      </select>
				    </div>				    
				    <input value="<?php echo $datos['ID_Referencia'];?>" name="id" type="hidden" required>
				    <div class="form-group">
				    	 <button type="submit" class="btn btn-success">Editar</button>
				    </div>
				</form>
	  		</div>
	  	</div>
	  </div>
	</div>
</div>