<div class="box-principal">
<h3 class="titulo">Listar La Referencia de : <?php echo $datos['Referencia']; ?><hr></h3>
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Referencia <?php echo $datos['Referencia']; ?><b></b></h3>
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-md-9">
          <ul class="list-group">
            <li class="list-group-item">
              <b>Numero: </b><?php echo $datos['Cuenta']; ?>
            </li>           
             <li class="list-group-item">
              <b>Numero: </b><?php echo $datos['Referencia']; ?>
            </li>
            <li class="list-group-item">
              <b>Periodo: </b><?php echo $datos['Periodo']; ?>
            </li>                        
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>