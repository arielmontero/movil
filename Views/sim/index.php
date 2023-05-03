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
$res=$sim->ControlPermiso($us,$per);


if ($res== 1) {
	?>
<div class="box-principal">
	<h3 class="titulo">Linea</h3>
		<div class="panel panel-success">
			<div class="panel-heading">
				<table class="table table-striped table-hover">
					<td><h3 class="panel-title"><a href="<?php echo URL;?>sim/crear" class="btn btn-success">Crear Nuevo</a></h3></td>
					<td>
					<!--	<form class="form-inline my-2 my-lg-0" action="<?php echo URL;?>sim/buscar" method="POST">
				      <input class="form-control mr-sm-2" type="text" name="Sim" placeholder="Linea">
				      <button class="btn btn-secondary my-2 my-sm-0"  type="submit">Buscar</button>-->
				      		<form class="form-inline my-2 my-lg-0" action="" method="POST">
							<input class="form-control mr-sm-2" id="myInput" type="text" placeholder="Buscar...">	
				    </form>
				    </form>
					</td>
			</table>
			</div>
			<div class="panel-body">
				<table class="table table-striped table-hover">
					<thead>
						<th>Numero</th>
						<th>Imei</th>
						<th>Tipo</th>	
						<th>Estado</th>	
						<th>Referencia</th>	
						<th>Plan</th>	
						<th colspan="3">Action</th>
					</thead>
					<tbody id="myTable">
					<?php while ($row = mysqli_fetch_array($datos)){ ?>
						<tr>
						<td  scope="row"> <?php echo $row['Numero'];?></td>
						<td> <?php echo $row['Imei'];?></td>
						<td> <?php echo $row['Tipo'];?></td>
						<td> <?php echo $row['Estado'];?></td>
						<td> <?php echo $row['referencia'];?></td>
						<td> <?php echo $row['plan'];?></td>
						<td>
						<a href="<?php echo URL;?>sim/ver/<?php echo $row['ID_Sim'];?>" class="btn btn-primary">Ver</a>
						<a href="<?php echo URL;?>sim/editar/<?php echo $row['ID_Sim'];?>" class="btn btn-primary">Editar</a>
						<a href="<?php echo URL;?>sim/eliminar/<?php echo $row['ID_Sim'];?>" class="btn btn-danger">Eliminar</a>
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
