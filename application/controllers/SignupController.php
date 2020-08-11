<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require(FCPATH.'classes/Usuario.php');

class SignupController extends CI_Controller {

	public function index()
	{
    $this->load->view('head');
    $this->load->view('navbar');
    $this->load->view('Session/signup');
    $this->load->view('footer');
  }

	public function insertar(){
		 $tempUsername = strtolower($this->input->post('entradaUsername'));
		 $tempEmail = $this->input->post('entradaEmail');
		 $tempPassword = md5($this->input->post('entradaPassword'));
		 $tempUser_level = 3;

		 //Instancio un objeto de la clase persona
		 $datos = new Usuario($tempUsername,$tempEmail,$tempPassword,$tempUser_level);
		 //Invoco el método para ingresar el registro
		 $registro = $this->ContenidoPersona->insertarRegistros($datos);

		 if ($registro == NULL) {
			echo $this->session->set_flashdata('msg2','El usuario ingresado ya existe');
			redirect('SignupController');
			}else {
				redirect('LoginController');
			}
	}

}
