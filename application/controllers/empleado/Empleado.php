<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Empleado extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('empleado_model');
	}

	public function index($error = null)
	{
		$data['empleados'] = $this->empleado_model->getAll();
		$this->load->view('empleado/index', $data);
	}

	public function nuevo()
	{
		$data = $this->input->post();
		$this->empleado_model->insert($data);
	}

	public function update()
	{
		$data = $this->input->post();
		$this->empleado_model->update($data);
	}
}
