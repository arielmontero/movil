<?php
if($_SESSION["autentica"] !== "SIP"){
?>
	<br>
	<h3 class="titulo"><a href="<?php echo URL;?>" class="btn btn-primary"><?php echo "INICIE SESIÓN"; ?></a></h3>

<?php 
}else{
	$us=$_SESSION["idUser"];
$per=$request->getControlador();
$res=$equipo->ControlPermiso($us,$per);


if ($res== 1) {
	?>
<div class="box-principal">
		<div class="panel panel-success">
			<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo URL;?>"><i class="fas fa-home" aria-hidden="true"></i> Home</a></li>
			<li class="breadcrumb-item"><a href="<?php echo URL;?>equipo">Equipo</a></li>
			<li class="breadcrumb-item active" aria-current="page">index</li>
		</ol>
		<div class="card">  
		<div class="card-header" style="background-color: rgba(68, 138, 255);">
			<h4 class="card-title" style="color: rgba(255,255,255,0.9);"><b>Equipo</b></h4>    
		</div>

		<nav aria-label="breadcrumb">  
		<div class="card">  
		<div class="card-body">
		<h3 class="panel-title"><a href="<?php echo URL;?>equipo/crear" class="btn btn-success">Crear Nuevo</a></h3>
		</div>
		</div>
		</nav>  
			<div class="panel-body">
				<table id="id_table" class="table table-striped table-hover">
					<thead>
						<th>Marca</th>
						<th>Tipo</th>	
						<th>Modelo</th>	
						<th>Imei</th>	
						<th>Estado</th>	
						<th>Fecha</th>	
						<th>Action</th>
					</thead>
					<tbody>
					<?php while ($row = mysqli_fetch_array($datos)){ ?>
						<tr>
						<td  scope="row"> <?php echo $row['Marca'];?></td>
						<td> <?php echo $row['Tipo'];?></td>
						<td> <?php echo $row['Modelo'];?></td>
						<td> <?php echo $row['Imei'];?></td>
						<td> <?php echo $row['Estado'];?></td>
						<td> <?php echo $row['Fecha'];?></td>
						<td>
						<a href="<?php echo URL;?>equipo/ver/<?php echo $row['ID_Equipo'];?>" class="btn btn-primary">Ver</a>
						<a href="<?php echo URL;?>equipo/editar/<?php echo $row['ID_Equipo'];?>" class="btn btn-primary">Editar</a>
						<a href="<?php echo URL;?>equipo/eliminar/<?php echo $row['ID_Equipo'];?>" class="btn btn-danger">Eliminar</a>
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
