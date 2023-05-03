<div class="box-principal">

<?php
if ($datos['Locadores']== "") {
 ?>
<h3 class="titulo">El Numero ingresado no existe<hr></h3>
 <?php
}else{
?>
<h3 class="titulo">Listar Los Datos de los Locadores: <?php echo $datos['Locadores'] ; ?><hr></h3>
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Perfil de los Locadores <?php echo $datos['Locadores'] ; ?><b></b></h3>
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-md-9">
          <ul class="list-group">
            <li class="list-group-item">
              <b>Locadores: </b><?php echo $datos['ID_Locadores']; ?>
            </li>                
            <li class="list-group-item">
              <b>Entes: </b><?php echo $datos['Entes']; ?>
            </li>            
            <li class="list-group-item">
              <b>Codigo del Locadores: </b><?php echo $datos['Locadores']; ?>
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