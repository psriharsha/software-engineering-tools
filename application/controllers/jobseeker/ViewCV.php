<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class viewCV extends CI_Controller {
	
	//This makes the function 'is logged in' a constructor, so it runs every time
	// a function from this class is called
	public function __construct()
	{
	parent::__construct();
	$this->is_logged_in();
	}
	
	//This function checks the session data to make sure that the user is logged in
	public function is_logged_in()
	{
	$is_logged_in = $this->session->userdata('is_logged_in');
	if(!isset($is_logged_in) || $is_logged_in!==true)
		{
		echo 'You don\'t have permission to access that page, please <a href="' . base_url() . 'index.php/">Log In</a>';
		die();
		}
	}
	
	//This function logs the user out and destroys the session cookie
	public function logout()
	{
		$this->session->sess_destroy();
		$this->load->view('template');
	}
		
	//This function gets CV data from the GetCV model and loads the View CV page
	public function viewer() {
		$this->load->model('GetCV');
		$send['person'] = $this->GetCV->getPerson();
		$send['educationQuals'] = $this->GetCV->getEducationalQuals();
		$send['experiences'] = $this->GetCV->getExperiences();
		$send['professionalQuals'] = $this->GetCV->getProfessionalQuals();
		$send['skills'] = $this->GetCV->getSkills();
		$send['preferences'] = $this->GetCV->getPreferences();
		$send['referees'] = $this->GetCV->GetReferees();
		$send['content'] = "jobseeker/cvview";
		$this->load->view('jobseeker/CV_template',$send);
		}
		
	//This function generates the CV as a PDF document using DOMPDF
	public function pdf_cv() {
		$this->load->helper(array('dompdf', 'file'));
		$this->load->helper('file');
		// page info here, db calls, etc.
		$this->load->model('GetCV');
		$send['person'] = $this->GetCV->getPerson();
		$send['educationQuals'] = $this->GetCV->getEducationalQuals();
		$send['experiences'] = $this->GetCV->getExperiences();
		$send['professionalQuals'] = $this->GetCV->getProfessionalQuals();
		$send['skills'] = $this->GetCV->getSkills();
		$send['preferences'] = $this->GetCV->getPreferences();
		$send['referees'] = $this->GetCV->GetReferees();
		$send['content'] = "jobseeker/cvview";
		// end of page info		
		$html = $this->load->view('jobseeker/PDF_template', $send, true);
		pdf_create($html, 'filename');
	//	or
	//	$data = pdf_create($html, '', false);
	//	write_file('name', $data);
	//if you want to write it to disk and/or send it as an attachment    
		}
}