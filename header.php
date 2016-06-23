<!DOCTYPE <!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<!-- Agregar esta etiqueta para que la pagina se vea correctamente desde un dispositivo movil-->
	<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
	<title>Cluster ITCuliacan</title>
	<link rel="shortcut icon" href="img\favicon.ico">
	<link rel="stylesheet" href="css\bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css\estilos.css">
	<script  src="funciones.js" type="text/javascript"></script>



</head>
<body>
	<header>
		<!--menu de navegacion inverse=invertir color,navbar-static-top=siempre estara arriba-->
		<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<!--Boton que aparecera en los dispositivos moviles-->
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-b">
						<!--Para dispositivos de lectura -->
						<span class="sr-only">Desplegar / ocultar menu</span>
					</button>
					<!--Agregar titulo de la pagina web-->
					<span href="#" class="navbar-brand">CLUSTER BEOWULF</span>
				</div>
				<!--construir menu -->
				<div class="collapse navbar-collapse" id="navegacion-b">
					<ul class="nav navbar-nav">
						<li ><a href="index.php">Inicio</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Documentacion
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="ManualCluster.php">Manual de usuario</a></li>
								<!--para dividir-->
								<li class="divider"></li>
								<li><a href="confMenu.php">Configuracion del cluster</a></li>
							</ul>
						</li>
						<li ><a href="#">Contacto</a></li>
					</ul>
					<!--Agregar boton-->
					<form action=""  class="navbar-form navbar-right" role="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="buscar"></input>
						</div>
						<button type="submit" class="btn btn-primary">
								<!--Icono de busqueda-->
								<span class="glyphicon glyphicon-search"></span>
						</button>
					</form>
				</div>
			</div>
		</nav>
	</header>
	<!-- jumbotron-->
	<section class="jumbotron">
		<div class="container">
			<h1 id="titulo-blog">Cluster ITCuliacan</h1>
			<p>Manual de usuario</p>
		</div>
	</section>