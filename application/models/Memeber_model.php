<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member_model extends CI_Model {

	function register($data)
	{
		$this->db->insert('users', $data);
	}

}