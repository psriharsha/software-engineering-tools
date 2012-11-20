<?php
class search_Model extends CI_Model{
	
	
	public function getJobSeeker()	{
			
		$skill = $this->input->post('skill');
		$qualification_type = $this->input->post('qualificationType');	
		$selected_educationLevel = $this->input->post('educationLevel');
		$selected_jobTitle = $this->input->post('jobTitle');
		$selected_employmentLevels = $this->input->post('employmentLevels');
		
		$sql = "SELECT forename1, surname, jobTitle
				FROM ((((persons AS p LEFT JOIN (job_preferences AS jp LEFT JOIN job_titles AS jt ON jp.JobTitles_idJobTitles = jt.idJobTitles) 
				ON p.idUser = jp.person_idUser)LEFT JOIN skills AS s ON p.idUser = s.Persons_idUser) LEFT JOIN experiences AS ex ON p.idUser = ex.Persons_idUser)
				LEFT JOIN educational_qualifications AS eduQ ON p.idUser = eduQ.Persons_idUser)
				WHERE s.skillName = ? AND p.EducationLevels_idEducationLevel = ? AND ex.JobTitles_idJobTitles =? AND eduQ.qualificationType = ? AND ex.EmploymentLevels_idLevelsOfEmployment = ?";
		
		
		$q = $this->db->query($sql,array($skill,$selected_educationLevel,$selected_jobTitle,$qualification_type,$selected_employmentLevels));
		
		if($q->num_rows() >0)
		{
			foreach ($q->result() as $rows)
			{
				$data[] = $rows;
			}
			
		}
		else {
			
			if($skill=="" || $qualification_type=="" || $selected_educationLevel==0 || $selected_jobTitle==0 || $selected_employmentLevels==0){
				$data[] = $this->getAllJobseeker(); 
			}
		}

		return $data;
	}
	
	
	public function getAllJobseeker(){
		
		$skill = $this->input->post('skill');
		$qualification_type = $this->input->post('qualificationType');	
		$selected_educationLevel = $this->input->post('educationLevel');
		$selected_jobTitle = $this->input->post('jobTitle');
		$selected_employmentLevels = $this->input->post('employmentLevels');
		
		$sql = "SELECT forename1, surname, jobTitle
				FROM ((((persons AS p LEFT JOIN (job_preferences AS jp LEFT JOIN job_titles AS jt ON jp.JobTitles_idJobTitles = jt.idJobTitles) 
				ON p.idUser = jp.person_idUser)LEFT JOIN skills AS s ON p.idUser = s.Persons_idUser) LEFT JOIN experiences AS ex ON p.idUser = ex.Persons_idUser)
				LEFT JOIN educational_qualifications AS eduQ ON p.idUser = eduQ.Persons_idUser)
				WHERE s.skillName = ? OR p.EducationLevels_idEducationLevel = ? OR ex.JobTitles_idJobTitles =? OR eduQ.qualificationType = ? OR ex.EmploymentLevels_idLevelsOfEmployment = ?";
		
		
		$q = $this->db->query($sql,array($skill,$selected_educationLevel,$selected_jobTitle,$qualification_type,$selected_employmentLevels));
		
		if($q->num_rows() >0)
		{
			foreach ($q->result() as $rows)
			{
				$data[] = $rows;
			}
		}
		else { $data = "No data"; }
		return $data;
	}
	
}