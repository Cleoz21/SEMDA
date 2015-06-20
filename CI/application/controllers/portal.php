<?php
class Portal extends CI_Controller{

	public function inicio(){
		$this->load->view('inicio');
	}

	public function profesional(){
		$this->load->view('profesional');
	}

	public function meme(){
		$this->load->view('meme1');
	}
	
	public function paramedico(){
		$this->load->view('crearficha');
	}

	public function buscar(){
		$this->load->view('buscar');
	}

	public function estadisticas(){
		$this->load->view('generarEstadistica');
	}

	public function fichaclinica($brut){
		$this->load->model('nombre_bd');
		//$brut = '18015730';
		$fichaAlumno = $this->nombre_bd->obtener_nombre($brut);
		$this->load->view('fichaclinica', $fichaAlumno);
	}

	public function mostrarEstadisticas(){
		$this->load->view('estadistica');
	}

}