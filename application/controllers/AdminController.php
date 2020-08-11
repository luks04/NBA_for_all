<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require(FCPATH.'classes/Usuario.php');

class AdminController extends CI_Controller {

	function __construct(){
    parent::__construct();
    if($this->session->userdata('logged_in') !== TRUE){
      redirect('LoginController');
    }
  }

	public function index()
	{
		$this->load->view('head');
    //Allowing access to admin only
      if($this->session->userdata('level')==='1'){
					$dato['imgCarousel'] = $this->ContenidoImagenes->getImgCarousel();
					$dato['titulo1_col1'] = $this->ContenidoHome->getContentByTipo('Titulo1_col1');
					$dato['titulo1_col2'] = $this->ContenidoHome->getContentByTipo('Titulo1_col2');
					$dato['titulo2'] = $this->ContenidoHome->getContentByTipo('Titulo2');
					$dato['contentProxEnc'] = $this->ContenidoHome->getContentProxEnc();
					$dato['imgProxEnc'] = $this->ContenidoHome->getImgProxEnc();
					$dato['video'] = $this->ContenidoHome->getVideo();

          $this->load->view('navbar');
          $this->load->view('viewAdmin/carousel', $dato);
          $this->load->view('viewAdmin/home', $dato);
      		$this->load->view('viewAdmin/statsForm', $dato);
      }else{
          echo "Access Denied";
      }
    $this->load->view('footer');
	}

	public function showTeamsRanking()
	{
		$this->load->view('head');
    //Allowing access to admin only
      if($this->session->userdata('level')==='1'){
					$dato['equipos'] = $this->ContenidoTeamsRanking->getEquipos();
					$dato['titulo'] = $this->ContenidoTeamsRanking->getContentByTipo('Titulo');
					$dato['subtitulo1'] = $this->ContenidoTeamsRanking->getContentByTipo('Subtitulo1');
					$dato['subtitulo2'] = $this->ContenidoTeamsRanking->getContentByTipo('Subtitulo2');
          $this->load->view('navbar');
          $this->load->view('viewAdmin/teamsRanking', $dato);
      }else{
          echo "Access Denied";
      }
    $this->load->view('footer');
	}

	public function showNews()
	{
		$this->load->view('head');
    //Allowing access to admin only
      if($this->session->userdata('level')==='1'){
					$dato['titulo'] = $this->ContenidoNews->getContentByTipo('Titulo');
					$dato['news'] = $this->ContenidoNews->getNews();
					$dato['imgNews'] = $this->ContenidoNews->getImgNews();
          $this->load->view('navbar');
          $this->load->view('viewAdmin/news', $dato);
      }else{
          echo "Access Denied";
      }
    $this->load->view('footer');
	}

	public function showRememberingLegends()
	{
		$this->load->view('head');
    //Allowing access to admin only
      if($this->session->userdata('level')==='1'){
					$dato['titulo'] = $this->ContenidoLegends->getContentByTipo('Titulo');
					$dato['titulo1_col1'] = $this->ContenidoLegends->getContentByTipo('Titulo1_col1');
					$dato['titulo1_col2'] = $this->ContenidoLegends->getContentByTipo('Titulo1_col2');
					$dato['imgsLegends'] = $this->ContenidoLegends->getImgLegends();
					$dato['frase1'] = $this->ContenidoLegends->getContentByTipo('Frase1');
					$dato['nombre1'] = $this->ContenidoLegends->getContentByTipo('NameFrase1');
					$dato['frase2'] = $this->ContenidoLegends->getContentByTipo('Frase2');
					$dato['nombre2'] = $this->ContenidoLegends->getContentByTipo('NameFrase2');
					$dato['titulo2_col1'] = $this->ContenidoLegends->getContentByTipo('Titulo2_col1');
					$dato['titulo2_col2'] = $this->ContenidoLegends->getContentByTipo('Titulo2_col2');
					$dato['tabla_l1'] = $this->ContenidoLegends->getTabla('legend1');
					$dato['tabla_l2'] = $this->ContenidoLegends->getTabla('legend2');
          $this->load->view('navbar');
          $this->load->view('viewAdmin/rememberingLegends', $dato);
      }else{
          echo "Access Denied";
      }
    $this->load->view('footer');
	}

	public function showStats(){
		// Tomar valor del formulario
		$opcion = $this->input->post('statsOptions');

		$this->load->view('head');
    //Allowing access to admin only
      if($this->session->userdata('level')==='1'){
					$opcion = $this->input->post('statsOptions');

					$dato['statsArray'] = $this->StatsSearch->getStatsLink($opcion);
					$dato['imgCarousel'] = $this->ContenidoImagenes->getImgCarousel();
					$dato['titulo1_col1'] = $this->ContenidoHome->getContentByTipo('Titulo1_col1');
					$dato['titulo1_col2'] = $this->ContenidoHome->getContentByTipo('Titulo1_col2');
					$dato['titulo2'] = $this->ContenidoHome->getContentByTipo('Titulo2');
					$dato['contentProxEnc'] = $this->ContenidoHome->getContentProxEnc();
					$dato['imgProxEnc'] = $this->ContenidoHome->getImgProxEnc();
					$dato['video'] = $this->ContenidoHome->getVideo();

					$this->load->view('head');
					$this->load->view('navbar');
					$this->load->view('viewAdmin/carousel', $dato);
					$this->load->view('viewAdmin/home', $dato);
					$this->load->view('viewAdmin/stats', $dato);
      }else{
          echo "Access Denied";
      }
    $this->load->view('footer');
	}

	public function showUsers(){
		$this->load->view('head');
    //Allowing access to admin only
      if($this->session->userdata('level')==='1'){
					$dato['consultaUsers'] = $this->ContenidoPersona->consultarRegistros();
          $this->load->view('navbar');
					$this->load->view('viewAdmin/users', $dato);
      }else{
          echo "Access Denied";
      }
    $this->load->view('footer');
	}

	/*
	* Mostrar Formularios
	*/

	public function showFormCarousel($imgRuta, $imgName, $id){
		$this->load->view('head');
    //Allowing access to admin only
      if($this->session->userdata('level')==='1'){
					$dato['id'] = $id;
					$dato['rutaImagen'] = base64_decode(urldecode($imgRuta));
					$dato['nombreImagen'] = urldecode($imgName);
          $this->load->view('navbar');
					$this->load->view('viewAdmin/formView/formularioCarousel', $dato);
      }else{
          echo "Access Denied";
      }
    $this->load->view('footer');
	}

	public function showFormTituloStatsForm($titulo){
		$this->load->view('head');
    //Allowing access to admin only
      if($this->session->userdata('level')==='1'){
					$dato['titulo'] = base64_decode(urldecode($titulo));
					$this->load->view('navbar');
					$this->load->view('viewAdmin/formView/formularioTitulo', $dato);
      }else{
          echo "Access Denied";
      }
    $this->load->view('footer');
	}

	public function showFormEncuentro($localTeam, $visitTeam, $informacion, $id){
		$this->load->view('head');
    //Allowing access to admin only
      if($this->session->userdata('level')==='1'){
				$dato['id'] = $id;
				$dato['equipoLocal'] = base64_decode(urldecode($localTeam));
				$dato['equipoVisitante'] = base64_decode(urldecode($visitTeam));
				$dato['info'] = base64_decode(urldecode($informacion));
				$this->load->view('navbar');
				$this->load->view('viewAdmin/formView/formularioEncuentro', $dato);
      }else{
          echo "Access Denied";
      }
    $this->load->view('footer');
	}

	public function showFormVideo(){
		$this->load->view('head');
    //Allowing access to admin only
      if($this->session->userdata('level')==='1'){
				$this->load->view('navbar');
				$this->load->view('viewAdmin/formView/formularioVideo');
      }else{
          echo "Access Denied";
      }
    $this->load->view('footer');
	}

	public function showFormEquipo($id, $ruta, $equipo, $ganados, $perdidos, $local, $visitante, $rach, $conferencia){
		$this->load->view('head');
    //Allowing access to admin only
      if($this->session->userdata('level')==='1'){
				$dato['id'] = $id;
				$dato['ruta'] = base64_decode(urldecode($ruta));
				$dato['equipo'] = base64_decode(urldecode($equipo));
				$dato['ganados'] = $ganados;
				$dato['perdidos'] = $perdidos;
				$dato['local'] = base64_decode(urldecode($local));
				$dato['visitante'] = base64_decode(urldecode($visitante));
				$dato['rach'] = $rach;
				$dato['conferencia'] = base64_decode(urldecode($conferencia));

				$this->load->view('navbar');
				$this->load->view('viewAdmin/formView/formularioEquipo', $dato);
      }else{
          echo "Access Denied";
      }
    $this->load->view('footer');
	}

	public function showFormEditUser($id, $username, $email, $password, $user_level){
		$this->load->view('head');
    //Allowing access to admin only
      if($this->session->userdata('level')==='1'){
				$dato['id'] = $id;
				$dato['username'] = $username;
				$dato['email'] = base64_decode(urldecode($email));
				$dato['password'] = $password;
				$dato['user_level'] = $user_level;

				$this->load->view('navbar');
				$this->load->view('viewAdmin/formView/formularioEditUser', $dato);
      }else{
          echo "Access Denied";
      }
    $this->load->view('footer');
	}

	public function showFormNews($id, $contenido, $titulo, $subtitulo, $link, $img){
		$this->load->view('head');
    //Allowing access to admin only
      if($this->session->userdata('level')==='1'){
				$dato['id'] = $id;
				$dato['contenido'] = base64_decode(urldecode($contenido));
				$dato['titulo'] = base64_decode(urldecode($titulo));
				$dato['subtitulo'] = base64_decode(urldecode($subtitulo));
				$dato['link'] = base64_decode(urldecode($link));
				$dato['img'] = $img;

				$this->load->view('navbar');
				$this->load->view('viewAdmin/formView/formularioNoticia', $dato);
      }else{
          echo "Access Denied";
      }
    $this->load->view('footer');
	}

	/*
	* Metodos para eliminar
	*/
	public function eliminarUsuario($userId){
		$this->ContenidoPersona->eliminarRegistro($userId);
		redirect('AdminController/showUsers');
	}

	public function eliminarImgCarousel($imgId){
		$this->ContenidoImagenes->deleteImgCarousel($imgId);
		redirect('AdminController');
	}

	public function eliminarContentProxEnc($imgId){
		$this->ContenidoHome->deleteContentProxEnc($imgId);
		redirect('AdminController');
	}

	public function eliminarEquipo($teamId){
		$this->ContenidoTeamsRanking->deleteEquipo($teamId);
		redirect('AdminController/showTeamsRanking');
	}

	public function eliminarNews($newsId){
		$this->ContenidoNews->deleteNews($newsId);
		redirect('AdminController/showNews');
	}

	/*
	* Metodos para actualizar
	*/
	public function actualizarCarousel(){
		 $tempId = $this->input->post('Id');
		 $tempRuta = $this->input->post('entradaImagenCarrusel');
		 $tempNombre = $this->input->post('entradaTituloCarrusel');

		 $this->ContenidoImagenes->updateImgCarousel($tempRuta, $tempNombre, $tempId);

		 redirect('AdminController');
	 }

	 public function actualizarTituloStatsForm(){
 		 $tempTitulo = $this->input->post('entradaTitulo');
 		 $this->ContenidoHome->updateTituloStatsForm($tempTitulo);

 		 redirect('AdminController');
 	 }

	 public function actualizarEncuentros(){
		 $tempId = $this->input->post('Id');
 		 $tempEquipo1 = $this->input->post('entradaLocalTeam');
		 $tempEquipo2 = $this->input->post('entradaVisitTeam');
		 $tempInfoEncuentro = $this->input->post('entradaInfoEncuentro');

 		 $this->ContenidoHome->updateEncuentros($tempId, $tempEquipo1, $tempEquipo2, $tempInfoEncuentro);

 		 redirect('AdminController');
 	 }

	 public function actualizarVideo(){
		 $tempCodeHTML = $this->input->post('entradaVideo');

 		 $this->ContenidoHome->updateVideo($tempCodeHTML);

 		 redirect('AdminController');
 	 }

	 public function actualizarEquipo(){
		 $tempId = $this->input->post('Id');
 		 $tempConferencia = $this->input->post('entradaConference');
		 $tempEquipo = $this->input->post('entradaTeamName');
		 $tempRuta = $this->input->post('entradaLogo');
		 $tempGanados = $this->input->post('entradaWins');
		 $tempPerdidos = $this->input->post('entradaLoses');
		 $tempLocal = $this->input->post('entradaLocalR');
		 $tempVisitante = $this->input->post('entradaVisitR');
		 $tempRach = $this->input->post('entradaRach');

 		 $this->ContenidoTeamsRanking->updateEquipo($tempId, $tempConferencia, $tempEquipo, $tempRuta, $tempGanados, $tempPerdidos, $tempLocal, $tempVisitante, $tempRach);

 		 redirect('AdminController/showTeamsRanking');
 	 }

	 public function actualizarUser(){
		 $tempId = $this->input->post('Id');
 		 $tempUsername = $this->input->post('entradaUserName');
		 $tempEmail = $this->input->post('entradaEmail');
		 $tempPassword = $this->input->post('entradaPassword');
		 $tempUser_level = $this->input->post('entradaLevel');

		 $datosUpdate = new Usuario($tempUsername,$tempEmail,$tempPassword, $tempUser_level);

 		 $this->ContenidoPersona->updateUser($tempId, $datosUpdate);

 		 redirect('AdminController/showUsers');
 	 }

	 public function actualizarNews(){
		 $tempId = $this->input->post('Id');
 		 $tempContenido = $this->input->post('entradaContenidoN');
		 $tempTitulo = $this->input->post('entradaTituloNew');
		 $tempSubtitulo = $this->input->post('entradaSubTituloNew');
		 $tempLink = $this->input->post('entradaLinkN');
		 $tempImg = $this->input->post('entradaImgNew');

 		 $this->ContenidoNews->updateNews($tempId, $tempContenido, $tempTitulo, $tempSubtitulo, $tempLink, $tempImg);

 		 redirect('AdminController/showNews');
 	 }
}
