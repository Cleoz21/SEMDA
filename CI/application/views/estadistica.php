<html> <!-- tag html que da inicio a una pagina web -->
	<head> <!-- cabezera del archivo.html -->
		<title>Registro</title>  <!-- titulo que aparece en la barra del explorador -->
		<!-- llamamos al archivo estilos.css que contiene el estilo del sitio -->	
		<link href="/CI/public/css/estilo4.css" rel="stylesheet" type="text/css"/>
		<script src="/CI/public/js/VolverInicio.js"type="text/javascript"></script>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
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
			<h1 align='center'>Estadistica</h1>
			<div class="contenido">
				<label >Profesional X: </label><br>
				<label>Primera Vez: </label> <!-- etiqueta para los input -->
					<input type="text" value="180" disabled><br>
				<label>Control: </label> <!-- etiqueta para los input -->
					<input type="text" value="120" disabled><br>
				<label>Ausentes: </label> <!-- etiqueta para los input -->
					<input type="text" value="40" disabled><br>
				<input type="button" value="Volver al inicio" id="VolverInicio">
			</div
>		</div>
	</body>
</html>