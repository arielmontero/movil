<?php
if($_SESSION["autentica"] !== "SIP"){
?>
	<br>
	<h3 class="titulo"><a href="<?php echo URL;?>" class="btn btn-primary"><?php echo "INICIE SESIÓN"; ?></a></h3>

<?php 
}else{
	$us=$_SESSION["idUser"];
$per=$request->getControlador();
$res=$sim->ControlPermiso($us,$per);


if ($res== 1) {
	?>
<div class="container">
	<div class="text-xl-center">
		<h3> Numeros de Sim </h3>
	</div>
	<h3 class="panel-title"><a href="<?php echo URL;?>sim/crear" class="btn btn-success mb-4"> Crear Nuevo </a></h3>
	<div class="container">
		<table id="example" class="display" style="width:100%">
			<thead>
				<th>Numero</th>
				<th>Imei</th>
				<th>Tipo</th>	
				<th>Estado</th>	
				<th>Referencia</th>	
				<th>Plan</th>	
				<th>Action</th>
			</thead>
			<tbody>
			<?php while ($row = mysqli_fetch_array($datos)){ ?>
				<tr>
					<td  scope="row"> <?php echo $row['Numero'];?></td>
					<td> <?php echo $row['Imei'];?></td>
					<td> <?php echo $row['Tipo'];?></td>
					<td> <?php echo $row['Estado'];?></td>
					<td> <?php echo $row['referencia'];?></td>
					<td> <?php echo $row['plan'];?></td>
					<td class="d-flex justify-content-center">
						<a href="<?php echo URL;?>sim/ver/<?php echo $row['ID_Sim'];?>" class="btn btn-primary  "><i class="fa-solid fa-magnifying-glass"></i></a>
						<a href="<?php echo URL;?>sim/editar/<?php echo $row['ID_Sim'];?>" class="btn btn-success mx-2"><i class="fa-solid fa-pen"></i></a>
						<a href="<?php echo URL;?>sim/eliminar/<?php echo $row['ID_Sim'];?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
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
