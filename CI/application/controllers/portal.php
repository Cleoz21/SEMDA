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
		$this->load->helper('form');
    	$this->load->library('form_validation');
		$this->load->view('crearficha');
	}

	public function insertar(){
		$this->load->model('nombre_bd');
		if($this->input->post('cancelar')){
			redirect('/portal/inicio','location');
		}
		else{
			$alumno = array(
				'nombre' => $this->input->post('nombre'),
				'rut' => $this->input->post('rut'),
				'direccion' => $this->input->post('direccion'),
				'telefono' => $this->input->post('telefono'),
				'nombreFamiliar' => $this->input->post('nombreFamiliar'),
				'carrera' => $this->input->post('carrera'),
				'añoIngreso' => $this->input->post('añoIngreso'),
				'seleccion' =>1,
				'especialista' =>'',
				'observaciones' => '',
				'diagnostico' => ''
				);

			if ( $this->nombre_bd->insertar_alumno($alumno) ){
				redirect('/portal/inicio','location');
			}
			else{
				redirect('/portal/meme','location');
			}
		}
	}

	public function buscar(){
		$this->load->view('buscar');
	}

	public function estadisticas(){
		$this->load->view('generarEstadistica');
	}

	public function fichaclinica($brut){
		$this->load->model('nombre_bd');
		$fichaAlumno = $this->nombre_bd->obtener_nombre($brut);
		if($fichaAlumno==false){
			$this->load->view('meme1');
		}
		else{
		$this->load->view('fichaclinica', $fichaAlumno);
		}
	}

	public function mostrarEstadisticas(){
		$this->load->view('estadistica');
	}

	public function actualizar($rut){
		$this->load->model('nombre_bd');
		if($this->input->post('Volver_inicio')){
			redirect('/portal/inicio','location');
		}
		else{

			$fichaActualizada=array(
					'nombre' => $this->input->post('nombre'),
					'direccion' => $this->input->post('direccion'),
					'telefono' => $this->input->post('telefono'),
					'nombreFamiliar' => $this->input->post('nombreFamiliar'),
					'carrera' => $this->input->post('carrera'),
					'añoIngreso' => $this->input->post('añoIngreso'),
					'especialista' => $this->input->post('especialista'),
					'seleccion' =>0
					);
			$controlNombre;
			$direccion=$fichaActualizada['nombre'];
			//if(strlen($direccion)<5){
		//		$controlNombre=false;
		//	}
			if(!preg_match("/^[a-zA-Z áéíóú]{5,50}$/", $fichaActualizada['nombre'])){
				$controlNombre=false;
			}
			else{
				$controlNombre=true;
			}
			if($controlNombre==false){
				$this->load->view('meme1');
			}
			else{
				$id=array('rut'=>$rut);
				if($this->input->post('primera')){
					$fichaActualizada['seleccion']=1;
				}
				else if($this->input->post('control')){
					$fichaActualizada['seleccion']=2;
				}
				else if($this->input->post('ausente')){
					$fichaActualizada['seleccion']=3;
				}
				/*if($fichaActualizada['telefono']!=0){
					$this->load->view('prueba', $id);}*/
				if ($this->nombre_bd->actualizar_ficha($fichaActualizada, $id) ){
					redirect('/portal/inicio','location');
				}
				else{
				redirect('/portal/meme','location');
				}
			}
		}
	}
}