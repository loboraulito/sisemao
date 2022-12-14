<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Rol_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getAll()
	{
		$sql = "
		select *
			from rol
		;
		";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function get($id)
	{
		$sql = "
		select *
			from rol t
			where t.id_rol = {$id}
		;
		";
		$query = $this->db->query($sql);
		return $query->row();
	}

	function insert($data)
	{
		$this->db->set($data);
		$this->db->insert('rol', $data);
	}

	function update($id, $data)
	{
		$this->db->where('id_rol', $id);
		$this->db->update('rol', $data);
	}

	function delete($id)
	{
		$data = array('estado' => 'I');
		$this->db->where('id_rol', $id);
		$this->db->update('rol', $data);
	}
}
?>
