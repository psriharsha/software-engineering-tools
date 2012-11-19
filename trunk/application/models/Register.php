<?php
class register extends CI_Model{
	
	public function createJobseeker($data){
		$this->db->insert('persons',$data);
		return;
	}
}