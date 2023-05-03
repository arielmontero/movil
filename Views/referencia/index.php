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
		<div class="panel panel-success">

			<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo URL;?>"><i class="fas fa-home" aria-hidden="true"></i> Home</a></li>
			<li class="breadcrumb-item"><a href="<?php echo URL;?>referencia">Referencia</a></li>
			<li class="breadcrumb-item active" aria-current="page">index</li>
		</ol>
		<div class="card">  
		<div class="card-header" style="background-color: rgba(68, 138, 255);">
			<h4 class="card-title" style="color: rgba(255,255,255,0.9);"><b>Referencia</b></h4>    
		</div>

		<nav aria-label="breadcrumb">  
		<div class="card">  
		<div class="card-body">
		<h3 class="panel-title"><a href="<?php echo URL;?>referencia/crear" class="btn btn-success">Crear Nuevo</a></h3>
		</div>
		</div>
		</nav> 
			<div class="panel-body">
				<table id="id_table" class="table table-striped table-hover">
					<thead>
						<!-- <th> ID</th> -->
						<th>Cuenta</th>
						<th>Referencia</th>
						<th>Periodo</th>
						<th>Action</th>
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
						<a href="<?php echo URL;?>referencia/eliminar/<?php echo $row['ID_Referencia'];?>" class="btn btn-danger">Eliminar</a>
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
