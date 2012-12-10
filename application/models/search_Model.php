<?php
class search_Model extends CI_Model{
	
	//get jobseekers which matched up with all the passing values
	public function getJobSeeker()	{
			
		$preferredJob = $this->input->post('preJob');
		$selected_educationLevel = $this->input->post('educationLevel');
		$noGCSE = (int)$this->input->post('gcsePass');
		$qualification_type = $this->input->post('qualificationType');
		$proQua = $this->input->post('proQualification');
		$skill = $this->input->post('skill');
		$selected_jobTitle = $this->input->post('jobTitle');
		$selected_employmentLevels = $this->input->post('employmentLevels');

		
		if($skill == "")
			$con_skill = "1=1";
		else
			$con_skill = " s.skillname = '$skill' ";
		
		if($noGCSE == "")
			$con_noGCSE = "";
		else
			$con_noGCSE = " and p.noofgcses = '$noGCSE' ";
		
		if($qualification_type == "")
			$con_qualification_type = "";
		else
			$con_qualification_type = " and eQua.qualificationType = '$qualification_type' ";
				
		if($selected_educationLevel == '0')
			$con_edu_level = "";
		else
			$con_edu_level = " and p.educationlevels_ideducationlevel = '$selected_educationLevel' ";
		
		if($preferredJob == '0')
			$con_job_title = "";
		else
			$con_job_title = " and jp.jobtitles_idjobtitles = '$preferredJob' ";
		
		if($selected_jobTitle == '0')
			$con_job_title2 = "";
		else
			$con_job_title2 = " and e.jobtitles_idjobtitles = '$selected_jobTitle' ";
		
		if($selected_employmentLevels == '0')
			$con_em_level = "";
		else
			$con_em_level = " and e.employmentlevels_idlevelsofemployment = '$selected_employmentLevels' ";
		
		if($proQua == "")
			$con_pro_qua = "";
		else
			$con_pro_qua = " and proQ.qualificationname = '$proQua' ";
		
		
		$condition = $con_skill.$con_noGCSE.$con_qualification_type.$con_edu_level.$con_job_title.$con_job_title2.$con_em_level.$con_pro_qua." group by idUser";		
		
		
		$sql = "select idUser, forename1, surname, noofgcses,ideducationlevel 
				from (((((persons as p left join skills as s on p.iduser = s.persons_iduser) left join
				educational_qualifications as eQua on p.iduser = eQua.persons_iduser) left join (job_preferences as jp left join job_titles as jpt on jp.jobtitles_idjobtitles=jpt.idjobtitles)
				on p.iduser = jp.person_iduser) left join ((experiences as e left join job_titles as ejt on e.jobtitles_idjobtitles = ejt.idjobtitles) left join employment_levels as el on el.idlevelsofemployment = e.employmentlevels_idlevelsofemployment) on e.persons_iduser = p.iduser)
				left join professional_qualifications as proQ on p.iduser = proQ.persons_iduser) left join education_levels as edul on edul.ideducationlevel = p.educationlevels_ideducationlevel
				where ".$condition;
		
		$q = $this->db->query($sql);
		
		
		if($q->num_rows() >0)
		{
			foreach ($q->result() as $rows)
			{
				$data[] = $rows;
			}
				
		}
		else {$data = array();}

	return $data;
	
	}
	
}