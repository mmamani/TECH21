<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Productos extends CI_Controller {
	
	public function __construct() {
		
		parent::__construct();
		$this->load->library(array('session', 'parser'));
		$this->load->helper('url');
	}

	public function index()
	{
	    $this->load->model('Producto','',true);
        $data['productos'] = $this->Producto->get();
        $data['title'] = "Productos";
		$data['content'] = $this->load->view('productos/index', $data, true);
        $this->load->view('template', $data);
	}
	
	public function registrar()
	{
		$data['title'] = 'Registrar Producto';
		$data['content'] = $this->load->view('productos/editar',$data,true);
		$this->load->view('template',$data);
	}
	
	public function editar($id)
	{
		$this->load->model('Producto','',true);
		$data['producto'] =$this->Producto->get_producto($id);
		$data['title'] ="Editar Producto";
		$data['content'] = $this->load->view('productos/editar',$data,true);
		$this->load->view('template',$data);
		
	}
	
	public function guardar($id = null)
	{
		$this->load->model('Producto','',true);
		if(!is_null($id)){
			$result=$this->Producto->update($id);
		} else {
			$result=$this->Producto->insert();
		}
		$this->session->set_flashdata('result',$result);
		$this->session->set_flashdata('message',($result==1) ? "Guardado" : "No guardado");
		redirect('/productos','redirect');
	}
	
	public function eliminar($id)
	{
		$this->load->model('Producto','',true);
		$result=$this->Producto->delete($id);
		$this->session->set_flashdata('result',$result);
		$this->session->set_flashdata('message',($result==1) ? "Eliminado" : "No eliminado");
		redirect('/productos','redirect');
	}
	
	
	
}