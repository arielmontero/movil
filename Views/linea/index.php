 <!-- start librerias y configuracion del datables -->
<script language="JavaScript" type="text/javascript" src="<?php echo URL;?>Views/template/datatable/jQuery-3.6.0/jQuery-3.6.0/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo URL;?>Views/template/datatable/DataTables-1.11.5/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo URL;?>Views/template/datatable/datatables.min.css">
<script language="JavaScript" type="text/javascript" src="<?php echo URL;?>Views/template/datatable/datatables.min.js"></script> 
<script>
$(document).ready(function() {
    $('#id_table').DataTable({
        language: {
            search: "Buscar:",
            lengthMenu: "Mostrar _MENU_ registros",
            info: "Mostrando _START_ a _END_ de _TOTAL_ entradas",
            infoEmpty: "Mostrando registros del 0 al 0 de un total de 0 registros",
            infoFiltered: "(filtrado de un total de _MAX_ registros)",
            loadingRecords: "Cargando...",
            zeroRecords: "No se encontraron registros",
            emptyTable: "No hay datos disponibles en la tabla",
            paginate: {
                first: "Primero",
                previous: "Anterior",
                next: "Siguiente",
                last: "Último"
            },
            aria: {
                sortAscending: ": Ordenar columna de forma ascendente",
                sortDescending: ": Ordenar columna de forma descendente"
            }
        },
        lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "Todos"]],
        pageLength: 10,
        order: [[0, 'desc']],
        responsive: true,
        columnDefs: [
            { targets: 'no-sort', orderable: false }
        ],
        dom: "<'row'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6'f>>" +
             "<'row'<'col-sm-12'tr>>" +
             "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
        buttons: [
            {
                extend: 'excelHtml5',
                text: '<i class="fa fa-file-excel-o"></i> Exportar a Excel',
                titleAttr: 'Exportar a Excel',
                title: null,
                filename: function() {
                    var d = new Date();
                    return 'Reporte_' + d.getDate() + '-' + (d.getMonth()+1) + '-' + d.getFullYear();
                },
                exportOptions: {
                    columns: ':visible:not(.no-export)'
                }
            }
        ]
	
    });
});
</script>
<!-- end librerias y configuracion del datables -->

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

<div class="panel panel-success">

		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo URL;?>"><i class="fas fa-home" aria-hidden="true"></i> Home</a></li>
			<li class="breadcrumb-item"><a href="<?php echo URL;?>linea">Linea</a></li>
			<li class="breadcrumb-item active" aria-current="page">index</li>
		</ol>
		<div class="card">  
		<div class="card-header" style="background-color: rgba(68, 138, 255);">
			<h4 class="card-title" style="color: rgba(255,255,255,0.9);"><b>Lineas</b></h4>    
		</div>

		<nav aria-label="breadcrumb">  
		<div class="card">  
		<div class="card-body">
		<h3 class="panel-title"><a href="<?php echo URL;?>linea/crear" class="btn btn-success">Crear Nuevo</a></h3>
		</div>
		</div>
		</nav>    

			<div class="panel-body">
				<table id="id_table" class="table table-striped table-hover">
							<thead>

								<th>Linea</th>
								<th>Usuario</th>
								<th>Funcion</th>
								<th>Organismo</th>
								<th>Area</th>
								<th>Fecha</th>
		
								<th>Action</th>
							</thead>
							<tbody>
							<?php while ($row = mysqli_fetch_array($datos)){ ?>
								<tr>
								<td><?php echo $row['numero'];?></td>
								<td> <?php echo $row['Usuario'];?></td>
								<td> <?php echo $row['Funcion'];?></td>
								<td> <?php echo $row['organismo'];?></td>
								<td> <?php echo $row['area'];?></td>
								<td> <?php echo $row['Fecha'];?></td>
								<td>
								<a href="<?php echo URL;?>linea/ver/<?php echo $row['ID_Linea'];?>" class="btn btn-primary">Ver</a>
								</td>
								</tr>
							<?php } ?>
							</tbody>

				</table>
			</div>

	    </div>
</div>
<?php 
	}
}
 ?>
