<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Marcado_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getAll()
	{
		$sql = "
		select *
			from marcado
		;
		";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function get($id)
	{
		$sql = "
		select *
			from marcado t
			where t.id_marcado = {$id}
		;
		";
		$query = $this->db->query($sql);
		return $query->row();
	}

	function insert($data)
	{
		$this->db->insert('marcado', $data);
	}

	function update($id, $data)
	{
		$this->db->where('id_marcado', $id);
		$this->db->update('marcado', $data);
	}

	function buscar_duplicado($data){
		$sql = "
		select *
			from marcado
			where 
				`ac_no` = '{$data['ac_no']}'
				and `time` = '{$data['time']}'
				and `state` = '{$data['state']}'
				and `new_state` = '{$data['new_state']}'
				and `exception` = '{$data['exception']}'
				and `operation` = '{$data['operation']}'
			;
		";
		$query = $this->db->query($sql);
		return $query->result();
	}
}
?>
