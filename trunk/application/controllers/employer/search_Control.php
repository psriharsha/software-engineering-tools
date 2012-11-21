<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class search_Control extends CI_Controller {

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
		$this->load->model('search_Model');	
		$this->load->model('dropdown');
		
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