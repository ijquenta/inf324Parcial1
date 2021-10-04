<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("docente_model");
	}

	public function index()
	{	
		$data = array("data"=>$this->docente_model->obtener_docentes());

		$this->load->view('docente/principal',$data);
	}

	public function eliminar($ci){
		$this->docente_model->eliminar($ci);
		redirect(base_url()."Docentes");
	}
	
}
