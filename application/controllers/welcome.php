<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function index()
	{
		$data['content'] = $this->load->view('welcome', '', true);
		$data['title'] = "Módulo de Almacen";
		$this->load->view('template', $data);
	}
}