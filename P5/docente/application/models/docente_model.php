<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class docente_model extends CI_Model {

    public function guardar($data){
        $this->db->query("ALTER TABLE usuario");
        $this->db->insert("usuario",$data);
    }

    public function obtener_docentes(){
        $this->db->select("*");
        $this->db->from("usuario");
		$this->db->where("id_rol","1");
        $results=$this->db->get();
        return $results->result();
    }

    public function obtener_docente($ci){
        $this->db->select("u.ci, u.user, u.password, u.id_rol");
        $this->db->from("usuario u");
        $this->db->where("u.ci",$ci);

        $result=$this->db->get();
        return $result->row();
    }

    public function actualizar($data,$ci){
        $this->db->where("ci",$ci);
        $this->db->update("usuario",$data);
    }

    public function eliminar($ci){
        $this->db->where("ci",$ci);
        $this->db->delete("usuario");
    }
    
}
