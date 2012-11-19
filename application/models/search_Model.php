<?php
class search_Model extends CI_Model{
	
	public function getJobSeeker()	{
			
		$sql = "SELECT name, surname FROM persons, skills, experiences, educational_qualifications"+
			   " WHERE educationLevels_idEducationLevel = ? AND"+
			   " skillName = ? AND"+
			   " JobTitles_idJobTitles = ?";
		
		$q = $this->db->query($sql,array());
		
		if($q->num_rows() >0)
		{
			foreach ($q->result() as $rows)
			{
				$data[] = $rows;
			}
		}
		else {
			$data = "No result";
		}
		return $data;
	}
	
}