<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<?php
if($_SESSION["autentica"] !== "SIP"){
?>
	<br>
	<h3 class="titulo"><a href="<?php echo URL;?>" class="btn btn-primary"><?php echo "INICIE SESIÓN"; ?></a></h3>


<?php 
}else{

$us=$_SESSION["idUser"];
$per=$request->getControlador();
$res=$linea->ControlPermiso($us,$per);
if ($res== 1) {
	?>
<div class="box-principal">
<h3 class="titulo">Linea    <!-- de  <?php echo $_SESSION["usuarioactual"]; ?> --></h3>
		<div class="panel panel-success">
			<div class="panel-heading">
					<table class="table table-striped table-hover">
					<td><h3 class="panel-title"><a href="<?php echo URL;?>linea/crear" class="btn btn-success">Crear Nuevo</a></h3></td>
					<td>
						<form class="form-inline my-2 my-lg-0" action="<?php echo URL;?>linea/buscar" method="POST">
							<input class="form-control mr-sm-2" id="myInput" type="text" placeholder="Buscar...">	
				    </form>
					</td>
			</table>
			</div>
			<div class="panel-body">
				
				<table class="table table-striped table-hover">
					<thead>
						<!-- <th> ID</th> -->
						<th>Linea</th>
						<th>Usuario</th>
						<th>Funcion</th>
						<th>Organismo_ID</th>
						<th>Area_ID</th>
						<th>Plan_ID</th>
						<th>Equipo_ID</th>
						<th>Fecha</th>
						<th>User_ID</th>
						<th colspan="3">Action</th>
					</thead>
					<tbody id="myTable">
<?php while ($row = mysqli_fetch_array($datos)){ ?>
						<tr>
					<!--	<td  scope="row"> <?php echo $row['ID_Linea'];?></td> -->

						<!--<td> <?php echo $row['Sim_ID'];?></td>-->
						<td> <?php echo $row['Usuario'];?></td>
						<td> <?php echo $row['Funcion'];?></td>
						<td> <?php echo $row['area'];?></td>
						<td> <?php echo $row['organismo'];?></td>
						<!--<td> <?php echo $row['Organismo_ID'];?></td>
						<td> <?php echo $row['Area_ID'];?></td>
						
						<td> <?php echo $row['Plan_ID'];?></td>
						<td> <?php echo $row['Equipo_ID'];?></td>
						<td> <?php echo $row['User_ID'];?></td>-->
						<td> <?php echo $row['plan'];?></td>
						<td> <?php echo $row['equipo'];?></td>
						<td> <?php echo $row['Fecha'];?></td>
						<td> <?php echo $row['user'];?></td><td> 
							<?php echo $row['numero'];?></td>
						
						<td>
						<a href="<?php echo URL;?>linea/ver/<?php echo $row['ID_Linea'];?>" class="btn btn-primary">Ver</a>
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
