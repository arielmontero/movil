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
