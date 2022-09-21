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

	function asistencias($id)
	{
		$sql = "
		select v.gen_date, m.`time`  
			from
				(select adddate('2020-01-01', t3*1000 + t2*100 + t1*10 + t0) gen_date from
				(select 0 t0 union select 1 union select 2 union select 3 union select 4 union select 5 union select 6 union select 7 union select 8 union select 9) t0,
				(select 0 t1 union select 1 union select 2 union select 3 union select 4 union select 5 union select 6 union select 7 union select 8 union select 9) t1,
				(select 0 t2 union select 1 union select 2 union select 3 union select 4 union select 5 union select 6 union select 7 union select 8 union select 9) t2,
				(select 0 t3 union select 1 union select 2 union select 3 union select 4 union select 5 union select 6 union select 7 union select 8 union select 9) t3) v
			left join planilla p on (p.id_planilla ={$id})
			left join marcado m on (gen_date = date(m.`time`) and m.ac_no  = p.dip)     
			Where year(gen_date) = p.planilla_anio and month(gen_date) = p.planilla_mes_num
			order by gen_date, m.time
		;  
		";
		$query = $this->db->query($sql);
		return $query->result();
	}
}
?>
