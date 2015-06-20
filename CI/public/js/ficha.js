function Buscar_Alumno(){

	var Strin = document.getElementById("Rut_alumno").value;
		var rut='fichaclinica/';
		var rut2='asdf';
		rut=rut+Strin;
		window.location.assign(rut);
}

function regresar () {
	window.history.back();
}

window.onload = function(){
	var botonBuscar = document.getElementById("regresar_pagina");
	botonBuscar.onclick = regresar;
	var botonBuscar = document.getElementById("buscar_alumno");
	botonBuscar.onclick = Buscar_Alumno;
}