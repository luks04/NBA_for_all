<?php
class ContenidoHome extends CI_Model {

   public function getContentByTipo($tipo){
   	$result = $this->db->get_where('HOME', array('Tipo' => $tipo));
    return $result->result_array()[0]['Contenido'];
   }

   public function updateTituloStatsForm($nuevoTitulo){
   	return $this->db->query("UPDATE HOME SET Contenido = '$nuevoTitulo' WHERE Tipo = 'Titulo2';");
   }

   public function getContentProxEnc(){
   	return $this->db->get_where('HOME', array('Tipo' => 'Info'));
   }

   public function deleteContentProxEnc($id){
   	return $this->db->query("DELETE FROM HOME WHERE Id = '$id';");
   }

   public function updateEncuentros($id, $nuevoEquipo1, $nuevoEquipo2, $nuevaInfo){
   	return $this->db->query("UPDATE HOME SET Equipo1 = '$nuevoEquipo1', Equipo2 = '$nuevoEquipo2', Contenido = '$nuevaInfo' WHERE Id = '$id';");
   }

   public function getImgProxEnc(){
   	$equipos = $this->db->get_where('HOME', array('Tipo' => 'Info'));
    $rutas = [];

    foreach ($equipos->result_array() as $key) {
      $equipo1 = $key['Equipo1'];
      $equipo2 = $key['Equipo2'];
      $logo1 = $this->db->get_where('EQUIPO', array('Equipo' => $equipo1));
      $logo2 = $this->db->get_where('EQUIPO', array('Equipo' => $equipo2));

      $ruta1 = $logo1->result_array()[0]['Ruta'];
      $ruta2 = $logo2->result_array()[0]['Ruta'];

      $rutas[] = $ruta1;
      $rutas[] = $ruta2;
    }
    return $rutas;
   }

   public function getVideo(){
   	$result = $this->db->get_where('HOME', array('Tipo' => 'Video'));
    return $result->result_array()[0]['Contenido'];
   }

   public function updateVideo($nuevoVideo){
   	return $this->db->query("UPDATE HOME SET Contenido = '$nuevoVideo' WHERE Tipo = 'video';");
   }
}
?>
