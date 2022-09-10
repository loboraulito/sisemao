<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('empleado_model');
	}

	public function index($error=null)
	{
		$data=[];
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
