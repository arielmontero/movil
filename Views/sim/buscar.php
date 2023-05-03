<div class="box-principal">

<?php
if ($datos['Sim']== "") {
 ?>
<h3 class="titulo">El Sim ingresado no existe<hr></h3>
 <?php
}else{
?>
<h3 class="titulo">Listar Los Datos de los Sim: <?php echo $datos['Numero'] ; ?><hr></h3>
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Perfil de los Sim <?php echo $datos['Imei'] ; ?><b></b></h3>
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-md-9">
          <ul class="list-group">
            <li class="list-group-item">
              <b>Sim: </b><?php echo $datos['ID_Sim']; ?>
            </li>                
            <li class="list-group-item">
              <b>Estado: </b><?php echo $datos['Estado']; ?>
            </li>            
            <li class="list-group-item">
              <b>Codigo del  Imei: </b><?php echo $datos['Imei']; ?>
            </li>            
            <li class="list-group-item">
              <b>Plan_ID: </b><?php echo $datos['Plan_ID']; ?>
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