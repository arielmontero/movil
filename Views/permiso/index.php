<?php
if($_SESSION["autentica"] !== "SIP"){
?>
	<br>
	<h3 class="titulo"><a href="<?php echo URL;?>" class="btn btn-primary"><?php echo "INICIE SESIÓN"; ?></a></h3>


<?php 
}else{

$us=$_SESSION["idUser"];
$per=$request->getControlador();
$res= $permiso->permitir($us,$per);


if ($res== 1) {

?>
<div class="box-principal">
<h3 class="titulo">Vista del User principal <?php echo $_SESSION["usuarioactual"]; ?></h3>
		<div class="panel panel-success">
			<div class="panel-heading">
					<table class="table table-striped table-hover">
					<td><h3 class="panel-title"><a href="<?php echo URL;?>permiso/crear" class="btn btn-success">Crear</a></h3></td>
					<td>
						<form class="form-inline my-2 my-lg-0" action="<?php echo URL;?>permiso/buscar" method="POST">
				      <input class="form-control mr-sm-2" type="text" name="User" placeholder="User">
				      <button class="btn btn-secondary my-2 my-sm-0"  type="submit">Buscar</button>
				    </form>
					</td>
			</table>
			</div>
			<div class="panel-body">
				<table class="table table-striped table-hover">
					<thead>
						<th>User</th>
						<th>App</th>
						<th colspan="3">Action</th>
					</thead>
					<tbody>
<?php while ($row = mysqli_fetch_array($datos)){ ?>
						<tr>
						<td> <?php echo $row['user'];?></td>
						<td> <?php echo $row['app'];?></td>
						<td>
						<a href="<?php echo URL;?>permiso/ver/<?php echo $row['ID_Permiso'];?>" class="btn btn-primary">Ver</a>
						<a href="<?php echo URL;?>permiso/editar/<?php echo $row['ID_Permiso'];?>" class="btn btn-primary">Editar</a>
						<a href="<?php echo URL;?>permiso/eliminar/<?php echo $row['ID_Permiso'];?>" class="btn btn-primary">Eliminar</a>
						</td>
						</tr>
	<?php } ?>
					</tbody>

				</table>
			</div>

	    </div>
</div>
<?php
}
}
?>