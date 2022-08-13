<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Planilla extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('planilla_model');
	}

	public function index($error = null)
	{
		$data['error'] = $error;
		$data['planillas'] = $this->planilla_model->getAll();
		$this->load->view('planilla/index', $data);
	}

	public function nuevo()
	{
		$data = $this->input->post();
		$this->planilla_model->insert($data);
	}

	public function actualizarVariables($id_planilla)
	{
		$planilla = $this->planilla_model->get($id_planilla);

		$planilla->total_tonelaje3 = ($planilla->total_tonelaje_tripulacion + $planilla->p_bb + $planilla->total_tonelaje + $planilla->p_aw); //BE
		$planilla->total_dias_trabajados = ($planilla->haber_basico/30 * $planilla->dias_pagados); //AF
		$planilla->bono_antiguedad = (2250 * $planilla->porcentaje_bono_antiguedad); //AI
		$planilla->monto_horas_extra = ($planilla->haber_basico /30 /8) * $planilla->horas_extra *2; //AK

			$planilla->dias = $planilla->haber_basico / 30; //AE
		$planilla->monto_horas_recargo_nocturno = (($planilla->horas_recargo_nocturno * 8) * ($planilla->dias / 8)) + 0.4; //AM
		$planilla->monto_feriados = (($planilla->feriados * 8) * ($planilla->haber_basico / 30 / 8)) * 2; //AO
		$planilla->monto_domintos_trabajados = (($planilla->domintos_trabajados * 8) * ($planilla->haber_basico / 30 / 8)) * 2; //AR

			$planilla->p_av = $planilla->total_tonelaje * 2.1; //AV
			$planilla->p_ax = $planilla->p_aw * 2.2; //AX
			$planilla->p_ba = $planilla->total_tonelaje_tripulacion * 2; //BA
			$planilla->p_bc = $planilla->p_bb * 2.1; //BC
		$planilla->monto_a_cancelar_tonelaje = ($planilla->p_av + $planilla->p_ax + $planilla->p_ba + $planilla->p_bc); //BF

			$planilla->total_ganado =
				(
					$planilla->total_dias_trabajados
					+ $planilla->bono_antiguedad
					+ $planilla->monto_horas_extra
					+ $planilla->monto_horas_recargo_nocturno
					+ $planilla->monto_feriados
					+ $planilla->pagos_2
					+ $planilla->monto_domintos_trabajados
					+ $planilla->monto_a_cancelar_tonelaje); //BG
		$planilla->cot_mens_afp = ($planilla->total_ganado * 0.1 /*10%*/ ); //BH

			$planilla->edad = date_diff(date_create($planilla->fecha_nacimiento), date_create('now'))->y; //F
		//BI
		if($planilla->edad >= 65){
			$planilla->r_comun_afp = 0; //BI
		}
		else{
			$planilla->r_comun_afp = ($planilla->total_ganado * 0.0171 /*1.71%*/ ); //BI
		}
		$planilla->comision_afp = $planilla->total_ganado * 0.005 /*0.5% */; //BJ
		$planilla->apo_sol_afp = $planilla->total_ganado * 0.005 /*0.5% */; //BK
		$planilla->aporte_sindicato = $planilla->haber_basico * 0.01 /*1% */; //BM
		$planilla->monto_faltas = ($planilla->haber_basico /30 ) * $planilla->faltas; //BQ
		$planilla->monto_abandonos = ($planilla->haber_basico /30 ) * $planilla->abandones; //BS
		$planilla->total_retrasos = ( (int)($planilla->retrasos / 4) ) * ($planilla->total_dias_trabajados / 30) / 2; //BU
		$planilla->monto_fuera_de_horario = ($planilla->haber_basico / 30) * $planilla->marcacion_fuera_de_horario / 2; //BO
		$planilla->otros_descuentos = ($planilla->monto_abandonos * 2); //BO ?????
	}

	public function editar($id)
	{
		$data = $this->input->post();
		//print_r($data);
		//if(!empty($data['fecha_retiro']) || $data['fecha_retiro']=='')unset($data['fecha_retiro']);
		foreach ($data as $clave => $valor)
    		if(!empty($data['fecha_retiro']) || $valor=='') $data[$clave] = null;
		$this->planilla_model->update($id, $data);
	}

	public function borrar($id)
	{
		$this->planilla_model->delete($id);
	}

	public function activar($id)
	{
		$this->planilla_model->activar($id);
	}

	public function verificar_ci($estado)
	{
		$ci = $this->input->get('ci');
		$existe = $this->planilla_model->get_buscar_ci($ci);

		if ((!$existe && $estado != 1) || ($estado == 1 && $existe->ci == $ci)) {
			$this->output->set_status_header('200');
		} else $this->output->set_status_header('404');
	}

	public function imprimir($id_planilla)
	{
		$planilla = $this->planilla_model->get($id_planilla);

		$this->load->library('Pdf');
		$pdf = new Pdf('P', 'mm', 'usletter', true, 'UTF-8', false); // 'I'' es para horizon;a pagina horizontal 'P' vertical
		// set document information
		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor('SisEMAO');
		$pdf->SetTitle('SisEMAO');
		$pdf->SetSubject('SisEMAO');
		$pdf->SetKeywords('SisEMAO planilla imprimir');

		// set default header data
		$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, 'SisEMAO', 'SisEMAO', array(
			0,
			0,
			0
		), array(
			0,
			64,
			128
		));
		$pdf->setFooterData(array(
			0,
			64,
			0
		), array(
			0,
			64,
			128
		));

		// set header and footer fonts
		$pdf->setHeaderFont(array(
			PDF_FONT_NAME_MAIN,
			'',
			PDF_FONT_SIZE_MAIN
		));
		$pdf->setFooterFont(array(
			PDF_FONT_NAME_DATA,
			'',
			PDF_FONT_SIZE_DATA
		));

		// set default monospaced font
		$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

		// set margins
		$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
		$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
		$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

		// set auto page breaks
		$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

		// set image scale factor
		$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

		// set some language-dependent strings (optional)
		if (@file_exists(dirname(__FILE__) . '/lang/eng.php')) {
			require_once(dirname(__FILE__) . '/lang/eng.php');
			$pdf->setLanguageArray($l);
		}

		// ---------------------------------------------------------

		// set default font subsetting mode
		$pdf->setFontSubsetting(true);

		// Set font
		// dejavusans is a UTF-8 Unicode font, if you only need to
		// print standard ASCII chars, you can use core fonts like
		// helvetica or times to reduce file size.
		// $pdf->SetFont('dejavusans', '', 14, '', true);

		// Add a page
		// This method has several options, check the source code documentation for more information.
		$pdf->AddPage();

		$pdf->SetFont('helvetica', '', 7);
		$mes = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
		// $nro = 1;

		// $texto = '';

		// $resul = print_r($planilla);
		$fecha= date("Y-m-d");
		$nummes= $planilla->planilla_mes_num;
		$html = '
		
		<table class="tg">
		<tbody>
		  <tr>
			<td class="tg-0lax"></td>
			<td class="tg-0lax" colspan="4" rowspan="4"></td>
			<td class="tg-0lax" colspan="4">EMPRESA MUNICIPAL DE ASEO ORURO</td>
			<td class="tg-0lax" colspan="3">'.$fecha.'</td>
			<td class="tg-0lax"></td>
		  </tr>
		  <tr>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax" colspan="3">Gestion :   '.$planilla->planilla_anio.'</td>
			<td class="tg-0lax"></td>
		  </tr>
		  <tr>
			<td class="tg-0lax"></td>
			<td class="tg-0lax" colspan="4">PAPELETA DE PAGO DE HABERES</td>
			<td class="tg-0lax" colspan="3">'.$mes[$nummes-1].'</td>
			<td class="tg-0lax"></td>
		  </tr>
		  <tr>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax" colspan="3">PLANILLA '.$planilla->id_planilla.'</td>
			<td class="tg-0lax"></td>
		  </tr>
		  <tr>
			<td class="tg-0lax" colspan="3">Fecha Ingreso:</td>
			<td class="tg-0lax" colspan="4">'.$planilla->fecha_ingreso.'</td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
		  </tr>
		  <tr>
			<td class="tg-0lax" colspan="3">CORRESPONDIENTE AL MES DE:</td>
			<td class="tg-0lax" colspan="4">'.$mes[$nummes-1].' '.$planilla->planilla_anio.'</td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
		  </tr>
		  <tr>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
		  </tr>
		  <tr>
			<td class="tg-0lax" colspan="6">APELLIDOS Y NOMBRES</td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax" colspan="6">PUESTO<br></td>
		  </tr>
		  <tr>
			<td class="tg-0lax" colspan="6">'.$planilla->paterno.' '.$planilla->materno.' '.$planilla->nombres.'</td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax" colspan="6">'.$planilla->cargo.'</td>
		  </tr>
		  <tr>
			<td class="tg-0lax" colspan="6">PERCEPCIONES</td>
			<td class="tg-0lax" colspan="4">DEDUCCIONES</td>
			<td class="tg-0lax">IMPORTE<br></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
		  </tr>
		  <tr>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax">IVA</td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax">'.$planilla->rc_iva.'</td>
			<td class="tg-0lax"></td>
		  </tr>
		  <tr>
			<td class="tg-0lax">'.$planilla->dias_pagados.'</td>
			<td class="tg-0lax" colspan="3">HABER MENSUAL</td>
			<td class="tg-0lax" colspan="2">'.$planilla->total_dias_trabajados.'</td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax">TOTAL AFP<br></td>
			<td class="tg-0lax">'.($planilla->cot_mens_afp+$planilla->r_comun_afp+$planilla->comision_afp+$planilla->apo_sol_afp).'</td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
		  </tr>
		  <tr>
			<td class="tg-0lax"></td>
			<td class="tg-0lax" colspan="3">BONO ANTIGÜEDAD</td>
			<td class="tg-0lax" colspan="2">'.$planilla->bono_antiguedad.'</td>
			<td class="tg-0lax" colspan="4">AP VEJEZ AFP 10%</td>
			<td class="tg-0lax">'.$planilla->cot_mens_afp.'</td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
		  </tr>
		  <tr>
			<td class="tg-0lax">'.$planilla->horas_extra.'</td>
			<td class="tg-0lax" colspan="3">HORAS EXTRAS</td>
			<td class="tg-0lax" colspan="2">'.$planilla->monto_horas_extra.'</td>
			<td class="tg-0lax" colspan="4">RCOMUN AFP 1,71%</td>
			<td class="tg-0lax">'.$planilla->r_comun_afp.'</td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
		  </tr>
		  <tr>
			<td class="tg-0lax">'.$planilla->horas_recargo_nocturno.'</td>
			<td class="tg-0lax" colspan="3">RECARGO NOCTURNO</td>
			<td class="tg-0lax" colspan="2">'.$planilla->monto_horas_recargo_nocturno.'</td>
			<td class="tg-0lax" colspan="4">COM AFP 0,5%</td>
			<td class="tg-0lax">'.$planilla->comision_afp.'</td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
		  </tr>
		  <tr>
			<td class="tg-0lax">'.$planilla->feriados.'</td>
			<td class="tg-0lax" colspan="3">FERIADOS</td>
			<td class="tg-0lax" colspan="2">'.$planilla->monto_feriados.'</td>
			<td class="tg-0lax" colspan="4">SOLIDARIO AFP 05%</td>
			<td class="tg-0lax">'.$planilla->apo_sol_afp.'</td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
		  </tr>
		  <tr>
			<td class="tg-0lax">'.$planilla->domintos_trabajados.'</td>
			<td class="tg-0lax" colspan="3">DOMINGOS TRABAJADOS</td>
			<td class="tg-0lax" colspan="2">'.$planilla->monto_domintos_trabajados.'</td>
			<td class="tg-0lax" colspan="4">APORTE SINDICATO</td>
			<td class="tg-0lax">'.$planilla->aporte_sindicato.'</td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
		  </tr>
		  <tr>
			<td class="tg-0lax">'.$planilla->total_tonelaje3.'</td>
			<td class="tg-0lax" colspan="3">TONELAJE</td>
			<td class="tg-0lax" colspan="2">'.$planilla->monto_a_cancelar_tonelaje.'</td>
			<td class="tg-0lax" colspan="4">MULTA SINDICATO</td>
			<td class="tg-0lax">'.$planilla->multas_sindicato.'</td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
		  </tr>
		  <tr>
			<td class="tg-0lax"></td>
			<td class="tg-0lax" colspan="3">OTROS PAGOS</td>
			<td class="tg-0lax" colspan="2">'.$planilla->pagos_2.'</td>
			<td class="tg-0lax">'.$planilla->faltas.'</td>
			<td class="tg-0lax" colspan="3">FALTAS</td>
			<td class="tg-0lax">'.$planilla->monto_faltas.'</td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
		  </tr>
		  <tr>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax">'.$planilla->abandones.'</td>
			<td class="tg-0lax" colspan="3">ABANDONOS</td>
			<td class="tg-0lax">'.$planilla->monto_abandonos.'</td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
		  </tr>
		  <tr>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax">'.$planilla->retrasos.'</td>
			<td class="tg-0lax" colspan="3">RETRASOS</td>
			<td class="tg-0lax">'.$planilla->total_retrasos.'</td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
		  </tr>
		  <tr>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax">'.$planilla->marcacion_fuera_de_horario.'</td>
			<td class="tg-0lax" colspan="3">MARCACION FUERA DE HORARIO</td>
			<td class="tg-0lax">'.$planilla->monto_fuera_de_horario.'</td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
		  </tr>
		  <tr>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax" colspan="3">OTROS DESCUENTOS</td>
			<td class="tg-0lax"'.$planilla->otros_descuentos.'></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
		  </tr>
		  <tr>
			<td class="tg-0lax" colspan="4">TOTAL PERCEPCIONES</td>
			<td class="tg-0lax" colspan="2"></td>
			<td class="tg-0lax" colspan="4">TOTAL DEDU</td>
			<td class="tg-0lax">SUM</td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
		  </tr>
		  <tr>
			<td class="tg-0lax" colspan="4">IVA FAVOR CONT</td>
			<td class="tg-0lax" colspan="2">0</td>
			<td class="tg-0lax" colspan="4">LIQUI</td>
			<td class="tg-0lax">TOT-DEDU</td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
		  </tr>
		  <tr>
			<td class="tg-0lax"></td>
			<td class="tg-0lax">SON:</td>
			<td class="tg-0lax" colspan="2">aaaa</td>
			<td class="tg-0lax" colspan="2">BOLIVIANOS</td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
		  </tr>
		  <tr>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
		  </tr><br>
		  <br><br><br><br><br>
		  <tr>
			<td class="tg-0lax">CI:</td>
			<td class="tg-0lax">'.$planilla->dip.'</td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax" colspan="5">FIRMA .............................<br></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
		  </tr>
		  <tr>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
		  </tr>
		  <tr>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
		  </tr>
		  <tr>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
		  </tr>
		  <tr>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
			<td class="tg-0lax"></td>
		  </tr>
		</tbody>
		</table>
';

		// Print text using writeHTMLCell()
		$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

		// ---------------------------------------------------------

		// Close and output PDF document
		// This method has several options, check the source code documentation for more information.
		ob_end_clean();
		$pdf->Output('pdfexample.pdf', 'I');
	}
}
