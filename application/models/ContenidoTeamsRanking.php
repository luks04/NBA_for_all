<?php
class ContenidoTeamsRanking extends CI_Model {

   public function getEquipos(){
   	return $this->db->get('EQUIPO');
   }

   public function deleteEquipo($id){
   	return $this->db->query("DELETE FROM EQUIPO WHERE Id = '$id';");
   }

   public function getContentByTipo($tipo){
   	$result = $this->db->get_where('TEAMSRANKING', array('Tipo' => $tipo));
    return $result->result_array()[0]['Contenido'];
   }

   public function updateEquipo($id, $nuevoConferencia, $nuevoEquipo, $nuevoRuta, $nuevoGanados, $nuevoPerdidos, $nuevoLocal, $nuevoVisitante, $nuevoRach){
     return $this->db->query("UPDATE EQUIPO SET Ruta = '$nuevoRuta', Equipo = '$nuevoEquipo', Ganados = '$nuevoGanados', Perdidos = '$nuevoPerdidos', Local = '$nuevoLocal', Visitante = '$nuevoVisitante', Rach = '$nuevoRach', Conferencia = '$nuevoConferencia' WHERE Id = '$id';");
   }
}
?>
