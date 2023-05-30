<?php
if($_SESSION["autentica"] !== "SIP"){
?>
	<br>
	<h3 class="titulo"><a href="<?php echo URL;?>" class="btn btn-primary"><?php echo "INICIE SESIÓN"; ?></a></h3>
<?php 
}else{
	$us=$_SESSION["idUser"];
$per=$request->getControlador();
$res=$user->ControlPermiso($us,$per);

if ($res== 1) {

?>

<div class="container mb-1 mt-1">
	<div class="text-xl-center">
		<h3> Administracion de Usuarios </h3>
	</div>
	<button href="#" class="btn btn-success mb-4" data-bs-toggle="modal" data-bs-target="#crearModal"> Crear Nuevo </button>
	<div class="container">
		<table id="example" class="display" style="width:100%">
			<thead>
				<th>ID</th>
				<th>Usuario</th>
				<th>Clave</th>
				<th>Estado</th>
				<th>Action</th>
			</thead>
			<tbody>
				<?php while ($row = mysqli_fetch_array($datos)){ ?>
				<tr>
					<td  scope="row"> <?php echo $row['ID_User'];?></td>
					<td> <?php echo $row['User'];?></td>
					<td> <?php echo $row['Clave'];?></td>
					<td class="text-center"> <?php echo $row['Estado'];?></td>
					<td class="">
						<!-- <button href="#" class="btn btn-primary mx-1" data-bs-toggle="modal" data-bs-target="#verModal"><i class="fa-solid fa-magnifying-glass"></i></button> -->
						<a href="<?php echo URL;?>user/ver/<?php echo $row['ID_User'];?>" class="btn btn-primary mx-1"><i class="fa-solid fa-magnifying-glass"></i></a>
						<!-- <button href="#"  class="btn btn-success mx-1" data-bs-toggle="modal" data-bs-target="#editModal"><i class="fa-solid fa-pen"></i></button> -->
						<a href="<?php echo URL;?>user/editar/<?php echo $row['ID_User'];?>"  class="btn btn-success mx-1"><i class="fa-solid fa-pen"></i></a>
						<a href="<?php echo URL;?>user/eliminar/<?php echo $row['ID_User'];?>" class="btn btn-danger mx-1"><i class="fa-solid fa-trash"></i></a>
						<a href="<?php echo URL;?>user/blanqueo/<?php echo $row['ID_User'];?>" class="btn btn-warning mx-1">Blanquear</a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>


<?php include 'modals.php'; ?>

<?php 
	}
}
?>
