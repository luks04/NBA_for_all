<?php
class ContenidoLegends extends CI_Model {

 	public function getContentByTipo($tipo){
    	$result = $this->db->get_where('LEGENDS', array('Tipo' => $tipo));
    	return $result->result_array()[0]['Contenido'];
   }

   public function getImgLegends(){
   	$result = $this->db->get_where('LEGENDS', array('Tipo' => 'Img'));
    $img = [];

    foreach ($result->result_array() as $key) {
      $id = $key['Contenido'];
      $imagen = $this->db->get_where('IMAGEN', array('Id' => $id));

      $ruta = $imagen->result_array()[0]['Ruta_img'];
      $img[] = $ruta;
    }
    return $img;
   }

   public function getTabla($leyenda){
     	return $this->db->get_where('LOGRO', array('Leyenda' => $leyenda));
    }
}

?>
