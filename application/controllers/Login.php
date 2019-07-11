<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}


	public function index()
	{
		$data['title'] = 'Login';
		$this->load->view('auth/layout/header', $data);
		$this->load->view('auth/login');
		$this->load->view('auth/layout/footer');

	}
}
