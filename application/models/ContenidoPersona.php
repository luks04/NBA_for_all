<?php
class ContenidoPersona extends CI_Model {

   public function insertarRegistros($entradaDatos){
    $us_name = $entradaDatos->username;
    $consulta = $this->db->get_where('USUARIO', array('Username' => $us_name));
    if ($consulta->result_array()[0]['Username'] == $us_name) {
      return NULL;
    }
    return $this->db->insert('USUARIO', $entradaDatos);
   }

   public function consultarRegistros(){
   	return $this->db->get('USUARIO');
   }

   public function eliminarRegistro($id){
   	return $this->db->query("DELETE FROM USUARIO WHERE Id = '$id';");
   }

   public function updateUser($id, $entradaUpdate){
     $this->db->where('Id', $id);
    	return $this->db->update('USUARIO', $entradaUpdate);
   }

}
?>
