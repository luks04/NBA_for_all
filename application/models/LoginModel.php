<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {
  function validarUsuario($entradaUsername,$entradaPassword){
    $this->db->where('Username',$entradaUsername);
    $this->db->where('Password',$entradaPassword);
    $result = $this->db->get('USUARIO',1);
    return $result;
  }
}
?>
