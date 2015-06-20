<?php
class nombre_bd extends CI_Model{

	function __construct(){
		$this->load->database();
	}

	function obtener_nombre($brut){
		$where_array = array (
			'rut'=>$brut);
		$table_name = "fichaAlumno";
		$limit = 1;
		$offset = 0;
		$query = $this->db->get_where($table_name, $where_array, $limit, $offset);
		if($query->num_rows()>0){
			return $query->row();	
		}
		else{
			return null;
		}
	}
}
?>