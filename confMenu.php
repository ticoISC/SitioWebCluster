<?php include('header.php'); ?>

	<section class="main container">
		<div class="row">
			<!--Para saber en que parte del sitio nos encontramos-->
			<section class="posts col-md-9">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</section>

			<!--sidebar y encabezado-->
			<!-- ocultar para dispositivos pequeños(hidden)-->
			<aside class="col-md-3 hidden-xs hidden-sm">
				<h4>Categorias</h4>
				<div class="list-group">
					<a href="#" class="list-group-item active">CSS</a>
					<a href="#" class="list-group-item">JQuery</a>
					<a href="#" class="list-group-item">HTML</a>
					<a href="#" class="list-group-item">PHP</a>
					<a href="#" class="list-group-item">ANGULAR</a>
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
						<li><a href="..\..\index.html">Inicio</a></li>
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