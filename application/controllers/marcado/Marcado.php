<?php
defined('BASEPATH') or exit('No direct script access allowed');
require FCPATH.'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Marcado extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('marcado_model');
	}

	public function index($error = null)
	{
		$data['marcados'] = $this->marcado_model->getLast1000();
		$this->load->view('marcado/index', $data);
	}

	public function nuevo()
	{
		$data = $this->input->post();
		$this->marcado_model->insert($data);
	}

	public function update()
	{
		$data = $this->input->post();
		$this->marcado_model->update($data);
	}

	public function upload_descargo()
	{
		$this->output->set_content_type('application/json');
		$json = array();

		if ($_FILES['userfile']['size'] > 0) {
			// unlink( realpath($contrato->url) );
			//$file_tesis = sprintf('%06d_%06d', $tesis->id_tesis, $tesis->id_tesista);
			//
			$config = array(
				'allowed_types'		=> 'csv',
				'max_size'			=> '10240',
				'file_ext_tolower'	=> true,
				'overwrite'			=> true,
				'upload_path'		=> 'uploads/',
			);
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('userfile')) {
				$json['error'] = $this->upload->display_errors();
				$this->output->set_status_header(500);
			} else {
				$data = $this->upload->data();
				if (false) {
					$json['error'] = "No se pudo guardar su Archivo";
					$this->output->set_status_header(500);
				} else {
					$json['msg'] = "<b>Guardado:</b> \"Archivo Guardado\".";
					$this->output->set_status_header(200);
				}
			}
		} else {
			$json['error'] = "No se puede cargar un archivo vacío.";
			$this->output->set_status_header(500);
		}

		$this->output->set_output(json_encode($json));
	}

	function import_csv()
	{
		$registros = 0;
		$correctos =0;
		$erroneos = 0;
		if (isset($_POST["Import"])) {
			$filename = $_FILES["file"]["tmp_name"];
			if ($_FILES["file"]["size"] > 0) {
				$file = fopen($filename, "r");
				$registros = 0;
				$correctos =0;
				$erroneos = 0;
				while (($getData = fgetcsv($file, 10000, ",")) !== FALSE) {
					if ($registros > 0) {
						$data=[];
						$data['ac_no']=$getData[0];
						$data['no']=$getData[1];
						$data['name']=$getData[2];
						$data['time']=date('Y-m-d H:i:s',strtotime(str_replace('/', '-', $getData[3])));
						$data['state']=$getData[4];
						$data['new_state']=$getData[5];
						$data['exception']=$getData[6];
						$data['operation']=$getData[7];
						// print_r($data);
						if(!$this->marcado_model->buscar_duplicado($data)){
							print_r($data);
							$this->marcado_model->insert($data);
							$correctos ++;
						}else{
							$erroneos++;
						}
					}
				$registros++;
				}
				fclose($file);
				echo 'correctos'. $correctos;
				echo 'erroneos'. $erroneos;
			}
		}
	}

	function prueba_fecha()
	{
		$cadena = '4/7/2022 18:19';
		echo date('Y-m-d H:i:s',strtotime(str_replace('/', '-', $cadena)));
	}

	function prueba_excel(){
		$excel = new Spreadsheet();
		$hoja = $excel->getActiveSheet();
		$hoja->setCellValue('A1','Hello World!');
		$writer = new Xlsx($excel);
		$filename = 'Report';
		//ob_end_clean();
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="'.$filename.'.xlsx"');
		header('Cache-Control: max-age=0');
		$writer->save('php://output');
	}
}
