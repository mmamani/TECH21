<?php

class Categoria extends CI_Model {
    
    public $id_categoria;
    public $nombre;

    function __construct()
    {
        parent::__construct();
    }
    
    function get()
    {
        $query = $this->db->get('categorias');
        return $query->result_array();
    }
	
	function get_categoria($id)
	{
	    $query = $this->db->get_where('categorias', array('id_categoria'=>$id));
	    return $query->row();
	}
    
    function insert()
	{
		$this->nombre = $this->input->post('nombre');
		return $this->db->insert('categorias', $this);
	}
	
	function update($id)
	{
		unset($this->id_categoria);
		$this->nombre = $this->input->post('nombre');
		return $this->db->update('categorias', $this, array('id_categoria' => $id));
	}
	
	function delete($id)
	{
		return $this->db->delete('categorias', array('id_categoria' => $id));
	}
}