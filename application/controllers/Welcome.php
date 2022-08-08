<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('rol_model');
	}

	public function index()
	{
		$roles=$this->rol_model->getAll();
		$data['roles']=$roles;
		$this->load->view('welcome_message',$data);
	}
}
