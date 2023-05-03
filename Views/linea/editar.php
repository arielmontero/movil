<?php 
$area = $linea->listararea();
$organismo = $linea->listarorganismo();

?>
<div class="box-principal">
<h3 class="titulo">Editar Usuario <?php echo $datos['Usuario'];?><hr></h3>
	<div class="panel panel-success">
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-9">
	  			<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">

    <div class="col-sm-5">
      <label for="inputEmail" class="control-label"> (<b>Usuario Actual: <?php echo $datos['Usuario']; ?></b>)</label>
        <input class="form-control" value="<?php echo $datos['Usuario'];?>" name="Usuario" type="text" required>
    </div>
 
    <div class="col-sm-5">
      <label for="inputEmail" class="control-label"> (<b>Funcion Actual : <?php echo $datos['Funcion']; ?></b>)</label>
       <input class="form-control" value="<?php echo $datos['Funcion'];?>" name="Funcion" type="text" required>
    </div>	

	<div class="col-sm-5">
      <label for="inputEmail" class="control-label"> (<b>Area Actual: <?php echo $datos['area']; ?></b>)</label>
      <select name="Area" class="form-control">
      	<option value="<?php echo $datos['Area_ID']; ?>"><?php echo $datos['Area']; ?></option>
      	<?php while($row = mysqli_fetch_array($area)){ ?>
      		<option value="<?php echo $row['ID_Area']; ?>"><?php echo $row['Area']; ?></option>
      	<?php } ?>
      </select>
    </div>   

	<div class="col-sm-5">
      <label for="inputEmail" class="control-label"> (<b>Locador Actual: <?php echo $datos['organismo']; ?></b>)</label>
      <select name="Organismo" class="form-control">
      	<option value="<?php echo $datos['Organismo_ID']; ?>"><?php echo $datos['Organismo']; ?></option>
      	<?php while($row = mysqli_fetch_array($organismo)){ ?>
      		<option value="<?php echo $row['ID_Organismo']; ?>"><?php echo $row['Organismo']; ?></option>
      	<?php } ?>
      </select>
    </div>

                <div class="form-group">
              <label for="inputEmail" class="control-label">Comentario</label>
                <textarea class="form-control" name="Comentario" cols="40" rows="5" required placeholder="Describir la Causa de la Modificacion!"></textarea>
            </div>
				    <input value="<?php echo $datos['ID_Linea'];?>" name="id" type="hidden" required>
            <input value="<?php echo $_SESSION["usuarioactual"];?>" name="user" type="hidden" required>
				    <div class="form-group">
				    	 <button type="submit" class="btn btn-success">Editar</button>
				    </div>
				</form>
	  		</div>
	  	</div>
	  </div>
	</div>
</div>