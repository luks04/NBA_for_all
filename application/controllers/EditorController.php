<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EditorController extends CI_Controller {

	function __construct(){
    parent::__construct();
    if($this->session->userdata('logged_in') !== TRUE){
      redirect('LoginController');
    }
  }

	public function index()
	{
		$this->load->view('head');
    //Allowing access to editor only
      if($this->session->userdata('level')==='2'){
					$dato['imgCarousel'] = $this->ContenidoImagenes->getImgCarousel();
					$dato['titulo1_col1'] = $this->ContenidoHome->getContentByTipo('Titulo1_col1');
					$dato['titulo1_col2'] = $this->ContenidoHome->getContentByTipo('Titulo1_col2');
					$dato['titulo2'] = $this->ContenidoHome->getContentByTipo('Titulo2');
					$dato['contentProxEnc'] = $this->ContenidoHome->getContentProxEnc();
					$dato['imgProxEnc'] = $this->ContenidoHome->getImgProxEnc();
					$dato['video'] = $this->ContenidoHome->getVideo();

          $this->load->view('navbar');
          $this->load->view('viewEditor/carousel', $dato);
          $this->load->view('viewEditor/home', $dato);
      		$this->load->view('viewEditor/statsForm', $dato);
      }else{
          echo "Access Denied";
      }
    $this->load->view('footer');
	}

	public function showTeamsRanking()
	{
		$this->load->view('head');
    //Allowing access to editor only
      if($this->session->userdata('level')==='2'){
					$dato['equipos'] = $this->ContenidoTeamsRanking->getEquipos();
					$dato['titulo'] = $this->ContenidoTeamsRanking->getContentByTipo('Titulo');
					$dato['subtitulo1'] = $this->ContenidoTeamsRanking->getContentByTipo('Subtitulo1');
					$dato['subtitulo2'] = $this->ContenidoTeamsRanking->getContentByTipo('Subtitulo2');
          $this->load->view('navbar');
          $this->load->view('viewEditor/teamsRanking', $dato);
      }else{
          echo "Access Denied";
      }
    $this->load->view('footer');
	}

	public function showNews()
	{
		$this->load->view('head');
    //Allowing access to editor only
      if($this->session->userdata('level')==='2'){
					$dato['titulo'] = $this->ContenidoNews->getContentByTipo('Titulo');
					$dato['news'] = $this->ContenidoNews->getNews();
					$dato['imgNews'] = $this->ContenidoNews->getImgNews();
          $this->load->view('navbar');
          $this->load->view('viewEditor/news', $dato);
      }else{
          echo "Access Denied";
      }
    $this->load->view('footer');
	}

	public function showRememberingLegends()
	{
		$this->load->view('head');
    //Allowing access to editor only
      if($this->session->userdata('level')==='2'){
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
          $this->load->view('viewEditor/rememberingLegends', $dato);
      }else{
          echo "Access Denied";
      }
    $this->load->view('footer');
	}

	public function showStats(){
		// Tomar valor del formulario
		$opcion = $this->input->post('statsOptions');

		$this->load->view('head');
    //Allowing access to editor only
      if($this->session->userdata('level')==='2'){
					$dato['statsArray'] = $this->StatsSearch->getStatsLink($opcion);
          $this->load->view('navbar');
					$this->load->view('viewEditor/carousel');
					$this->load->view('viewEditor/home');
			    $this->load->view('viewEditor/stats', $dato);
      }else{
          echo "Access Denied";
      }
    $this->load->view('footer');
	}
}
