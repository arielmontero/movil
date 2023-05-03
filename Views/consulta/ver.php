<div class="box-principal">
<h3 class="titulo">Listar Los Datos de la Plan: <?php echo $datos['Nombre']; ?><hr></h3>
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Plan <?php echo $datos['Nombre']; ?><b></b></h3>
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-md-9">
          <ul class="list-group">
            <li class="list-group-item">
              <b>ID: </b><?php echo $datos['ID_Plan']; ?>
            </li>            
            <li class="list-group-item">
              <b>Nombre: </b><?php echo $datos['Nombre']; ?>
            </li>            
            <li class="list-group-item">
              <b>Minutos: </b><?php echo $datos['Minutos']; ?>
            </li>            
            <li class="list-group-item">
              <b>Datos: </b><?php echo $datos['Datos']; ?>
            </li>           
             <li class="list-group-item">
              <b>Sms: </b><?php echo $datos['Sms']; ?>
            </li>             
            <li class="list-group-item">
              <b>Cobertura: </b><?php echo $datos['Cobertura']; ?>
            </li>            
            <li class="list-group-item">
              <b>Costo: </b><?php echo $datos['Costo']; ?>
            </li>           
             <li class="list-group-item">
              <b>Referencia: </b><?php echo $datos['Referencia_ID']; ?>
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