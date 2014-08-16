<?php
class Producto extends CI_Model {
	public $id_producto;
	public $nombre;
	public $marca;
	public $fecreg;
	public $id_unidad;
	public $id_categoria;
	public $tipo_producto;
	public $codigo;
		
	function __construct()
    {
        parent::__construct();
    }
	
	function get()
	{
	    $query = $this->db->get('productos');
	    return $query->result();
	}
	
	function get_producto($id)
	{
	    $query = $this->db->get_where('productos', array('id_producto'=>$id));
	    return $query->row();
	}
	
	function insert()
	{
	    $this->id_producto = $this->input->post('id_producto');
		$this->nombre = $this->input->post('nombre');
		$this->marca = $this->input->post('marca');
		$this->fecreg = $this->input->post('fecreg');
		$this->id_unidad = $this->input->post('id_unidad');
		$this->id_categoria = $this->input->post('id_categoria');
		$this->tipo_producto = $this->input->post('tipo_producto');
		$this->codigo =$this -> input ->post('codigo');
		return $this->db->insert('productos', $this);
	}
	
	function update($id)
	{
		unset($this->id_producto);
		$this->nombre=$this->input->post('nombre');
		$this->marca = $this->input->post('marca');
		$this->fecreg = $this->input->post('fecreg');
		$this->id_unidad = $this->input->post('id_unidad');
		$this->id_categoria = $this->input->post('id_categoria');
		$this->tipo_producto = $this->input->post('tipo_producto');
		$this->codigo =$this -> input ->post('codigo');
		return $this->db->update('productos', $this, array('id_producto'=>$id));
	}
	
	function delete($id)
	{
		return $this->db->delete('productos', array('id_producto'=>$id));
	}
	
}



