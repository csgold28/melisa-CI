<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reg_member extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');

		$this->load->model('Provinces');
		$this->load->model('Regencies');
	}

	public function index()
	{
		$listprovinsi = ['provinsi'] = $this->Provinces->view();
		$data['title'] = 'Daftar Member';
		$this->load->view('auth/layout/header', $data);
		$this->load->view('auth/register', $listprovinsi);
		$this->load->view('auth/layout/footer');
	}

	
}