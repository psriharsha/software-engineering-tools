<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function index()
	{
		echo "Harsha";
	}
	
	public function savePersonal()
	{
		$this->load->helper(array('form', 'url'));
		
		$this->load->library('form_validation');
		
		if($this->form_validation->run('personal')){
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
		$res = $this->Register->updateData($data);
		if($res == 1)
			$final = "Contact Information Saved";
		else
			$final = "Error";
		echo $final;
		}
		else 
		{
			$this->load->view('jobseeker/errors1');
		}
	}
	
	public function saveContact()
	{
		if($this->form_validation->run('contact')){
		$data['secondEmail'] = $this->input->post('altmail');
		$data['mobile'] = $this->input->post('mobile');
		$data['landline'] = $this->input->post('land');
		$data['contactPreference'] = $this->input->post('conpre');
		$this->load->model('Register');
		$res = $this->Register->updateData($data);
		if($res == 1)
			$final = "Contact Information Saved";
		else
			$final = "Error";
		echo $final;
		}
		else 
		{
			$this->load->view('jobseeker/errors1');
		}
	}
	
	public function saveEdu(){
		if($this->form_validation->run('qualification')){
		$data['Persons_idUser'] = $this->session->userdata('user_id');
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
		$res = $this->Register->insertData("educational_qualifications",$data);
		if($res == 1)
			$final = "Your Educational Qualification has been Saved";
		else
			$final = "Error";
		echo $final;
		}
		else 
		{
			$this->load->view('jobseeker/errors1');
		}
	}
	
	public function savePro(){
		/*$config = array(
				array(
						'field' => 'profyear',
						'label' => '\'Year Obtained\'',
						'rules' => 'numeric'
				),
				array(
						'field' => 'awardingbody',
						'label' => '\'Awarding Body\'',
						'rules' => 'required'
				),
				array(
						'field' => 'qualification',
						'label' => '\'Qualification\'',
						'rules' => 'required'
				));*/
		//$this->form_validation->set_rules($config);
		if($this->form_validation->run('professional')){
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
		echo $final;}
		else 
		{
			$this->load->view('jobseeker/errors1');
		}
	}
	
	public function saveExp(){
		if($this->form_validation->run('experience')){
		$data['Persons_idUser'] = $this->session->userdata('user_id');
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
		$res = $this->Register->insertData("experiences",$data);
		if($res == 1)
			$final = "Your Experience has been Saved";
		else
			$final = "Error";
		echo $final;
		}else 
		{
			$this->load->view('jobseeker/errors1');
		}
	}
	
	public function saveRef(){
		if($this->form_validation->run('references')){
		$data['Persons_idUser'] = $this->session->userdata('user_id');
		$data['title'] = $this->input->post('title');
		$data['forename'] = $this->input->post('forename');
		$data['surname'] = $this->input->post('surname');
		$data['email'] = $this->input->post('email');
		$data['contactPhone'] = $this->input->post('contactPhone');
		$data['relationship'] = $this->input->post('relationship');
		$this->load->model('Register');
		$res = $this->Register->insertData("referees",$data);
		if($res == 1)
			$final = $data['title'].".".$data['surname']." has been added to your referees";
		else
			$final = "Error";
		echo $final;
		}else
		{
			$this->load->view('jobseeker/errors1');
		}
	}
	
	public function saveSkill(){
		if($this->form_validation->run('skill')){
		$data['Persons_idUser'] = $this->session->userdata('user_id');
		$data['skillName'] = $this->input->post('skillName');
		$data['skillLevel'] = $this->input->post('skillLevel');
		$data['verified'] = $this->input->post('verified');
		$data['howVerified'] = $this->input->post('howVerified');
		$this->load->model('Register');
		$res = $this->Register->insertData("skills",$data);
		if($res == 1)
			$final = $data['skillName']." has been added to your Skills";
		else
			$final = "Error";
		echo $final;
		}else 
		{
			$this->load->view('jobseeker/errors1');
		}
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
	
	public function getInit()
	{
		$id = $this->input->post('id');
		echo $id;
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
	
	public function getEduLevel(){
		$result = $this->Register->getValues('education_levels');
		$finalMessage = null;
		if($result->num_rows()>0)
		{
			foreach($result->result() as $row)
			{
				$finalMessage .= $row->idEducationLevel."|";
				$finalMessage .= $row->educationLevel."|";
			}
		}
		echo $finalMessage;
	}
	
	public function getAllSectors(){
		$result = $this->Register->getValues('sectors');
		$finalMessage = null;
		if($result->num_rows()>0)
		{
			foreach($result->result() as $row)
			{
				$finalMessage .= $row->idSectors."|";
				$finalMessage .= $row->sectorTitle."|";
			}
		}
		echo $finalMessage;
	}
	
	public function getJobTitles(){
		$result = $this->Register->getValues('job_titles');
		$finalMessage = null;
		if($result->num_rows()>0)
		{
			foreach($result->result() as $row)
			{
				$finalMessage .= $row->idJobTitles."|";
				$finalMessage .= $row->jobTitle."|";
			}
		}
		echo $finalMessage;
	}
	
}