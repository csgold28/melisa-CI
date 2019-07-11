<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Provinces extends CI_Model
	{
		public function view()
		{
			return $this->db->get('provinces');
		}

	}