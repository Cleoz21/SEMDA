<html> <!-- tag html que da inicio a una pagina web -->
	<head> <!-- cabezera del archivo.html -->
		<title>Ficha Clinica</title>  <!-- titulo que aparece en la barra del explorador -->
		<!-- llamamos al archivo estilos.css que contiene el estilo del sitio -->	
		<link href="/CI/public/css/estilo2.css" rel="stylesheet" type="text/css"/>
		<script src="/CI/public/js/crear.js"type="text/javascript"></script>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	</head>
<!-- Página principal tiene dos cuadros uno para profesionales y otro para paramedicos. para la parte de paramedicos es solo crear fichas y para los profesionales es buscar y modificar pacientes y generar estadisticas de cuantos usuarios se atienden por primera vez,por control, cuantos asistieron a la especialidad seleccionada -- >
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
			<h1>Ficha Clínica</h1>
		</div>
		<div class="header">Ingrese los datos del alumno</div>
			<div class="contenido">
				<!-- formularios, contienen campos que se deben rellenar -->
				<form action="/CI/index.php/portal/insertar" method="post">
					<fieldset >
						<label>Nombre: </label> <!-- etiqueta para los input -->
							<input type="text" size="45" placeholder="Ingrese el nombre del paciente" enabled name="nombre" id="nombre"><br>
						<label>Rut: </label> <!-- etiqueta para los input -->
							<input type="text" size="46" placeholder="Ingrese el Rut sin puntos ni dígito verificador" name="rut" id="rut" ><br>
						<label>Dirección: </label> <!-- etiqueta para los input -->
							<input type="text" size="45" placeholder="Ingrese la dirección del paciente" name="direccion" id="direccion" ><br> <!-- input para textos -->
						<label>Teléfono de contacto: </label>
							<input type="tel" min="1" name="telefono" id="Ingrese el telefono del paciente" size="45" placeholder="Ingrese su número telefónico"><br>
						<label>Nombre del padre o la madre : </label>
							<input type="text" size="45" placeholder="Nombre del padre o madre del paciente" name="nombreFamiliar" id="nombreFamiliar"><br>
						<label>Carrera: </label> <!-- etiqueta para los input -->
							<input type="text" size="45" placeholder="Ingrese la carrera que estudia el paciente" name="carrera" id="carrera" ><br>
						<label>Año de ingreso: </label>
							<input type="text" name="añoIngreso" id="añoIngreso" size="45" placeholder="Ingrese el año de ingreso del paciente"><br>
						<input type="submit" name="Guardar" value="Guardar">
						<input type="submit" value="Cancelar" name="cancelar">
					</fieldset>
				</form>
			</div>
		</div>
	</body>
<html>