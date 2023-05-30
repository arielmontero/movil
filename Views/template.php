<?php 
	namespace Views;
	$template = new Template();
	class Template{
	public function __construct(){
?>
<?php
if($_SESSION["autentica"] !== "SIP"){
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class='bg-light'>
	<div class="container-fluid bg-light">
		<div class="container py-5 h-100">
			<div class="row d-flex justify-content-center align-items-center h-100">
				<div class="col col-xl-10">
					<div class="card shadow-lg bg-body" style="border-radius: 1rem; border: 0px">
						<div class="row g-0 ">
							<div class="col-md-6 col-lg-5 d-none d-md-block d-flex" >
								<img src="<?php echo URL;?>Views/template/img/phone2.jpg" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; height:100%"/>
							</div>
							<div class="col-md-6 col-lg-7 d-flex align-items-center">
								<div class="card-body p-4 p-lg-5 text-black">
									<form class="form-signin" action="<?php echo URL;?>login/login" method="POST">
										<div class="d-flex align-items-center justify-content-center mb-4 pb-1">
											<img  width=300px heigth=72px src="<?php echo URL;?>Views/template/img/logo-red3.png" alt="Logo-rioja">
										</div>
										<h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;"> CRM Telefonia Movil </h5>
										<div class="form-outline mb-4">
											<input type="text" id="inputEmail" name="User" class="form-control form-control-lg" />
											<label class="form-label" for="inputEmail">Usuario</label>
										</div>
										<div class="form-outline mb-4">
											<input type="password" id="inputPassword" name="Clave" class="form-control form-control-lg" />
											<label class="form-label" for="inputPassword"> Contraseña </label>
										</div>
										<div class="pt-1 mb-4">
											<button class="btn btn-primary btn-lg btn-block" type="submit"> Ingresar </button>
										</div>
										<p class="mb-5 pb-lg-2" style="color: #393f81;"> ¿Tienes algun problema? <a href="#!" style="color: #393f81;">Soporte Tecnico.</a></p>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php 
} else {
?>

<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title> Direccion de Comunicaciones </title>
		<script src="https://kit.fontawesome.com/f0c97317d0.js" crossorigin="anonymous"></script>
		<!-- Boostrap -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
		<!-- Boostrap -->
		<!-- Data Table -->
		<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
		<!-- Data Table -->
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm p-2 mb-4 bg-body rounded">
			<div class="container-fluid d-flex">
				<a class="navbar-brand" href="<?php echo URL;?>consulta"> <img width=150px heigth=36px src="<?php echo URL;?>Views/template/img/logo-red3.png" alt=""> </a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-between px-3" id="navbarNavDropdown">
					<ul class="navbar-nav">
					<?php
						{
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
							<img class="border border-primary rounded-circle" width=38px  src="<?php echo URL;?>Views/template/img/people.svg" alt="">
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
			// public function __destruct(){
		?>
		<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
		<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
		<script>$(document).ready(function () { $('#example').DataTable();});</script>
	</body>
</html>
<?php
}}
?>
