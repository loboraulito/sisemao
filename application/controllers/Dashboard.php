<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('empleado_model');
		$this->load->model('planillagestion_model');
	}

	public function index($error=null)
	{
		$data=[];
		$data["contratosexpirar"]=$this->empleado_model->getProximosContratosFenecer();
		$data['planillagestiones'] = $this->planillagestion_model->getAll();
		$this->load->view('dashboard',$data);
	}

	public function verificar()
	{
		$usuario = $this->input->post('usuario');
		$clave = $this->input->post('clave');
		$usu=$this->usuario_model->verificar($usuario,$clave);
		if(!empty($usu)){
			redirect(site_url("planilla/planilla/index"));
		}
		else{
			redirect(site_url("login/index/".'error'));
		}
	}
}
