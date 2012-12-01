<?php
class Dropdown extends CI_Model{
	
	//retrieve values from the database
	
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
	
	public function dropdown_employmentLevel(){
		$this->db->select('idLevelsOfEmployment,employmentLevel');
		$record = $this->db->get('employment_levels');
		
		$data = array();
		$data[0] = 'SELECT';
		foreach($record->result() as $row){
			$data[$row->idLevelsOfEmployment] = $row->employmentLevel;
		}
		return($data);
	}
	
	public function dropdown_sectors(){
		$this->db->select('idSectors,sectorTitle');
		$record = $this->db->get('sectors');
		
		$data = array();
		$data[0] = 'SELECT';
		foreach($record->result() as $row){
			$data[$row->idSectors] = $row->sectorTitle;
		}
		return ($data);
	}
}