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
		$final = $this->Register->insEdu($data);
		/*if($res)
			$final = "Contact Information Saved";
		else
			$final = "Error";*/
		echo $final;
	}
	
}