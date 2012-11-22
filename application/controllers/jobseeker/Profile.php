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
			$final = "Added";
		else $final = "Error";
		echo $final;
	}
}