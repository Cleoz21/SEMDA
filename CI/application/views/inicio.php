<html>
	<head> <!-- cabezera del archivo.html -->
		<title>Inicio</title>  <!-- titulo que aparece en la barra del explorador -->
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<link href="/CI/public/css/estilo.css" rel="stylesheet" type="text/css" />

	</head>	<body> <!-- contenido de la pagina web -->
		<div class="contenido">
		<!-- incrustar una imagen -->

		<?php 
			echo "<img src='/CI/public/img/LogoUv.png' border='0' width='200px'>";
		?> 

		<?php
			echo "<img src='/CI/public/img/logo-dae.png' border='0' width ='300px' align = 'right' style='margin-top:30px'> ";
		?>
		</div>
		<div class="header_main">
			<h1> </h1>
		</div>
		<div class="header">Bienvenidos</div>
			<div class="contenido">
				<!-- formularios, contienen campos que se deben rellenar -->
				<form>
					<ul id="menu">
						<li><a href="profesional">Profesional</a></li>
						<li><a href="paramedico">Paramédico</a></li>
					</ul> 
				</form>
			</div>
	</body>
	<div class="footer">
		<footer>
			<p>Este sitio ha sido realizado por WhiteWidow</p>
		</footer>
	</div>
</html>	