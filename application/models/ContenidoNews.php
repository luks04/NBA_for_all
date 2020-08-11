<?php
class ContenidoNews extends CI_Model {

  public function getContentByTipo($tipo){
   $result = $this->db->get_where('NEWS', array('Tipo' => $tipo));
   return $result->result_array()[0]['Contenido'];
  }

   public function getNews(){
   	return $this->db->get_where('NEWS', array('Tipo' => 'News'));
   }

   public function deleteNews($id){
   	return $this->db->query("DELETE FROM NEWS WHERE Id = '$id';");
   }

   public function updateNews($id, $nuevoContenido, $nuevoTitulo, $nuevoSubtitulo, $nuevoLink, $nuevoImg){
   	return $this->db->query("UPDATE NEWS SET Contenido = '$nuevoContenido', Titulo = '$nuevoTitulo', Subtitulo = '$nuevoSubtitulo', Link = '$nuevoLink', Img = '$nuevoImg' WHERE Id = '$id';");
   }

   public function getImgNews(){
   	$result = $this->db->get_where('NEWS', array('Tipo' => 'News'));
    $img = [];

    foreach ($result->result_array() as $key) {
      $id = $key['Img'];
      $imagen = $this->db->get_where('IMAGEN', array('Id' => $id));

      $ruta = $imagen->result_array()[0]['Ruta_img'];
      $img[] = $ruta;
    }
    return $img;
   }
}
?>
