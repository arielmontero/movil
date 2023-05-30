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
<!-- <h3 class="titulo">Vista del User principal <?php echo $_SESSION["usuarioactual"]; ?></h3> -->
<div class="container mt-1 mb-1">
	<div class="text-xl-center">
		<h3> Permisos de usuario </h3>
	</div>
	<h3 class="panel-title"><a href="<?php echo URL;?>permiso/crear" class="btn btn-success mb-4">Crear Permiso</a></h3></td>
	<div class="container">
		<table id="example" class="display" style="width:100%">
			<thead>
				<th>User</th>
				<th>App</th>
				<th>Action</th>
			</thead>
			<tbody>
				<?php while ($row = mysqli_fetch_array($datos)){ ?>
				<tr>
					<td> <?php echo $row['user'];?></td>
					<td> <?php echo $row['app'];?></td>
					<td class="d-flex justify-content-center">
						<a href="<?php echo URL;?>permiso/ver/<?php echo $row['ID_Permiso'];?>"  class="btn btn-primary  "><i class="fa-solid fa-magnifying-glass"></i></a>
						<a href="<?php echo URL;?>permiso/editar/<?php echo $row['ID_Permiso'];?>" class="btn btn-success mx-2"><i class="fa-solid fa-pen"></i></a>
						<a href="<?php echo URL;?>permiso/eliminar/<?php echo $row['ID_Permiso'];?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>
<?php
}
}
?>