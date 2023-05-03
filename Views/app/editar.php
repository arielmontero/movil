<div class="box-principal">
<h3 class="titulo">Editar App <?php echo $datos['App'];?><hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Editar App <?php echo $datos['App'];?></h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-9">
	  			<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">App</label>
				        <input class="form-control" value="<?php echo $datos['App'];?>" name="App" type="text" required>
				    </div>
				    <input value="<?php echo $datos['ID_App'];?>" name="id" type="hidden" required>
				    <div class="form-group">
				    	 <button type="submit" class="btn btn-success">Editar</button>
				    </div>
				</form>
	  		</div>
	  	</div>
	  </div>
	</div>
</div>