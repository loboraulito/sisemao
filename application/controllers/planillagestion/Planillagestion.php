<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Planillagestion extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('planillagestion_model');
	}

	public function index($error = null)
	{
		$data['planillagestiones'] = $this->planillagestion_model->getAll();
		$this->load->view('planillagestion/index', $data);
	}

	public function nuevo()
	{
		$data = $this->input->post();
		$this->planillagestion_model->insert($data);
	}

	public function update()
	{
		$data = $this->input->post();
		$this->planillagestion_model->update($data);
	}

	public function duplicar($id)
	{
		$data = $this->input->post();
		$this->planillagestion_model->duplicar($id,$data);
	}
}
