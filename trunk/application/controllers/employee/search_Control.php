<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class search_Control extends CI_Controller {

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
			
		$send['content'] = "employee/search_View";
		$send['dropdown_education'] = $this->dropdown->dropdown_education();
		$send['dropdown_job'] = $this->dropdown->dropdown_job();
		$send['dropdown_employmentLevel'] = $this->dropdown->dropdown_employmentLevel();

		$this->load->view('template',$send);
		
	}
	
	
}