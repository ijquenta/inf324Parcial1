<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adicionar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("docente_model");
	}

	public function index()
	{
		$this->load->view('docente/adicionar');
	}

	public function guardar(){
		$xci = $this->input->post("ci");
		$xuser = $this->input->post("user");
		$xpassword = $this->input->post("password");
		$xid_rol = $this->input->post("id_rol");
		$data = array("ci"=>$xci,"user"=>$xuser,"password"=>$xpassword,"id_rol"=>$xid_rol);
			
		$this->docente_model->guardar($data);
		redirect(base_url()."Docentes");
	}
}
