<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class search_Control extends CI_Controller {

	public function searchJobseeker(){
		$this->load->model('search_Model');
		
		$this->load->model('dropdown');
		$data = $this->search_Model->getJobSeeker('PHP');
		$send['content'] = "employee/search_View";
		$send['dropdown_education'] = $this->dropdown->dropdown_education();
		$send['dropdown_job'] = $this->dropdown->dropdown_job();
		$send['dropdown_sector'] = $this->dropdown->dropdown_sector();
		foreach($data as $row)
		{
			$firstname[] = $row->forename1;
			$surname[] = $row->surname;
		}
		$send['first'] = $firstname;
		$send['last'] = $surname;
		$this->load->view('employee/search_View',$send);
	}
	
	
}