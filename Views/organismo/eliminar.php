<div class="box-principal">
<h3 class="titulo">Eliminar Organismo<hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">¿Usted esta seguro que decea elimira el Organismo <?php echo $datos['Organismo']; ?>?</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-1"></div>
	  		<div class="col-md-10">
	  			<form class="form-horizontal" action="" method="POST">
				    <input value="<?php echo $datos['ID_Organismo']; ?>" name="id" type="hidden">
				    <div class="form-group">
				    	 <button type="submit" class="btn btn-success">Eliminar</button>
				    </div>
				</form>
	  		</div>
	  		<div class="col-md-1"></div>
	  	</div>
	  </div>
	</div>
</div>




