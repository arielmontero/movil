<div class="box-principal">
<h3 class="titulo">Listar Los Datos de la Sim: <?php echo $datos['Numero']; ?><hr></h3>
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Sim <?php echo $datos['Imei']; ?><b></b></h3>
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-md-9">
          <ul class="list-group">
            <li class="list-group-item">
              <b>ID: </b><?php echo $datos['ID_Sim']; ?>
            </li>            
            <li class="list-group-item">
              <b>Numero: </b><?php echo $datos['Numero']; ?>
            </li>               
            <li class="list-group-item">
              <b>Imei: </b><?php echo $datos['Imei']; ?>
            </li>            
            <li class="list-group-item">
              <b>Tipo: </b><?php echo $datos['Tipo']; ?>
            </li>           
             <li class="list-group-item">
              <b>Estado: </b><?php echo $datos['Estado']; ?>
            </li>              
            <li class="list-group-item">
              <b>Referencia_ID: </b><?php echo $datos['referencia']; ?>
            </li>              
            <li class="list-group-item">
              <b>Plan_ID: </b><?php echo $datos['plan']; ?>
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