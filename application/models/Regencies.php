<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regencies extends CI_Model
	{
		public function viewByProvinces($province_id)
		{
			$this->db->where('provinces_id', $provinces_id);

			$result = $this->db->get('regencies')->result();

			return $result;
		}

	}
