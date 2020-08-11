<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$dato['imgCarousel'] = $this->ContenidoImagenes->getImgCarousel();
		$dato['titulo1_col1'] = $this->ContenidoHome->getContentByTipo('Titulo1_col1');
		$dato['titulo1_col2'] = $this->ContenidoHome->getContentByTipo('Titulo1_col2');
		$dato['titulo2'] = $this->ContenidoHome->getContentByTipo('Titulo2');
		$dato['contentProxEnc'] = $this->ContenidoHome->getContentProxEnc();
		$dato['imgProxEnc'] = $this->ContenidoHome->getImgProxEnc();
		$dato['video'] = $this->ContenidoHome->getVideo();

		$this->load->view('head');
    $this->load->view('navbar');
		$this->load->view('viewFreemium/carousel', $dato);
    $this->load->view('viewFreemium/home', $dato);
		$this->load->view('viewFreemium/statsForm', $dato);
		//$this->load->view('qrCode');
    $this->load->view('footer');
	}

	public function showTeamsRanking()
	{
		$dato['equipos'] = $this->ContenidoTeamsRanking->getEquipos();
		$dato['titulo'] = $this->ContenidoTeamsRanking->getContentByTipo('Titulo');
		$dato['subtitulo1'] = $this->ContenidoTeamsRanking->getContentByTipo('Subtitulo1');
		$dato['subtitulo2'] = $this->ContenidoTeamsRanking->getContentByTipo('Subtitulo2');

		$this->load->view('head');
		$this->load->view('navbar');
		$this->load->view('viewFreemium/teamsRanking', $dato);
		$this->load->view('footer');
	}

	public function showNews()
	{
		$dato['titulo'] = $this->ContenidoNews->getContentByTipo('Titulo');
		$dato['news'] = $this->ContenidoNews->getNews();
		$dato['imgNews'] = $this->ContenidoNews->getImgNews();

		$this->load->view('head');
		$this->load->view('navbar');
		$this->load->view('viewFreemium/news', $dato);
		$this->load->view('footer');
	}

	public function showRememberingLegends()
	{
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

		$this->load->view('head');
		$this->load->view('navbar');
		$this->load->view('viewFreemium/rememberingLegends');
		$this->load->view('footer');
	}

	public function showStats(){
		// Tomar valor del formulario
		$opcion = $this->input->post('statsOptions');
		// Invocar función del modelo
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
		$this->load->view('viewFreemium/carousel', $dato);
    $this->load->view('viewFreemium/home', $dato);
    $this->load->view('viewFreemium/stats', $dato);
    $this->load->view('footer');
	}
}
