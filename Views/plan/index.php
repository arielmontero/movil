<?php
if($_SESSION["autentica"] !== "SIP"){
?>
	<br>
	<h3 class="titulo"><a href="<?php echo URL;?>" class="btn btn-primary"><?php echo "INICIE SESIÓN"; ?></a></h3>

<?php 
}else{
	$us=$_SESSION["idUser"];
$per=$request->getControlador();
$res=$plan->ControlPermiso($us,$per);


if ($res== 1) {
	?>
<div class="container"> 
	<div class="text-xl-center">
		<h3> Planes </h3>
	</div>
	<h3 class="panel-title"><a href="<?php echo URL;?>plan/crear" class="btn btn-success mb-4">Crear Nuevo</a></h3>
	<div class="container">
		<table id="example" class="display" style="width:100%">
			<thead>
				<th>Nombre</th>
				<th>Minutos</th>
				<th>Datos</th>	
				<th>Sms</th>	
				<th>Cobertura</th>	
				<th>Costo</th>		
				<th>Action</th>
			</thead>
			<tbody>
				<?php while ($row = mysqli_fetch_array($datos)){ ?>
					<tr>
						<td  scope="row"> <?php echo $row['Nombre'];?></td>
						<td> <?php echo $row['Minutos'];?></td>
						<td> <?php echo $row['Datos'] . " GB";?></td>
						<td> <?php echo $row['Sms'];?></td>
						<td> <?php echo $row['Cobertura'];?></td>
						<td> <?php echo $row['Costo'];?></td>
						<td class="d-flex justify-content-center">
							<a href="<?php echo URL;?>plan/ver/<?php echo $row['ID_Plan'];?>"class="btn btn-primary  "><i class="fa-solid fa-magnifying-glass"></i></a>
							<a href="<?php echo URL;?>plan/editar/<?php echo $row['ID_Plan'];?>"  class="btn btn-success mx-2"><i class="fa-solid fa-pen"></i></a>
							<a href="<?php echo URL;?>plan/eliminar/<?php echo $row['ID_Plan'];?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
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
