<div class="box-principal">

<?php
if ($datos['Saf']== "") {
 ?>
<h3 class="titulo">La Saf ingresada no existe<hr></h3>
 <?php
}else{
?>
<h3 class="titulo">Listar Los Datos de la Saf: <?php echo $datos['Saf']; ?><hr></h3>
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Saf <?php echo $datos['Saf']; ?><b></b></h3>
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-md-9">
          <ul class="list-group">
            <li class="list-group-item">
              <b>Numero: </b><?php echo $datos['Saf']; ?>
            </li>                  
             <li class="list-group-item">
              <b>Nombre: </b><?php echo $datos['Nombre']; ?>
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