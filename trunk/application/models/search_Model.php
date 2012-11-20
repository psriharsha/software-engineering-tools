<?php
class search_Model extends CI_Model{
	
	public function getJobSeeker($skill)	{
			
		$sql = "SELECT forename1, surname FROM persons AS p INNER JOIN skills AS s WHERE p.idUser = s.Persons_idUser AND s.skillName = ?";
		
		$q = $this->db->query($sql,array($skill));
		
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