<?php
if($_SESSION["autentica"] !== "SIP"){
?>
	<br>
	<h3 class="titulo"><a href="<?php echo URL;?>" class="btn btn-primary"><?php echo "INICIE SESIÓN"; ?></a></h3>


<?php 
}else{

$us=$_SESSION["idUser"];
$per=$request->getControlador();
$res=$referencia->ControlPermiso($us,$per);
if ($res== 1) {
	?>
<div class="box-principal">
<h3 class="titulo">Vista Referencia de  <?php echo $_SESSION["usuarioactual"]; ?></h3>
		<div class="panel panel-success">
			<div class="panel-heading">
					<table class="table table-striped table-hover">
					<td><h3 class="panel-title"><a href="<?php echo URL;?>referencia/crear" class="btn btn-success">Crear Nuevo</a></h3></td>
					<td>
						<form class="form-inline my-2 my-lg-0" action="<?php echo URL;?>referencia/buscar" method="POST">
				      <input class="form-control mr-sm-2" type="text" name="Referencia" placeholder="Referencia">
				      <button class="btn btn-secondary my-2 my-sm-0"  type="submit">Buscar</button>
				    </form>
					</td>
			</table>
			</div>
			<div class="panel-body">
				<table class="table table-striped table-hover">
					<thead>
						<!-- <th> ID</th> -->
						<th>Cuenta</th>
						<th>Referencia</th>
						<th>Periodo</th>
						<th colspan="3">Action</th>
					</thead>
					<tbody>
<?php while ($row = mysqli_fetch_array($datos)){ ?>
						<tr>
					<!--	<td  scope="row"> <?php echo $row['ID_Referencia'];?></td> -->
						<td> <?php echo $row['Cuenta'];?></td>
						<td> <?php echo $row['Referencia'];?></td>
						<td> <?php echo $row['Periodo'];?></td>
						<td>
						<a href="<?php echo URL;?>referencia/ver/<?php echo $row['ID_Referencia'];?>" class="btn btn-primary">Ver</a>
						<a href="<?php echo URL;?>referencia/editar/<?php echo $row['ID_Referencia'];?>" class="btn btn-primary">Editar</a>
						<a href="<?php echo URL;?>referencia/eliminar/<?php echo $row['ID_Referencia'];?>" class="btn btn-primary">Eliminar</a>
						</td>
						</tr>
	<?php } 	?>
					</tbody>

				</table>
			</div>

	    </div>
</div>
<?php 
	}
}
 ?>
