<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require(FCPATH.'classes/Usuario.php');

class LoginController extends CI_Controller {

	public function index()
	{
    $this->load->view('head');
    $this->load->view('navbar');
    $this->load->view('Session/login');
    $this->load->view('footer');
  }

	function auth(){
    $tempUsername = $this->input->post('entradaUsername',TRUE);
    $tempPassword = md5($this->input->post('entradaPassword',TRUE));
    $validate = $this->LoginModel->validarUsuario($tempUsername,$tempPassword);
    if($validate->num_rows() > 0){
        $data = $validate->row_array();

        $username = $data['Username'];
        $level = $data['User_level'];

        $sesdata = array(
            'username'  => $username,
            'level'     => $level,
            'logged_in' => TRUE
        );
        $this->session->set_userdata($sesdata);
        // access login for admin
        if($level === '1'){
            redirect('AdminController');

        // access login for editor
        }elseif($level === '2'){
            redirect('EditorController');

        // access login for premium
        }else{
            redirect('PremiumController');
        }
    }else{
        echo $this->session->set_flashdata('msg','Usuario y/o Contraseña incorrectos');
        redirect('LoginController');
    }
  }

  function logout(){
      $this->session->sess_destroy();
      redirect('Main');
  } 
}
