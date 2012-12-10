<?php
class manage_model extends CI_Model
{
	public function addExperience($data)
	{
		$query = "insert into employment_levels (employmentlevel) values ('".$data."')";
		$this->db->query($query);
		return;
	}
	
	public function addEducation($data)
	{
		$query = "insert into education_levels (educationlevel) values ('".$data."')";
		$this->db->query($query);
		return;
	}
	
	public function addJob($data)
	{
		
		//$query = "insert into job_titles (jobtitle, sectors_idsectors) values ('".$data->jobtitle."','.$data->sector.')";
		$this->db->insert('job_titles',$data);
		return;
	}
	
	public function addSector($data)
	{
		//$query = "insert into sectors (sectorTitle) values ('".$data."')";
		$this->db->insert('sectors',$data);
		//$this->db->query($query);
		
		$query2 = "select max(idsectors) as maxid from sectors";
		$q = $this->db->query($query2);
		
		if($q->num_rows()>0)
		{
			$row = $q->row();
		}
		return $row->maxid;
		
	}
}
