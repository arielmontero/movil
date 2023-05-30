<div class="box-principal">

<?php
if ($datos['Area']== "") {
?>
<h3 class="titulo">La Area ingresada no existe<hr></h3>
<?php

}else{

?>
  <div class="container">
    <h3 class="titulo">gilada Listar Los Datos de la Area: <?php echo $datos['Area']; ?><hr></h3>
      <div class="row">
        <div class="col-md-9">
          <ul class="list-group">
            <li class="list-group-item">
              <b>Area: </b><?php echo $datos['Area']; ?>
            </li>                  
          </ul>
        </div>
      </div>
  </div>
</div>
<?php
}
?>