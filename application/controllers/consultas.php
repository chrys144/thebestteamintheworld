<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class consultas extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('ConsultasModel');
            $this->load->helper('url');//No sé que hace esto
            $this->load->database('default');
        }
        public function SeleccionarContacto(){
            return $this->ConsultasModel->SeleccionarContacto();
        }
        public function insertarcontacto(){
        	$data = array(
                'nombre' => $this->input->post('nombre'),
                'correo' => $this->input->post('correo'),
                'numero' => $this->input->post('numero'),
                'mensaje' => $this->input->post('mensaje')
            );
            $this->ConsultasModel->InsertarContacto($data);
        }
    }
?>