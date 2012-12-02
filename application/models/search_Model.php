<?php
class search_Model extends CI_Model{
	
	//get jobseekers which matched up with all the passing values
	public function getJobSeeker()	{
			
		$preferredJob = $this->input->post('preJob');
		$selected_educationLevel = $this->input->post('educationLevel');
		$noGCSE = $this->input->post('gcsePass');
		$qualification_type = $this->input->post('qualificationType');
		$proQua = $this->input->post('proQualification');
		$skill = $this->input->post('skill');
		$selected_jobTitle = $this->input->post('jobTitle');
		$selected_employmentLevels = $this->input->post('employmentLevels');

		/*$sql = "select idUser, forename1, surname, jobTitle
				from ((((persons as p left join (job_preferences as jp left join job_titles AS jt ON jp.JobTitles_idJobTitles = jt.idJobTitles) 
				ON p.idUser = jp.person_idUser)LEFT JOIN skills AS s ON p.idUser = s.Persons_idUser) LEFT JOIN experiences AS ex ON p.idUser = ex.Persons_idUser)
				LEFT JOIN educational_qualifications AS eduQ ON p.idUser = eduQ.Persons_idUser)
				WHERE s.skillName = ? AND p.EducationLevels_idEducationLevel = ? AND ex.JobTitles_idJobTitles =? AND eduQ.qualificationType = ? AND ex.EmploymentLevels_idLevelsOfEmployment = ?
				AND p.noOfGcses = ?";*/
		
		/*$sql = "SELECT idUser, forename1, surname, jt.jobTitle 
				FROM (((persons AS p LEFT JOIN skills AS s ON p.idUser = s.Persons_idUser) 
				left join (educational_qualifications as eQua left join education_levels as el on eQua.Educationlevels_idEducationlevel = el.idEducationlevel) on p.idUser = eQua.Persons_idUser) 
				left join (job_preferences as jp left join job_titles as jt on jp.JobTitles_idJobTitles = jt.idJobtitles) on p.idUser = jp.Person_idUser) 
				left join ((experiences as e left join job_titles as jobT on e.JobTitles_idJobTitles = jobT.idJobTitles) 
				left join employment_levels as emL on emL.idLevelsOfEmployment = e.EmploymentLevels_idLevelsOfEmployment) on p.idUser = e.Persons_idUser 
				where s.skillName = ? and eQua.qualificationType = ? and el.educationLevel = ? and jt.idjobTitles = ? 
				and p.noOfGcses = ? and jobT.idjobTitles = ? and emL.idlevelsofemployment = ? ";*/
		
		$sql = "select idUser, forename1, surname 
				from (((((persons as p left join skills as s on p.iduser = s.persons_iduser) left join
				educational_qualifications as eQua on p.iduser = eQua.persons_iduser) left join (job_preferences as jp left join job_titles as jpt on jp.jobtitles_idjobtitles=jpt.idjobtitles)
				on p.iduser = jp.person_iduser) left join ((experiences as e left join job_titles as ejt on e.jobtitles_idjobtitles = ejt.idjobtitles) left join employment_levels as el on el.idlevelsofemployment = e.employmentlevels_idlevelsofemployment) on e.persons_iduser = p.iduser)
				left join professional_qualifications as proQ on p.iduser = proQ.persons_iduser) left join education_levels as edul on edul.ideducationlevel = p.educationlevels_ideducationlevel
				where s.skillname = ? and p.noofgcses = ? and eQua.qualificationType = ? and p.educationlevels_ideducationlevel = ? and jp.jobtitles_idjobtitles = ? and e.jobtitles_idjobtitles = ? and e.employmentlevels_idlevelsofemployment = ? and proQ.qualificationname =?";
		
		$q = $this->db->query($sql,array($skill,$noGCSE,$qualification_type,$selected_educationLevel,$preferredJob,$selected_jobTitle,$selected_employmentLevels,$proQua));
		//$q = $this->db->query($sql, array($skill,$qualification_type,$selected_educationLevel,$preferredJob,$noGCSE,$selected_jobTitle,$selected_employmentLevels));
		//$q = $this->db->query($sql,array($skill,$selected_educationLevel,$selected_jobTitle,$qualification_type,$selected_employmentLevels,$noGCSE));
		
		if($q->num_rows() >0)
		{
			foreach ($q->result() as $rows)
			{
				$data[] = $rows;
			}
			
		}
		else {
			if($skill=="" || $noGCSE==""|| $qualification_type=="" || $selected_educationLevel==0 || $preferredJob==0 || $selected_jobTitle==0 || $selected_employmentLevels == 0 || $proQua ==""){
				$data = $this->getAllJobseeker(); 
			}
			else{ $data=array();}
			
		}

	return $data;
	
	}
	
	//get jobseekers by matching with some passing values
	public function getAllJobseeker(){
		
		$preferredJob = $this->input->post('preJob');
		$selected_educationLevel = $this->input->post('educationLevel');
		$noGCSE = $this->input->post('gcsePass');
		$qualification_type = $this->input->post('qualificationType');
		$proQua = $this->input->post('proQualification');
		$skill = $this->input->post('skill');
		$selected_jobTitle = $this->input->post('jobTitle');
		$selected_employmentLevels = $this->input->post('employmentLevels');
		
		
		$sql = "select idUser, forename1, surname
				from ((((persons as p left join skills as s on p.iduser = s.persons_iduser) left join
				educational_qualifications as eQua on p.iduser = eQua.persons_iduser) left join (job_preferences as jp left join job_titles as jpt on jp.jobtitles_idjobtitles=jpt.idjobtitles)
				on p.iduser = jp.person_iduser) left join ((experiences as e left join job_titles as ejt on e.jobtitles_idjobtitles = ejt.idjobtitles) left join employment_levels as el on el.idlevelsofemployment = e.employmentlevels_idlevelsofemployment) on e.persons_iduser = p.iduser)
				left join professional_qualifications as proQ on p.iduser = proQ.persons_iduser
				where s.skillname = ? or p.noofgcses = ? or eQua.qualificationType = ? or p.educationlevels_ideducationlevel = ? or jp.jobtitles_idjobtitles = ? or e.jobtitles_idjobtitles = ? or e.employmentlevels_idlevelsofemployment = ? or proQ.qualificationname =?";
		
		$q = $this->db->query($sql,array($skill,$noGCSE,$qualification_type,$selected_educationLevel,$preferredJob,$selected_jobTitle,$selected_employmentLevels,$proQua));
		//$q = $this->db->query($sql,array($skill,$selected_educationLevel,$selected_jobTitle,$qualification_type,$selected_employmentLevels,$noGCSE));
			
		/*$sql = "SELECT idUser, forename1, surname, jobTitle
				FROM ((((persons AS p LEFT JOIN (job_preferences AS jp LEFT JOIN job_titles AS jt ON jp.JobTitles_idJobTitles = jt.idJobTitles) 
				ON p.idUser = jp.person_idUser)LEFT JOIN skills AS s ON p.idUser = s.Persons_idUser) LEFT JOIN experiences AS ex ON p.idUser = ex.Persons_idUser)
				LEFT JOIN educational_qualifications AS eduQ ON p.idUser = eduQ.Persons_idUser)
				WHERE s.skillName = ? OR p.EducationLevels_idEducationLevel = ? OR ex.JobTitles_idJobTitles =? OR eduQ.qualificationType = ? OR ex.EmploymentLevels_idLevelsOfEmployment = ?";
		
		
		$q = $this->db->query($sql,array($skill,$selected_educationLevel,$selected_jobTitle,$qualification_type,$selected_employmentLevels));*/
		if($q->num_rows() >0)
		{
			//$number = count($q->num_rows('idUser'));
			foreach ($q->result() as $rows)
			{
				$data[] = $rows;
			}
		}
		else {$data = array();}
		
		return $data;
	}
	

	
}