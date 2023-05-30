<?php
if($_SESSION["autentica"] !== "SIP"){
?>
	<br>
	<h3 class="titulo"><a href="<?php echo URL;?>" class="btn btn-primary"><?php echo "INICIE SESIÓN"; ?></a></h3>

<?php 
} else {
	$us=$_SESSION["idUser"];
$per=$request->getControlador();
$res=$organismo->ControlPermiso($us,$per);


if ($res== 1) {
?>
<div class="container mt-1 mb-1">
	<div class="text-xl-center">
		<h3> Organismos </h3>
	</div>
	<h3 class="panel-title"><a href="<?php echo URL;?>organismo/crear" class="btn btn-success mb-4">Crear Nuevo</a></h3>
	<div class="container">
		<table id="example" class="display" style="width:100%">
			<thead>
				<th>Organismo</th>	
				<th>Action</th>
			</thead>
			<tbody>
				<?php while ($row = mysqli_fetch_array($datos)){ ?>
					<tr>
						<td scope="row"> <?php echo $row['Organismo'];?></td>
						<td class="d-flex justify-content-center">
							<a href="<?php echo URL;?>organismo/ver/<?php echo $row['ID_Organismo'];?>" class="btn btn-primary  "><i class="fa-solid fa-magnifying-glass"></i></a>
							<a href="<?php echo URL;?>organismo/editar/<?php echo $row['ID_Organismo'];?>" class="btn btn-success mx-2"><i class="fa-solid fa-pen"></i></a>
							<a href="<?php echo URL;?>organismo/eliminar/<?php echo $row['ID_Organismo'];?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
						</td>
					</tr>
				<?php }	?>
			</tbody>
		</table>
	</div>
</div>
<?php 
	}
}
?>
