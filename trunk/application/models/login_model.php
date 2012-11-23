<?php
class Login_Model extends CI_Model{
	
	//check for jobseeker login
	public function validate_jobseeker(){
		$this->db->where('username',$this->input->post('username'));
		$this->db->where('password',$this->input->post('password'));
		$query = $this->db->get('persons');
		
		if($query->num_rows == 1)
		{
			foreach($query->result() as $rows)
			{
				$data[] = $rows;
			}
		}
		else { $data = array();}
		return $data;
	}
	//check for employer login
	public function validate_employer(){
		$this->db->where('username',$this->input->post('username'));
		$this->db->where('password',$this->input->post('password'));
		$query = $this->db->get('employee');
		
			if($query->num_rows == 1)
			{
				foreach($query->result() as $rows)
				{
					$data[] = $rows;
				}
			}
			else { $data = array();}
		return $data;
		
	}
}