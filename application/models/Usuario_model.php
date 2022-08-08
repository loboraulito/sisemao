<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuario_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getAll()
	{
		$sql = "
		select *
			from public.usuario
		;
		";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function get($id)
	{
		$sql = "
		select *
			from public.usuario t
			where t.id_usuario = {$id}
		;
		";
		$query = $this->db->query($sql);
		return $query->row();
	}

	public function verificar($usuario,$clave)
	{
		$sql = "
		select *
			from public.usuario u
			where 
				u.id_estado
				and u.usuario = '{$usuario}'
				and u.clave = md5('{$clave}')
		;
		";
		$query = $this->db->query($sql);
		return $query->row();
	}
	
	function insert($data)
    {
        $this->db->set($data);
        $this->db->insert('public.usuario',$data);
    }

    function update($id, $data)
    {
        $this->db->where('id_usuario', $id);
        $this->db->update('public.usuario', $data);        
    }

    function delete($id)
    {   
        $data=array('estado'=>'I');
		$this->db->where('id_usuario', $id);
        $this->db->update('public.usuario', $data); 
    }

}
