<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

	public function index()
	{

		$this->load->view('auth/layout/header');
		$this->load->view('auth/login');
		$this->load->view('auth/layout/footer');

	}

}