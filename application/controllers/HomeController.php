<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class HomeController extends CI_Controller {
		public function __construct(){
	            parent::__construct();
	            $this->load->helper('url');
	    }
		public function index(){
			$data["seleccionar"] = $this->seleccionarContacto();

			$this->load->view('guest/head');
			$this->load->view('guest/nav');
			$this->load->view('guest/header');
			$this->load->view('guest/content');
			$this->load->view('guest/modals');
			$this->load->view('guest/contactanos');
			$this->load->view('guest/datos',$data);
			$this->load->view('guest/footer');
		}

		private function seleccionarContacto(){
			include 'consultas.php';
			$consultas = new consultas();
			return $consultas->SeleccionarContacto();
		}
	}	
?>
