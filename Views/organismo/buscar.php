<div class="box-principal">

<?php
if ($datos['Organismo']== "") {
 ?>
<h3 class="titulo">El Numero ingresado no existe<hr></h3>
 <?php
}else{
?>
<h3 class="titulo">Listar Los Datos de los Organismo: <?php echo $datos['Organismo'] ; ?><hr></h3>
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Perfil de los Organismo <?php echo $datos['Organismo'] ; ?><b></b></h3>
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-md-9">
          <ul class="list-group">
            <li class="list-group-item">
              <b>Organismo: </b><?php echo $datos['ID_Organismo']; ?>
            </li>                          
            <li class="list-group-item">
              <b>Codigo del Organismo: </b><?php echo $datos['Organismo']; ?>
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