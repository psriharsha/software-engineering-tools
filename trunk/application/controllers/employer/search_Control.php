<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class search_Control extends CI_Controller {

	
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
	
	
	
	//load dropdown from database and display
	public function index()
	{
		$this->load->model('dropdown');	
		$send['content'] = "employer/search_View";
		$send['content2'] = "employer/content2";
		$send['dropdown_education'] = $this->dropdown->dropdown_education();
		$send['dropdown_job'] = $this->dropdown->dropdown_job();
		$send['dropdown_employmentLevel'] = $this->dropdown->dropdown_employmentLevel();
		$this->load->view('employer/template',$send);
	}
	
	//search for jobseekers
	public function searchJobseeker(){
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('qualificationType', 'qualification type', 'trim|alpha');
		$this->form_validation->set_rules('skill','Skill','trim|alpha');
		
		
		if($this->form_validation->run() == FALSE){
			$this->index();
		}
		else{
			$this->load->model('dropdown');
			$this->load->model('search_Model');	
		
		
			$data = $this->search_Model->getJobSeeker();
			
				if($data == array()){
					$send['records'] = "No records were returned";
				}
				else{
					$send['records'] = $data;	
				}

			$send['content'] = "employer/search_View";
			$send['content2'] = "employer/search_result";
			$send['dropdown_education'] = $this->dropdown->dropdown_education();
			$send['dropdown_job'] = $this->dropdown->dropdown_job();
			$send['dropdown_employmentLevel'] = $this->dropdown->dropdown_employmentLevel();

			$this->load->view('employer/template',$send);
		}
		
	}
	
	
}