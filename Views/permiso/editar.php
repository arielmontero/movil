<?php 
$user= $permiso->listarUser();
$app= $permiso->listarApp();

?>
<div class="box-principal">
<h3 class="titulo">Editar User <?php echo $datos['User_ID'];?><hr></h3>
	<div class="panel panel-success">
	  <div class="panel-heading">
	    <h3 class="panel-title">Editar User <?php echo $datos['User_ID'];?></h3>
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-9">
	  			<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">

				    <div class="form-group">
				      <label for="inputEmail" class="control-label">User</label>
				       
				                  <label for="inputEmail" class="control-label"> (<b>User Actual: <?php echo $datos['user']; ?></b>)</label>
                                    <select name="User" class="form-control">
                                      <option value="<?php echo $datos['User_ID']; ?>"><?php echo $datos['user']; ?></option>
                                      <?php while($row = mysqli_fetch_array($user)){ ?>
                                        <option value="<?php echo $row['ID_User']; ?>"><?php echo $row['User']; ?></option>
                                      <?php } ?>
                                    </select>
					</div>
				    <div class="form-group">
				      <label for="inputEmail" class="control-label">App</label>
				       
				                   <label for="inputEmail" class="control-label"> (<b>App Actual: <?php echo $datos['app']; ?></b>)</label>
                                    <select name="App" class="form-control">
                                      <option value="<?php echo $datos['App_ID']; ?>"><?php echo $datos['app']; ?></option>
                                      <?php while($row = mysqli_fetch_array($app)){ ?>
                                        <option value="<?php echo $row['ID_App']; ?>"><?php echo $row['App']; ?></option>
                                      <?php } ?>
                                    </select>
					</div>



				    <input value="<?php echo $datos['ID_Permiso'];?>" name="id" type="hidden" required>
				    <div class="form-group">
				    	 <button type="submit" class="btn btn-success">Editar</button>
				    </div>
				</form>
	  		</div>
	  	</div>
	  </div>
	</div>
</div>