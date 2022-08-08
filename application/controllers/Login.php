<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('rol_model');
		$this->load->model('usuario_model');
	}

	public function index($error=null)
	{
		$roles=$this->rol_model->getAll();
		$data['roles']=$roles;
		$data['error']=$error;
		$this->load->view('login',$data);
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
