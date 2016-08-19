<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class User_model extends CI_Model{
		public function insert($name, $pass){
			$data = array(
				'name'=>$name,
				'pass'=>$pass
			);
			$query = $this->db->insert('user', $data);
			return $query;
		}
		public function verify_login($name, $pass){
			$data = array(
				'name' => $name,
				'pass' => $pass
			);
			$query = $this->db->get_where('user', $data);
			return $query->row();
		}
	}
?>