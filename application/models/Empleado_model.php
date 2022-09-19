<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Empleado_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getAll()
	{
		$sql = "
		select *
			from empleado
		;
		";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function get($id)
	{
		$sql = "
		select *
			from empleado t
			where t.id_empleado = {$id}
		;
		";
		$query = $this->db->query($sql);
		return $query->row();
	}

	function insert($data)
	{
		$this->db->set($data);
		$this->db->insert('empleado', $data);
	}

	function update($id, $data)
	{
		$this->db->where('id_empleado', $id);
		$this->db->update('empleado', $data);
	}
	public function getProximosContratosFenecer()
	{
		$sql = "
		select p.nombres, p.paterno, p.materno  , p.fecha_retiro 
			from planilla p
				join planilla_gestion pg on (p.planilla_anio =pg.gestion and p.planilla_mes_num = pg.mes)
			where p.fecha_retiro
			group by p.nombres, p.paterno, p.materno  , p.fecha_retiro
			order by pg.gestion, pg.mes, p.fecha_retiro
			limit 50
		;
		";
		$query = $this->db->query($sql);
		return $query->result();
	}
}
?>
