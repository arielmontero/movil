<div class="box-principal">

<?php
if ($datos['Area']== "") {
 ?>
<h3 class="titulo">La Area ingresada no existe<hr></h3>
 <?php
}else{
?>
<h3 class="titulo">Listar Los Datos de la Area: <?php echo $datos['Area']; ?><hr></h3>
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Area <?php echo $datos['Area']; ?><b></b></h3>
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-md-9">
          <ul class="list-group">
            <li class="list-group-item">
              <b>Area: </b><?php echo $datos['Area']; ?>
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