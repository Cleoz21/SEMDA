<html> <!-- tag html que da inicio a una pagina web -->
	<head> <!-- cabezera del archivo.html -->
		<title>Registro</title>  <!-- titulo que aparece en la barra del explorador -->
		<!-- llamamos al archivo estilos.css que contiene el estilo del sitio -->	
		<link href="/CI/public/css/estilo3.css" rel="stylesheet" type="text/css"/>
		<script src="/CI/public/js/estadistica.js"type="text/javascript"></script>
	</head>

	<body> <!-- contenido de la pagina web -->
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
			<h1 align='center'>Generar Estadistica</h1>
			<div class="contenido">
				<label >Por Profesional: </label><br>
				<input type="radio" name="especialidad" value="Medicina General">Medicina General<br>
				<input type="radio" name="especialidad" value="Matrona">Matrona<br>
				<input type="radio" name="especialidad" value="Nutricion">Nutricion<br>
				<input type="radio" name="especialidad" value="Psicologia">Psicologia<br>
				<input type="radio" name="especialidad" value="Psiquiatra">Psiquiatra<br>
				<input type="radio" name="especialidad" value="Ginecologia">Ginecologia<br>
				<input type="button" value="Obtener Estadistica" id="Obtener">
			</div>
		</div>
	</body>
</html>