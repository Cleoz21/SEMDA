<html> <!-- tag html que da inicio a una pagina web -->
		<head> <!-- cabezera del archivo.html -->
			<title>Registro</title>  <!-- titulo que aparece en la barra del explorador -->
			<!-- llamamos al archivo estilos.css que contiene el estilo del sitio -->	
			<link href="/CI/public/css/estilo2.css" rel="stylesheet" type="text/css"/>
			<script src="/CI/public/js/ficha.js"type="text/javascript"></script>
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
			<h1>Buscador</h1>
				<!-- formularios, contienen campos que se deben rellenar -->
				<form>
					<fieldset>
						<label>Rut Alumno: </label> <!-- etiqueta para los input -->
							<input type="text" size="44" placeholder="Inserte el rut sin puntos ni dígito verificador" name="rut" id="Rut_alumno" ><br>
							<input type="button" value="Buscar" id="buscar_alumno">
							<input type="button" value="Volver" id="regresar_pagina">
					</fieldset>
				</form>
			</div>
		</div>
	</body>
</html>