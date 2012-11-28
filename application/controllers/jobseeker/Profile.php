<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function index()
	{
		echo "Harsha";
	}
	
	public function savePersonal()
	{
		$data['addressLine1'] = $this->input->post('add1');
			$data['addressLine2'] = $this->input->post('add2');
		$data['town'] = $this->input->post('town');
		$data['postcode'] = $this->input->post('postcode');
		$sex = $this->input->post('female');
		if($sex=="female")
			$data['female'] = 0;
		else
			$data['female'] = 1;
		$data['personalUrl'] = $this->input->post('perurl');
		$data['authorityToWorkStatement'] = $this->input->post('authwork');
		$data['noOfGcses'] = $this->input->post('noofgcse');
		$data['gcseEnglishGrade'] = $this->input->post('gcseeng');
		$data['gcseMathsGrade'] = $this->input->post('gcsemath');
		$data['studentStatus'] = $this->input->post('stusta');
		$this->load->model('Register');
		$res = $this->Register->editDetails($data);
		if($res)
			$final = "Personal Data Saved";
		else $final = "Error";
		echo $final;
	}
	
	public function saveContact()
	{
		$data['secondEmail'] = $this->input->post('altmail');
		$data['mobile'] = $this->input->post('mobile');
		$data['landline'] = $this->input->post('land');
		$data['contactPreference'] = $this->input->post('conpre');
		$this->load->model('Register');
		$res = $this->Register->updateContact($data);
		if($res)
			$final = "Contact Information Saved";
		else
			$final = "Error";
		echo $final;
	}
	
	public function saveEdu(){
		$data['qualificationType'] = $this->input->post('qualificationType');
		$data['courseName'] = $this->input->post('courseName');
		$data['EducationLevels_idEducationLevel'] = $this->input->post('EducationLevels_idEducationLevel');
		$data['vocational'] = $this->input->post('vocational');
		$data['nameOfInstitutions'] = $this->input->post('nameOfInstitutions');
		$data['mainSubject'] = $this->input->post('mainSubject');
		$data['country'] = $this->input->post('country');
		$data['yearObtained'] = $this->input->post('yearObtained');
		$data['result'] = $this->input->post('result');
		$data['verified'] = $this->input->post('verified');
		$data['howVerified'] = $this->input->post('howVerified');
		$this->load->model('Register');
		$res = $this->Register->insEdu($data);
		if($res)
			$final = "Contact Information Saved";
		else
			$final = "Error";
		echo $final;
	}
	
	public function savePro(){
		$data['qualificationName'] = $this->input->post('qualificationName');
		$data['Sectors_idSectors'] = $this->input->post('Sectors_idSectors');
		$data['otherSector'] = $this->input->post('otherSector');
		$data['awardingBody'] = $this->input->post('awardingBody');
		$data['yearObtained'] = $this->input->post('yearObtained');
		$data['result'] = $this->input->post('result');
		$data['verified'] = $this->input->post('verified');
		$data['howVerified'] = $this->input->post('howVerified');
		$this->load->model('Register');
		$res = $this->Register->insPro($data);
		if($res)
			$final = "Professional Qualification Saved";
		else
			$final = "Error";
		echo $final;
	}
	
	public function saveExp(){
		$data['JobTitles_idJobTitles'] = $this->input->post('JobTitles_idJobTitles');
		$data['otherJobTitle'] = $this->input->post('otherJobTitle');
		$data['EmploymentLevels_idLevelsOfEmployment'] = $this->input->post('EmploymentLevels_idLevelsOfEmployment');
		$data['employerName'] = $this->input->post('employerName');
		$data['dateStarted'] = $this->input->post('dateStarted');
		$data['dateFinished'] = $this->input->post('dateFinished');
		$data['keyDuties'] = $this->input->post('keyDuties');
		$data['howVerified'] = $this->input->post('howVerified');
		$data['verified'] = $this->input->post('verified');
		$this->load->model('Register');
		$res = $this->Register->insExp($data);
		if($res)
			$final = "Experiences Saved";
		else
			$final = "Error";
		echo $final;
	}
	
	public function saveRef(){
		$data['title'] = $this->input->post('title');
		$data['forename'] = $this->input->post('forename');
		$data['surname'] = $this->input->post('surname');
		$data['email'] = $this->input->post('email');
		$data['contactPhone'] = $this->input->post('contactPhone');
		$data['relationship'] = $this->input->post('relationship');
		$this->load->model('Register');
		$res = $this->Register->insRef($data);
		if($res)
			$final = "Reference Saved";
		else
			$final = "Error";
		echo $final;
	}
	
	public function saveSkill(){
		$data['skillName'] = $this->input->post('skillName');
		$data['skillLevel'] = $this->input->post('skillLevel');
		$data['verified'] = $this->input->post('verified');
		$data['howVerified'] = $this->input->post('howVerified');
		$this->load->model('Register');
		$res = $this->Register->insSkill($data);
		if($res)
			$final = "Skill Saved";
		else
			$final = "Error";
		echo $final;
	}
	
	public function getData()
	{
		$data['what1'] = $this->input->post('what1');
		$data['what2'] = $this->input->post('what2');
		$data['where'] = $this->input->post('where');
		$this->load->model('Register');
		$result = $this->Register->getInfo($data);
		$res = "NULL";
		if($result->num_rows()>0)
		{
			$res = "";
			foreach($result->result() as $row)
			{
				if($data['where'] != "persons")
				$res .= $row->$data['what1']."|";
				$res .= $row->$data['what2']."#";
			}
		}
		echo $res;
	}
	
	public function deleteBySpan()
	{
		$data['from'] = $this->input->post('from');
		$data['del'] = $this->input->post('del'); 
		$from = "";
		if($data['from'] == 3)
			$from = "educational_qualifications";
		else if($data['from'] == 4)
			$from = "professional_qualifications";
		else if($data['from'] == 5)
			$from = "experiences";
		else if($data['from'] == 6)
			$from = "skills";
		else $from = "referees";
		$del = $data['del'];
		$this->load->model('Register');
		$res = $this->Register->deleteData($from,$del);
		if($res)
			$final = "Success";
		else
			$final = "Error";
		echo $final;
	}
	
}