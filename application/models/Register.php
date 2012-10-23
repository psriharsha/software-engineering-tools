<?php
class Register extends CI_Model{
	
	public function checkLogin($username,$password){
		$valid = false;
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$result = $this->db->get('persons');
		if($result->num_rows() == 1){
			$valid = true;
		}
		return $valid;
	}
	
}