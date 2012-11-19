<?php
class Dropdown extends CI_Model{
	
	public function dropdown_job(){
		$this->db->select('idJobTitles,jobTitle');
		$record = $this->db->get('job_titles');
		
		$data = array();
		$data[0] = 'SELECT';
		foreach($record->result() as $row){
			$data[$row->idJobTitles] = $row->jobTitle;
		}
		return ($data);
	}
	
	public function dropdown_education(){
		$this->db->select('idEducationLevel,educationLevel');
		$record = $this->db->get('education_levels');
		
		$data = array();
		$data[0] = 'SELECT';
		foreach($record->result() as $row){
			$data[$row->idEducationLevel] = $row->educationLevel;
		}
		return ($data);
	}
	
	public function dropdown_sector(){
		$this->db->select('idSectors,sectorTitle');
		$record = $this->db->get('sectors');
		
		$data = array();
		$data[0] = 'SELECT';
		foreach($record->result() as $row){
			$data[$row->idSectors] = $row->sectorTitle;
		}
		return($data);
	}
}