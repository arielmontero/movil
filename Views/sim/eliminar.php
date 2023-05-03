<div class="box-principal">
<h3 class="titulo">Eliminar Sim<hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">¿Usted esta seguro que decea elimira el Sim <?php echo $datos['Numero']; ?>?</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-1"></div>
	  		<div class="col-md-10">
	  			<form class="form-horizontal" action="" method="POST">
				    <input value="<?php echo $datos['ID_Sim']; ?>" name="id" type="hidden">
				    <div class="form-group">
				    	 <button type="submit" class="btn btn-danger">Eliminar</button>
				    </div>
				</form>
	  		</div>
	  		<div class="col-md-1"></div>
	  	</div>
	  </div>
	</div>
</div>




