<div class="box-principal">

<?php
if ($datos['Marca']== "") {
 ?>
<h3 class="titulo">El Numero ingresado no existe<hr></h3>
 <?php
}else{
?>
<h3 class="titulo">Listar Los Datos de los Equipo: <?php echo $datos['Marca'] ; ?><hr></h3>
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Perfil de los Equipo <?php echo $datos['Marca'] ; ?><b></b></h3>
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-md-9">
          <ul class="list-group">
           <li class="list-group-item">
              <b>Codigo del Equipo: </b><?php echo $datos['ID_Equipo']; ?>
            </li>                
            <li class="list-group-item">
              <b>Marca: </b><?php echo $datos['Marca']; ?>
            </li>               
            <li class="list-group-item">
              <b>Tipo: </b><?php echo $datos['Tipo']; ?>
            </li>            
            <li class="list-group-item">
              <b>Modelo: </b><?php echo $datos['Modelo']; ?>
            </li>               
            <li class="list-group-item">
              <b>Imei: </b><?php echo $datos['Imei']; ?>
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