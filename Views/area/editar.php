
<div class="container d-flex justify-content-center mt-5">
	<div class="card mb-3 mt-5" style="max-width: 54rem;">
		<div class="row g-0 d-flex">
			<div class="col-md-4 ">
				<img src="<?php echo URL;?>Views/template/img/phone3.jpg" class="img-fluid rounded-start" alt="...">
			</div>
			<div class="col-md-8">
				<div class="card-body">
					<h5 class="card-title text-center">Editar Area <?php echo $datos['Area'];?><hr></h5>
					<form class="form-horizontal mt-5" action="" method="POST" enctype="multipart/form-data">
						<div class="form-group">
						<label for="inputEmail" class="control-label">Area</label>
							<input class="form-control" value="<?php echo $datos['Area'];?>" name="Area" type="text" required>
						</div>				    
						<input value="<?php echo $datos['ID_Area'];?>" name="id" type="hidden" required>
						<div class="form-group my-4">
							<button type="submit" class="btn btn-success">Editar</button>
						</div>
				</form>
				</div>
			</div>
		</div>
	</div>
</div>

