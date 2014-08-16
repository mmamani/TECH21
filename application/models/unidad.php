<?php

class Unidad extends CI_Model {
	public $id_unidad;
	public $nombre;
	
	function __construct()
	{
	    parent::__construct();
	}
	
	function get()
	{
	    $query = $this->db->get('unidades');
	    return $query->result();
	}
	
	function get_unidad($id)
	{
	    $query = $this->db->get_where('unidades', array('id_unidad'=>$id));
	    return $query->row();
	}
	
	function insert()
	{
	    $this->id_unidad = $this->input->post('id_unidad');
		$this->nombre = $this->input->post('nombre');
		return $this->db->insert('unidades', $this);
	}
	
	function update($id)
	{
		unset($this->id_unidad);
		$this->nombre = $this->input->post('nombre');
		return $this->db->update('unidades', $this, array('id_unidad' => $id));
	}
	
	function delete($id)
	{
		return $this->db->delete('unidades', array('id_unidad' => $id));
	}
}