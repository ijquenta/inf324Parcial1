<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Editar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("docente_model");
	}

	public function index($ci)
	{   
        $data=$this->docente_model->obtener_docente($ci);
		$this->load->view('docente/editar',$data);
	}

	public function actualizar($cii){
		$ci = $this->input->post('ci');
		$user = $this->input->post('user');
		$password = $this->input->post('password');
        $id_rol = $this->input->post('id_rol');
        
        $data=$this->docente_model->obtener_docente($cii);
		$data = array("ci"=>$ci, "user"=>$user, "password"=>$password, "id_rol"=>$id_rol);
			
			$this->docente_model->actualizar($data,$cii);
			redirect(base_url()."Docentes");
			 
	}
}
