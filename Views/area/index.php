<?php
	if($_SESSION["autentica"] !== "SIP"){
?>
	<br>
	<h3 class="titulo"><a href="<?php echo URL;?>" class="btn btn-primary"><?php echo "INICIE SESIÓN"; ?></a></h3>
<?php 
	} else {
	$us=$_SESSION["idUser"];
	$per=$request->getControlador();
	$res=$area->ControlPermiso($us,$per);
	if ($res== 1) {
?>

<div class="container mt-1 mb-1">
		<div class="text-xl-center">
			<h3> Areas </h3>
		</div>
	<a href= "<?php echo URL;?>area/crear" class="btn btn-success mb-4"> Crear Nuevo </a>
	<div>
		<table id="example" class="display" style="width:100%">
            <thead>
				<tr>
					<th>Id</th>
                    <th>Area</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
				<?php while ($row = mysqli_fetch_array($datos)){ ?>
					<tr>
						<td  scope="row"> <?php echo $row['ID_Area'];?></td>
						<td> <?php echo $row['Area'];?></td>
						<td class="d-flex justify-content-center">
							<a href="<?php echo URL;?>area/ver/<?php echo $row['ID_Area'];?>" class="btn btn-primary"><i class="fa-solid fa-magnifying-glass"></i></a>
							<a href="<?php echo URL;?>area/editar/<?php echo $row['ID_Area'];?>" class="btn btn-success mx-2"><i class="fa-solid fa-pen"></i></a>
							<a href="<?php echo URL;?>area/eliminar/<?php echo $row['ID_Area'];?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
						</td>
					</tr>
				<?php } ?>
            </tbody>
        </table>    
	</div>
</div>
<?php 
}}
?>
