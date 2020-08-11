<?php
class ContenidoImagenes extends CI_Model {

   public function getImgCarousel(){
   	return $this->db->get_where('IMAGEN', array('Seccion' => 'carousel'));
   }

   public function deleteImgCarousel($id){
   	return $this->db->query("DELETE FROM IMAGEN WHERE Id = '$id';");
   }

   public function updateImgCarousel($nuevaRuta, $nuevoNombre, $id){
   	return $this->db->query("UPDATE IMAGEN SET Ruta_img = '$nuevaRuta', Nombre = '$nuevoNombre' WHERE Id = '$id';");
   }

   public function getLogo(){
     $result = $this->db->get_where('IMAGEN', array('Seccion' => 'logo'));
     return $result->result_array()[0]['Ruta_img'];
   }
}
?>
