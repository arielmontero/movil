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
<div class="container">
	<div class="text-xl-center">
		<h3> Historial </h3>
	</div>
	<!--	<td><h3 class="panel-title"><a href="<?php echo URL;?>historialsim/crear" class="btn btn-success mb-4">Crear Nuevo</a></h3></td> -->
	<div class="container">
		<table id="example" class="display" style="width:100%">
			<thead>
				<th>Entidad</th>
				<th>Comentario</th>		
				<th>Fecha</th>	
				<th>User_ID</th>	
				<th>Action</th>
			</thead>
			<tbody>
				<?php while ($row = mysqli_fetch_array($datos)){ ?>
					<tr>
						<td  scope="row"> <?php echo $row['Entidad'];?></td>
						<td> <?php echo $row['Comentario'];?></td>
						<td> <?php echo $row['Fecha'];?></td>
						<td> <?php echo $row['User_ID'];?></td>
						<td >
							<a href="<?php echo URL;?>historial/ver/<?php echo $row['ID_Historial'];?>" class="btn btn-primary"><i class="fa-solid fa-magnifying-glass"></i></a>
							<a href="<?php echo URL;?>historial/editar/<?php echo $row['ID_Historial'];?>" class="btn btn-success mx-2"><i class="fa-solid fa-pen"></i></a>
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
