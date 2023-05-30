<div class="box-principal">

<?php
if ($datos['User_ID']== "") {
?>
<h3 class="titulo">El Numero ingresado no existe<hr></h3>
<?php
}else{
?>
<h3 class="titulo">Listar Los Datos del User_ID: <?php echo $datos['User_ID']; ?><hr></h3>
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Perfil del User_ID <?php echo $datos['User_ID']; ?><b></b></h3>
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-md-9">
          <ul class="list-group">
            <li class="list-group-item">
              <b>User_ID: </b><?php echo $datos['User_ID']; ?>
            </li>            
            <li class="list-group-item">
              <b>App_ID: </b><?php echo $datos['App_ID']; ?>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
}
?>