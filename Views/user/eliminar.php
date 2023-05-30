<!-- <div class="box-principal">
<h3 class="titulo">Eliminar user<hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">¿Usted esta seguro que decea elimira el user <?php echo $datos['User']; ?>?</h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-1"></div>
	  		<div class="col-md-10">
	  			<form class="form-horizontal" action="" method="POST">
				    <input value="<?php echo $datos['ID_User']; ?>" name="id" type="hidden">
				    <div class="form-group">
				    	 <button type="submit" class="btn btn-success">Eliminar</button>
				    </div>
				</form>
	  		</div>
	  		<div class="col-md-1"></div>
	  	</div>
	  </div>
	</div>
</div> -->



<div class="container d-flex justify-content-center mt-5">
	<div class="card mb-3 mt-5" style="max-width: 54rem;">
		<div class="row g-0 d-flex">
			<div class="col-md-4 ">
				<img src="<?php echo URL;?>Views/template/img/phone3.jpg" class="img-fluid rounded-start" alt="...">
			</div>
			<div class="col-md-8">
				<div class="card-body">
					<h5 class="card-title text-center">¿Usted esta seguro que decea elimira el user <?php echo $datos['User']; ?>?<hr></h5>
					<form class="form-horizontal mt-5" action="" method="POST">
						<input value="<?php echo $datos['ID_User']; ?>" name="id" type="hidden">
						<div class="form-group text-center">
							<button type="submit" class="btn btn-danger">Eliminar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>



