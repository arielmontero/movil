<!-- crear Modal -->

<div class="modal fade" id="crearModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"> Crear Usuario </h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form class="form-horizontal" action="<?php echo URL;?>user/crear" method="POST" enctype="multipart/form-data">
								<div class="form-group"> 
										<label for="inputEmail" class="control-label">User</label><br>
										<input class="form-control" type="text" name="User"  required>
								</div>
								<div class="form-group"> 
										<label for="inputPassword" class="control-label">Clave</label><br>
										<input class="form-control" type="inputPassword" name="Clave" required>
								</div>
								<div class="form-group"> 
										<label for="inputEmail" class="control-label">Estado</label><br>
										<input class="form-control" type="number" name="Estado" min="1" max="2"  required>
								</div>
					<div class="form-group mt-3 d-flex justify-content-end">
						<button type="submit" class="btn btn-success m-1" name="enviar">Registrar</button>
						<button type="reset" class="btn btn-danger m-1">Borrar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>


<!-- ver Modal -->

<div class="modal fade" id="verModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Listar Los Datos del User: <?php echo $datos['User']; ?></h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-9">
						<ul class="list-group">
							<li class="list-group-item">
								<b>Nombre: </b><?php echo $datos['User']; ?>
							</li>            
							<li class="list-group-item">
								<b>Nombre: </b><?php echo $datos['Clave']; ?>
							</li>
							<li class="list-group-item">
								<b>Edad: </b><?php echo $datos['Estado']; ?>
							</li>           
						</ul>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<!-- edit Modal -->

<!-- <div class="modal fade" id="editsModal" tabindex="-1" aria-labelledby="editModalLabeler" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="editModalLabel">hi</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div> -->
