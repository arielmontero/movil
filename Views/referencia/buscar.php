<div class="box-principal">

<?php
if ($datos['Referencia']== "") {
 ?>
<h3 class="titulo">La Referencia ingresada no existe<hr></h3>
 <?php
}else{
?>
<h3 class="titulo">Listar Los Datos de la Referencia: <?php echo $datos['Referencia']; ?><hr></h3>
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Referencia <?php echo $datos['Referencia']; ?><b></b></h3>
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-md-9">
          <ul class="list-group">
            <li class="list-group-item">
              <b>Referencia: </b><?php echo $datos['Referencia']; ?>
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