<div class="box-principal">

<?php
if ($datos['App']== "") {
 ?>
<h3 class="titulo">La App ingresada no existe<hr></h3>
 <?php
}else{
?>
<h3 class="titulo">Listar Los Datos de la App: <?php echo $datos['App']; ?><hr></h3>
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">App <?php echo $datos['App']; ?><b></b></h3>
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-md-9">
          <ul class="list-group">
            <li class="list-group-item">
              <b>Nombre: </b><?php echo $datos['App']; ?>
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