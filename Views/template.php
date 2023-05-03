<?php namespace Views;
	$template = new Template();
	class Template{
		public function __construct(){
?>
	<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Direccion de Comunicaciones</title>
		<link rel="stylesheet" type="text/css" href="<?php echo URL;?>Views/template/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="<?php echo URL;?>Views/template/css/general.css">
    	<link rel="stylesheet" href="<?php echo URL;?>Views/template/css/apprise.css"> 




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

	</head>
	<body>
		<nav id="menu_gral" class="navbar navbar-expand-lg navbar-dark bg-primary">
			<div class="navbar-header">
				<!-- <a class="navbar-brand" href="<?php echo URL;?>">CGP <span class="sr-only">(current)</span></a> -->
				<a class="navbar-brand" href="<?php echo URL;?>"> <img width=150px heigth=36px src="<?php echo URL;?>Views/template/imagenes/logo-red.png" alt=""> </a>
			</div>
			<div class="collapse navbar-collapse" id="navbarColor01">
				<ul class="navbar-nav mr-auto">
					<!--
					<li class="nav-item active">
						<a class="nav-link" href="<?php echo URL;?>">Inicio <span class="sr-only">(current)</span></a>
					</li>	
-->












<?php
if ($_SESSION["estado"] == 1) {
?>
		<li class="nav-item active">
						<a class="nav-link" href="<?php echo URL;?>user">Usuarios</a>
					</li>
		<li class="nav-item active">
						<a class="nav-link" href="<?php echo URL;?>app">Pantallas</a>
		</li>
		<li class="nav-item active">
			<a class="nav-link" href="<?php echo URL;?>permiso">Permisos</a>
		</li>

<?php
}
?>
		<li class="nav-item active">
			<a class="nav-link" href="<?php echo URL;?>organismo">Organismo</a>
		</li>		
		<li class="nav-item active">
			<a class="nav-link" href="<?php echo URL;?>area">Area</a>
		</li>		
		<li class="nav-item active">
			<a class="nav-link" href="<?php echo URL;?>historial">Historial</a>
		</li>		
		<li class="nav-item active">
			<a class="nav-link" href="<?php echo URL;?>referencia">Referencia</a>
		</li>		
		<li class="nav-item active">
			<a class="nav-link" href="<?php echo URL;?>equipo">Equipo</a>
		</li>

		<li class="nav-item active">
			<a class="nav-link" href="<?php echo URL;?>sim">Sim</a>
		</li>	

		<li class="nav-item active">
			<a class="nav-link" href="<?php echo URL;?>plan">Plan</a>
		</li>	
	
			
		<li class="nav-item active">
			<a class="nav-link" href="<?php echo URL;?>linea">Linea</a>
		</li>		
		<li class="nav-item active">
			<a class="nav-link" href="<?php echo URL;?>consulta">Datos</a>
		</li>		

</ul>
				<?php
if($_SESSION["autentica"] == "SIP"){
?>
				<ul class="nav navbar-nav navbar-right">
							<li><a href="#">Usuario: <?php echo $_SESSION["usuarioactual"];?></a>
					        <ul>
						        <li><a href="<?php echo URL;?>user/seguridad">Seguridad</a></li>
					      
						        <li><a href="<?php echo URL;?>login/salir">Cerrar</a></li>
					        </ul>
					    </li>
			    </ul>
			</div>
		</nav>
<?php				
		}else{
?>
				<ul class="nav navbar-nav navbar-right">
							<li><a href="<?php echo URL;?>"><?php echo "INICIE SESIÓN";?></a></li>
			    </ul>
			</div>
		</nav>





<?php		}
		
?>


<?php				
		}
		public function __destruct(){
?>
<footer class="navbar-fixed-bottom">
	todos los derechos reservados<br>
</footer>
	<!-- <script src="//code.jquery.com/jquery-1.11.3.min.js"></script> -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
	<script src="<?php echo URL; ?>Views/template/js/bootstrap.js"></script> 
	</body>
	</html>
<?php
		}

}
?>
