
<div class="container d-flex justify-content-center mt-5">
	<div class="card mb-3 mt-5" style="max-width: 54rem;">
		<div class="row g-0 d-flex">
			<div class="col-md-4 ">
				<img src="<?php echo URL;?>Views/template/img/phone3.jpg" class="img-fluid rounded-start" alt="...">
			</div>
			<div class="col-md-8">
				<div class="card-body">
					<h5 class="card-title text-center">Perfil del User <?php echo $datos['User']; ?><hr></h5>
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
	</div>
</div>

