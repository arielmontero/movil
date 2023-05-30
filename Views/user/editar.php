
<div class="container d-flex justify-content-center mt-5">
	<div class="card mb-3 mt-5" style="max-width: 54rem;">
		<div class="row g-0 d-flex">
			<div class="col-md-4 ">
				<img src="<?php echo URL;?>Views/template/img/phone3.jpg" class="img-fluid rounded-start" alt="...">
			</div>
			<div class="col-md-8">
				<div class="card-body">
					<h5 class="card-title text-center"> Editar Area <?php echo $datos['Area'];?><hr></h5>
					<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
						<div class="form-group my-2">
							<label for="inputEmail" class="control-label">User</label>
							<input class="form-control" value="<?php echo $datos['User'];?>" name="User" type="text" required>
						</div>
						<div class="form-group my-2">
							<label for="inputPassword" class="control-label">Clave</label>
							<input class="form-control" value="<?php echo $datos['Clave'];?>" name="Clave" type="text" required>
						</div>
						<div class="form-group my-2">
						<label for="inputEmail" class="control-label">Estado</label>
							<input class="form-control" value="<?php echo $datos['Estado'];?>" name="Estado" type="text" required>
						</div>
						<input value="<?php echo $datos['ID_User'];?>" name="id" type="hidden" required>
							<button type="submit" class="btn btn-success">Editar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

