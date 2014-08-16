<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categorias extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('session', 'parser'));
		$this->load->helper('url');
	}

	public function index()
	{
    	$this->load->model('Categoria','',true);
		$data['categorias'] = $this->Categoria->get();
		$data['title'] = "Categorías";
		$data['content'] = $this->parser->parse('categorias/index', $data, true);
		$this->load->view('template', $data);
	}
	
	public function registrar()
	{
		$data['title'] = "Registrar categoría";	    	
	    $data['content'] = $this->load->view('categorias/editar', $data, true);
		$this->load->view('template', $data);
	}
	
	public function editar($id)
	{
		$this->load->model('Categoria','',true);
		$data['categoria'] = $this->Categoria->get_categoria($id);
	    $data['title'] = "Editar categoría";
	    $data['content'] = $this->load->view('categorias/editar', $data, true);
		$this->load->view('template', $data);
	}
	
	public function guardar($id = null)
	{
		$this->load->model('Categoria','',true);
	    if(!is_null($id)) {
			$result = $this->Categoria->update($id);
	    } else {
			$result = $this->Categoria->insert();
	    }
		$this->session->set_flashdata('result', $result);
		$this->session->set_flashdata('message', ($result == 1) ? "Guardado" : "No guardado");
		redirect('/categorias','redirect');
	}
	
	public function eliminar($id)
	{
	    $this->load->model('Categoria','',true);
		$result = $this->Categoria->delete($id);
		$this->session->set_flashdata('result', $result);
		$this->session->set_flashdata('message', ($result == 1) ? "Eliminado" : "No eliminado");
		redirect('/categorias','redirect');
	}
}