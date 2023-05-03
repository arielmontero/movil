<?php
if($_SESSION["autentica"] !== "SIP"){
?>
	<br>
	<h3 class="titulo"><a href="<?php echo URL;?>" class="btn btn-primary"><?php echo "INICIE SESIÓN"; ?></a></h3>

<?php 
}else{
	$us=$_SESSION["idUser"];
$per=$request->getControlador();
$res=$historial->ControlPermiso($us,$per);


if ($res== 1) {
	?>
<div class="box-principal">
	<h3 class="titulo">Historial</h3>
		<div class="panel panel-success">
			<div class="panel-heading">
				<table class="table table-striped table-hover">
				<!--	<td><h3 class="panel-title"><a href="<?php echo URL;?>historialsim/crear" class="btn btn-success">Crear Nuevo</a></h3></td> -->
					<td>
						<form class="form-inline my-2 my-lg-0" action="<?php echo URL;?>historialsim/buscar" method="POST">
				      <input class="form-control mr-sm-2" type="text" name="HistorialSim" placeholder="Historial">
				      <button class="btn btn-secondary my-2 my-sm-0"  type="submit">Buscar</button>
					</td>
			</table>
			</div>
			<div class="panel-body">
				<table class="table table-striped table-hover">
					<thead>
						<th>Entidad</th>
						<th>Comentario</th>		
						<th>Fecha</th>	
						<th>User_ID</th>	
						<th colspan="3">Action</th>
					</thead>
					<tbody>
					<?php while ($row = mysqli_fetch_array($datos)){ ?>
						<tr>
						<td  scope="row"> <?php echo $row['Entidad'];?></td>
						<td> <?php echo $row['Comentario'];?></td>
						<td> <?php echo $row['Fecha'];?></td>
						<td> <?php echo $row['User_ID'];?></td>
						<td>
						<a href="<?php echo URL;?>historial/ver/<?php echo $row['ID_Historial'];?>" class="btn btn-primary">Ver</a>
						<a href="<?php echo URL;?>historial/editar/<?php echo $row['ID_Historial'];?>" class="btn btn-primary">Editar</a>
						</td>
						</tr>
					<?php }	?>
					</tbody>
				</table>
			</div>
	    </div>
</div>
<?php 
	}
}
 ?>
