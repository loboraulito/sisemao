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

	public function getLast1000()
	{
		$sql = "
		select *
			from marcado
		order by id_marcado desc
		limit 1000
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

	function dias_trabajados($id_planilla){
		$sql = "
		select count(*)/2 as dias_trabajados
			from marcado m 
				join planilla p on (p.planilla_mes_num = MONTH(m.`time`) and p.planilla_anio =YEAR(m.`time`))
				join grupo_marcado gm on (gm.id_grupo_marcado = p.id_grupo_marcado)
				join grupo_marcado_horarios gmh on (gm.id_grupo_marcado = gmh.id_grupo_marcado  and gmh.dia = DAYOFWEEK(m.`time`))  
			where m.ac_no = p.dip 
				and m.`exception` = 'OK'
				and m.state = 'C/In'
				and p.id_planilla = {$id_planilla}
		;
		";
		$query = $this->db->query($sql);
		return $query->row();
	}
}
?>
