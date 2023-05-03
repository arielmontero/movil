<?php 
$user= $permiso->listarUser();
$app= $permiso->listarApp();
?>
<div class="box-principal">
<h3 class="titulo">Listar Los Datos del Usuario: <?php echo $datos['User_ID']; ?><hr></h3>
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Perfil del Usuario <?php echo $datos['User_ID']; ?><b></b></h3>
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-md-9">
          <ul class="list-group">
            <li class="list-group-item">
              <b>Id: </b><?php echo $datos['ID_Permiso']; ?>
            </li>            
            <li class="list-group-item">
              <b>Usuario: </b><?php echo $datos['user']; ?>
            </li>            
            <li class="list-group-item">
              <b>Aplicacion: </b><?php echo $datos['app']; ?>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>