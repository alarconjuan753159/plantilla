<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Prueba Plantilla</title>
		<meta name="description" content="SARECA">
		<meta name="keywords" content="inventario, equipos, sareca">
		<meta name="author" content="JuMAnY">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/general.css">
	</head>
	<body>
		<div id="wrap">
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">SARECA</a>
					</div>

					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li><a href="index.php">Inicio</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Reparación <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">Registro Equipo Dañado</a></li>
									<li><a href="#">Reparación de Equipo</a></li>
									<li><a href="#">Consulta Equipos Dañados</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Prestamo <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">Registro Equipo AudioVisual</a></li>
									<li><a href="#">Registrar Usuario Prestamo</a></li>
									<li class="divider"></li>
									<li><a href="#">Registrar Prestamo</a></li>
									<li><a href="#">Devolución</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Reportes <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">En Construnción</a></li>
									<li><a href="#">En Construnción</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Sistema <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">Respaldar Datos</a></li>
									<li><a href="#">Restaurar Datos</a></li>
								</ul>
							</li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Usuarios <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">Registrar Usuario</a></li>
									<li><a href="#">Eliminar Usuario</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Jesús García<span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">Cambiar Contraseña</a></li>
									<li><a href="#">Cerrar Sesión</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			
			<div class="container">
				<?php $m = 'Bienvenido a la plantilla de prueba SARECA'; ?>

				
				<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Open Modal</button>

				<div id="myModal" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">Respaldo de datos</h4>
							</div>
							<div class="modal-body">
								<p><?=$m?></p>
							</div>
							<div class="modal-footer">
								<a href="plantilla.html" class="btn btn-primary">Aceptar</a>
							</div>
						</div>
					</div>
				</div>
			<div id="push"></div>
			</div>
		</div>

		<div id="footer">
			<div class="container">
				<p class="muted credit">
					Todos los derechos reservados &copy 2015 <br>
					SARECA | <b>JuMAnY</b> | <a href="https://bootswatch.com/" target="blank">Bootswatch</a>
				</p>
			</div>
		</div>

		
		<script src="js/jquery-1.11.3.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script>
			(function(){
	  			$("#myModal").modal({backdrop: 'static'});
			})();
		</script>
	</body>
</html>