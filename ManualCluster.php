
<?php include('header.php'); ?>
	
	<!--Informacion principal-->
	<section class="main container">
		<div class="row">
			<!--Para saber en que parte del sitio nos encontramos-->
			<section class="posts col-md-9">

				
				<article class="post clearfix" >
					<!--Empujamos la imagen a la izqueirda-->
					
					<h2 class="post-title text-primary" name="intro">Introducción.</h2>
					<p><span class="post-fecha">01 de junio del 2016</span> por <span class="post-autor"><a href="#">Imperial Rojo Rafael , Lopez Felix Jesus Roberto</a></span></p>
					<p class="post-contenido text-justify">
						El presente documento tiene la finalidad de elaborar un manual de usuario para el mantenimiento, control y operatividad de un sistema cluster basado en el sistema operativo Debian linux y enfocado en   el lenguaje Matlab para la resolución de problemas.
					</p>
					<p class="post-contenido text-justify" id="LeerMas1" style="display: none;">
					Este sistema permite el procesamiento en paralelo para poder acelerar el tiempo de ejecución de un programa dividiéndolo en múltiples módulos que se ejecutarán al  mismo tiempo,cada uno en su propio procesador y poder  resolver distintos problemas rápidamente.
					</p >
						<a href="#" onclick="cambiar('LeerMas1'); return false;"  class="btn btn-primary">Leer Mas</a>
				</article>


				<article class="post clearfix" >
					<!--Empujamos la imagen a la izqueirda-->
					
					<h2 class="post-title text-primary" name="intro">Conectarse al cluster (Ubuntu).</h2>
					<p><span class="post-fecha">01 de junio del 2016</span> por <span class="post-autor"><a href="#">Imperial Rojo Rafael , Lopez Felix Jesus Roberto</a></span></p>
					<p class="post-contenido text-justify">
						Para poder acceder a master, debes de  llevar a cabo las siguientes instrucciones:
					</p>
					<div  id="LeerMas2" style="display: none;">
					<p class="post-contenido text-justify" ><strong> 1 Acceder a la terminal del sistema</strong><br>Para poder acceder a la terminal del sistema debes oprimir las siguientes teclas:</p >
					<img src="img/accederT.png" class="img-rounded" alt="Acceder terminal ubuntu" width="180" height="60">
					<p>A continuacion nos mostrara la siguiente pantalla:</p>
					<img src="img/terminal.png" class="img-rounded" alt="terminal" width="400" height="200">
					<p></p>

					</div>
						<a href="#" onclick="cambiar('LeerMas2'); return false;"  class="btn btn-primary">Leer Mas</a>
				</article>

			</section>

			<!--sidebar y encabezado-->
			<!-- ocultar para dispositivos pequeños(hidden)-->
			<aside class="col-md-3 hidden-xs hidden-sm">
				<h4>Indice</h4>
				<div class="list-group">
					<a href="#intro" class="list-group-item active">Introduccion</a>
					<a href="#conect" class="list-group-item">Conectarse al cluster (Ubuntu)</a>
					<a href="#" class="list-group-item">Conectarse al cluster (Windows)</a>
					<a href="#" class="list-group-item">Configuración de Matlab</a>
					<a href="#" class="list-group-item">Probar cluster matlab</a>
				</div>
				<h4>Articulos recientes</h4>
				<a href="#" class="list-group-item">
					<h4 class="list-group-item-heading">Aprende HTML rapidamente</h4>
					<p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					
				</a>
			</aside>
		</div>
	</section>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-xs-6">
					<p>Roberto lopez-TICO</p>
				</div>
				<div class="col-xs-6">
					<ul class="list-inline text-rigth">
						<li><a href="#">Inicio</a></li>
						<li><a href="#">Curso</a></li>
						<li><a href="#">Contactanos</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	
	<!--Descargamos jquery (copiamos el codigo)y lo agregamos a la carpeta js-->
	<script src="js\jquery.js"></script>
	<!--javascript de bootstrap-->
	<script src="js\bootstrap.min.js"></script>


</body>
</html>