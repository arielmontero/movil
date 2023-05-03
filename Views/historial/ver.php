<div class="box-principal">
<h3 class="titulo">Listar Los Datos de la Historial: <?php echo $datos['Entidad']; ?><hr></h3>
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Historial <?php echo $datos['Entidad']; ?><b></b></h3>
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-md-9">
          <ul class="list-group">
            <li class="list-group-item">
              <b>ID: </b><?php echo $datos['ID_Historial']; ?>
            </li>            
            <li class="list-group-item">
              <b>Entidad: </b><?php echo $datos['Entidad']; ?>
            </li>            
             <li class="list-group-item">
              <b>Comentario: </b><?php echo $datos['Comentario']; ?>
            </li>                                 
            <li class="list-group-item">
              <b>Fecha: </b><?php echo $datos['Fecha']; ?>
            </li>            
            <li class="list-group-item">
              <b>User_ID: </b><?php echo $datos['User_ID']; ?>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>