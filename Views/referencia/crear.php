<div class="box-principal">
<h3 class="titulo">Agregar Referencia<hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Agregar Referencia</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-1"></div>
	  		<div class="col-md-10">
	  			<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">

								<div class="form-group"> 
										<label for="inputEmail" class="control-label">Cuenta</label><br>
										<input class="form-control" type="number" name="Cuenta"   required>
								</div>							
								<div class="form-group"> 
										<label for="inputEmail" class="control-label">Referencia</label><br>
										<input class="form-control" type="text" name="Referencia"   required>
								</div>
								 <div class="col-sm-5">
								      <label for="inputEmail" class="control-label">Periodo</label>
								      <select name="Periodo" class="form-control" required>
								      	<option value=""></option>
								      	<option value="7">7</option>
								      	<option value="14">14</option>
								      	<option value="21">21</option>
								      	<option value="28">28</option>
								      </select>
								</div>								
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
