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
			from planilla
		;
		";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function getById_planilla_gestion($id_planilla_gestion)
	{
		$sql = "
		select *
			from planilla p 
				join planilla_gestion pg on (pg.gestion = p.planilla_anio and pg.mes = p.planilla_mes_num)
			where pg.id_planilla_gestion = {$id_planilla_gestion}
		;
		";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function get($id)
	{
		$sql = "
		select *
			from planilla t
			where t.id_planilla = {$id}
		;
		";
		$query = $this->db->query($sql);
		return $query->row();
	}

	function insert($data)
	{
		$this->db->set($data);
		$this->db->insert('planilla', $data);
	}

	function update($id, $data)
	{
		$this->db->where('id_planilla', $id);
		$this->db->update('planilla', $data);
	}

	function delete($id)
	{
		$data = array('estado' => 'I');
		$this->db->where('id_planilla', $id);
		$this->db->update('planilla', $data);
	}
}
