<?php

class Empleados extends CI_Controller{
function mostrar_pagina_principal(){
    $this->load->model('empleados_model');
    $listadoEmpleados = $this->empleados_model->obtener_empleados();
        
    $listadoEmpleadosSueldo = array();
    foreach($listadoEmpleados as $empleado){
        $itemEmpleado = array();
        $itemEmpleado['nombre'] = $empleado['nombre'];
        $itemEmpleado['sueldoAnual'] = $empleado['sueldo']*12;
        $listadoEmpleadosSueldo[] = $itemEmpleado;
    }

    $data = array(
        'empleados' => $listadoEmpleadosSueldo
    );      
    $this->load->view('pagina_principal', $data);
}
}
?>