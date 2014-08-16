<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Unidades extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
	}

	public function index()
	{
    	$this->load->model('Unidad','',true);
		$data['unidades'] = $this->Unidad->get();
		$data['title'] = "Unidades de medida";
		$data['content'] = $this->load->view('unidades/index', $data, true);
		$this->load->view('template', $data);
	}
	
	public function registrar()
	{
	    $data['title'] = "Registrar unidad de medida";
	    $data['content'] = $this->load->view('unidades/editar', $data, true);
		$this->load->view('template', $data);
	}
	
	public function editar($id)
	{
		$this->load->model('Unidad','',true);
		$data['unidad'] = $this->Unidad->get_unidad($id);
	    $data['title'] = "Editar unidad de medida";
	    $data['content'] = $this->load->view('unidades/editar', $data, true);
		$this->load->view('template', $data);
	}
	
	public function guardar($id = null)
	{
		$this->load->model('Unidad','',true);
	    if(!is_null($id)) {
			$result = $this->Unidad->update($id);
	    } else {
			$result = $this->Unidad->insert();
	    }
		$this->session->set_flashdata('result', $result);
		$this->session->set_flashdata('message', ($result == 1) ? "Guardado" : "No guardado");
		redirect('/unidades','redirect');
	}
	
	public function eliminar($id)
	{
		$this->load->model('Unidad','',true);
		$result = $this->Unidad->delete($id);
		$this->session->set_flashdata('result', $result);
		$this->session->set_flashdata('message', ($result == 1) ? "Eliminado" : "No eliminado");
		redirect('/unidades','redirect');
	}
}