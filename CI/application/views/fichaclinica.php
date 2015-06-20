<html> <!-- tag html que da inicio a una pagina web -->
	<head> <!-- cabezera del archivo.html -->
		<title>Ficha Clinica</title>  <!-- titulo que aparece en la barra del explorador -->
		<!-- llamamos al archivo estilos.css que contiene el estilo del sitio -->	
		<link href="/CI/public/css/estilo5.css" rel="stylesheet" type="text/css"/>
		<script src="/CI/public/js/GuardarFicha.js"type="text/javascript"></script>
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
		<hr><hr>
	<div class="header">Ficha Clinica</div>
		<div class="contenido">
			<label>Nombre: </label> <!-- etiqueta para los input -->
				<input type="text" size="100" value="<?php echo $nombre;?>" disabled><br>
			<label>Rut: </label> <!-- etiqueta para los input -->
				<input type="text" value="<?php echo $rut;?>" disabled><br>
			<label>Direccion: </label> <!-- etiqueta para los input -->
				<input type="text" size="100"  value="<?php echo $direccion?>" disabled><br><!-- input para textos -->
			<label>Telefono de Contacto: </label>
				<input type="tel" value="<?php echo $telefono?>" disabled><br>
			<label>Nombre del padre o la madre : </label>
				<input type="text" value="<?php echo $nombreFamiliar?>" disabled><br>
			<label>Carrera: </label> <!-- etiqueta para los input -->
				<input type="text" value="<?php echo $carrera?>" disabled><br>
			<label>Año de Ingreso: </label>
				<input type="text" value="<?php echo $añoIngreso?>" disabled><br>
		</div>
		<hr><hr>
			<label>Especialidad: </label>
				<input type="text" placeholder="Ingrese su Especialidad">
				<input type="radio">Primera Vez
				<input type="radio">Control
				<input type="radio">Ausente
		<br>
		<textarea class="AreaTexto">Observaciones</textarea>
		<textarea class="AreaTexto">Diagnostico</textarea>

		<input type="button" id="Guardar_Datos" value="Guardar">
		<input type="button" id="Volver_inicio" value="Volver Inicio">
	</body>
</html>	