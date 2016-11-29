<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class ConsultasModel extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
 
    public function SeleccionarContacto($id = false){
        if($id === false){
            $this->db->select('*');
            $this->db->from('contactanos');
        }else{
            $this->db->select('*');
            $this->db->from('contactanos');
            $this->db->where('id',$id);
        }
        $query = $this->db->get();
        if($query->num_rows() > 0 ){
            return $query->result_array();
        }
    }
    public function InsertarContacto($data) {
        $this->db->insert('contactanos',$data);
    }
}
