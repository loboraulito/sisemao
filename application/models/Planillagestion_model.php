<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Planillagestion_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getAll()
	{
		$sql = "
		select *
			from planilla_gestion
		;
		";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function get($id)
	{
		$sql = "
		select *
			from planilla_gestion t
			where t.id_planilla_gestion = {$id}
		;
		";
		$query = $this->db->query($sql);
		return $query->row();
	}

	function insert($data)
	{
		$this->db->set($data);
		$this->db->insert('planilla_gestion', $data);
	}

	function update($id, $data)
	{
		$this->db->where('id_planilla_gestion', $id);
		$this->db->update('planilla_gestion', $data);
	}

	function delete($id)
	{
		$data = array('estado' => 'I');
		$this->db->where('id_planilla_gestion', $id);
		$this->db->update('planilla_gestion', $data);
	}

	function duplicar($id, $data)
	{
		$origen = $this->get($id);
		$this->insert($data);
		$sql = "
		INSERT INTO sisemao.planilla
(tipo_documento, dip, `exp`, fecha_nacimiento, edad, turno, paterno, materno, nombres, pais, sexo, jubilado, aporte_afp, discapacidad, tutor, fecha_ingreso, fecha_retiro, motivo_retiro, caja_salud, afp_aporta, nua_cua, sucursal, clasificacion, cargo, modalidad_contrato, tipo_contrato, dias_pagados, horas_pagadas, haber_basico, dias, total_dias_trabajados, anios_antiguedad, porcentaje_bono_antiguedad, bono_antiguedad, horas_extra, monto_horas_extra, horas_recargo_nocturno, monto_horas_recargo_nocturno, feriados, monto_feriados, pagos_2, domintos_trabajados, monto_domintos_trabajados, toneladas, monto_toneladas, total_tonelaje, p_av, p_aw, p_ax, bono_produccion, total_tonelaje_tripulacion, p_ba, p_bb, p_bc, total_tonelaje2, total_tonelaje3, monto_a_cancelar_tonelaje, total_ganado, cot_mens_afp, r_comun_afp, comision_afp, apo_sol_afp, aporte_afp2, aporte_sindicato, marcacion_fuera_de_horario, monto_fuera_de_horario, faltas, monto_faltas, abandones, monto_abandonos, retrasos, total_retrasos, multas_sindicato, apoyo_trabajador, retencion_judicial, otros_descuentos, rc_iva, finiquito, total_descuentos, total_cancelar, centros_de_costo, cuenta, centros_de_costo_2, nombre_planilla_asistencia, planilla_mes_num, planilla_anio, estado_marcados)
SELECT tipo_documento, dip, `exp`, fecha_nacimiento, edad, turno, paterno, materno, nombres, pais, sexo, jubilado, aporte_afp, discapacidad, tutor, fecha_ingreso, fecha_retiro, motivo_retiro, caja_salud, afp_aporta, nua_cua, sucursal, clasificacion, cargo, modalidad_contrato, tipo_contrato, dias_pagados, horas_pagadas, haber_basico, dias, total_dias_trabajados, anios_antiguedad, porcentaje_bono_antiguedad, bono_antiguedad, horas_extra, monto_horas_extra, horas_recargo_nocturno, monto_horas_recargo_nocturno, feriados, monto_feriados, pagos_2, domintos_trabajados, monto_domintos_trabajados, toneladas, monto_toneladas, total_tonelaje, p_av, p_aw, p_ax, bono_produccion, total_tonelaje_tripulacion, p_ba, p_bb, p_bc, total_tonelaje2, total_tonelaje3, monto_a_cancelar_tonelaje, total_ganado, cot_mens_afp, r_comun_afp, comision_afp, apo_sol_afp, aporte_afp2, aporte_sindicato, marcacion_fuera_de_horario, monto_fuera_de_horario, faltas, monto_faltas, abandones, monto_abandonos, retrasos, total_retrasos, multas_sindicato, apoyo_trabajador, retencion_judicial, otros_descuentos, rc_iva, finiquito, total_descuentos, total_cancelar, centros_de_costo, cuenta, centros_de_costo_2, nombre_planilla_asistencia, {$data['mes']} as planilla_mes_num, {$data['gestion']} as planilla_anio, estado_marcados
			from planilla p 
				where p.planilla_anio = {$origen->gestion}
				and p.planilla_mes_num = {$origen->mes}
				and 
					(
						p.fecha_retiro > '{$data['gestion']}-{$data['mes']}-01'
						or p.fecha_retiro is NULL
					)
		;
		";
		$query = $this->db->query($sql);
	}
}
