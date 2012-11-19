<?php
class Login_Model extends CI_Model{
	
	public function validate_jobseeker(){
		$this->db->where('username',$this->input->post('username'));
		$this->db->where('password',$this->input->post('password'));
		$query = $this->db->get('persons');
		
		if($query->num_rows == 1)
		{
			return true;
		}
	}
	
	public function validate_employee(){
		$this->db->where('username',$this->input->post('username'));
		$this->db->where('password',$this->input->post('password'));
		$query = $this->db->get('employee');
		
		if($query->num_rows == 1)
		{
			return true;
		}
	}
	
	
	
	/*public function checkLogin($username,$password){
		$valid = false;
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$result = $this->db->get('persons');
		if($result->num_rows() == 1){
			$valid = true;
		}
		return $valid;
	}*/
	
}