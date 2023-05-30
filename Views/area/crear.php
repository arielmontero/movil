
<div class="container d-flex justify-content-center mt-5">
	<div class="card mb-3 mt-5" style="max-width: 54rem;">
		<div class="row g-0 d-flex">
			<div class="col-md-4 ">
				<img src="<?php echo URL;?>Views/template/img/phone3.jpg" class="img-fluid rounded-start" alt="...">
			</div>
			<div class="col-md-8">
				<div class="card-body">
					<h5 class="card-title text-center">Agregar Nuevo</h5>
					<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
						<div class="form-group my-5"> 
							<label for="inputEmail" class="control-label">Area</label><br>
							<input class="form-control" type="text" name="Area"   required>
						</div>								
						<div class="form-group mt-4 text-center">
							<button type="submit" class="btn btn-success" name="enviar">Registrar</button>
							<button type="reset" class="btn btn-danger"> Borrar </button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


