<?php 
	namespace Views;
	$template = new Template();
	class Template{
	public function __construct(){
	?>
	<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title> Direccion de Comunicaciones </title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<!-- start librerias y configuracion del datables -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
		<script src="https://kit.fontawesome.com/f0c97317d0.js" crossorigin="anonymous"></script>
		<!-- end librerias y configuracion del datables -->
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm p-2 mb-4 bg-body rounded">
			<div class="container-fluid d-flex">
				<a class="navbar-brand" href="<?php echo URL;?>"> <img width=150px heigth=36px src="<?php echo URL;?>Views/template/imagenes/logo-red3.png" alt=""> </a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-between px-3" id="navbarNavDropdown">
					<ul class="navbar-nav">
					<?php
						if ($_SESSION["estado"] == 1) {
							?>
						<li class="nav-item dropdown ">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Usuarios
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<li> <a class="dropdown-item" href="<?php echo URL;?>user"> Lista de Usuarios </a> 	</li>
								<li> <a class="dropdown-item" href="<?php echo URL;?>app"> Pantallas    </a> </li>
								<li> <a class="dropdown-item" href="<?php echo URL;?>permiso"> Permisos </a> </li>
							</ul>
						</li>
					<?php
					}
					?>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Entidades
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<li><a class="dropdown-item" href="<?php echo URL;?>organismo"> Organismos </a>	 </li>
								<li><a class="dropdown-item" href="<?php echo URL;?>area"> Areas		  	</a> </li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Equipos
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<li><a class="dropdown-item" href="<?php echo URL;?>equipo"> Listado de Equipos </a> </li>
								<li><a class="dropdown-item" href="<?php echo URL;?>sim"> N° Sim </a> 		 </li>
								<li><a class="dropdown-item" href="<?php echo URL;?>plan"> Planes </a> 	 </li>
							</ul> 
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Seguimiento
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<li><a class="dropdown-item" href="<?php echo URL;?>referencia"> Referencias </a>	</li>
								<li><a class="dropdown-item" href="<?php echo URL;?>historial">  Historial  </a>	</li>
							</ul>
						</li>
					</ul>
					<?php
					if($_SESSION["autentica"] == "SIP") {
					?>
					<div class="px-5">
						<ul class="navbar-nav">
							<li class="nav-item dropdown mx-4 d-flex">
							<img class="border border-primary rounded-circle" width=38px  src="<?php echo URL;?>Views/template/imagenes/people.svg" alt="">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#"><?php echo $_SESSION["usuarioactual"];?></a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
									<li><a class="dropdown-item" href="<?php echo URL;?>user/seguridad"><i class="fa-sharp fa-solid fa-shield-halved"></i>  Seguridad</a></li>
									<li><a class="dropdown-item" href="<?php echo URL;?>login/salir"><i class="fa-solid fa-right-from-bracket"></i>  Cerrar</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
		<?php				
		} 
			
			?>
			<?php
			}
				public function __destruct(){
			?>

			<footer class="navbar-fixed-bottom">
				todos los derechos reservados
			</footer>
		</body>
	</html>
<?php
}

}
?>
