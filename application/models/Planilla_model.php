
<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Planilla_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getAll()
	{
		$sql = "
		select *
			from public.planilla
		;
		";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function get($id)
	{
		$sql = "
		select *
			from public.planilla t
			where t.id_planilla = {$id}
		;
		";
		$query = $this->db->query($sql);
		return $query->row();
	}

	function insert($data)
	{
		$this->db->set($data);
		$this->db->insert('public.planilla', $data);
	}

	function update($id, $data)
	{
		$this->db->where('id_planilla', $id);
		$this->db->update('public.planilla', $data);
	}

	function delete($id)
	{
		$data = array('estado' => 'I');
		$this->db->where('id_planilla', $id);
		$this->db->update('public.planilla', $data);
	}
}
