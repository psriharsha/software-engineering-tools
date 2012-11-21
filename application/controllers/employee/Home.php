<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$send['content'] = "employee/content";
		$send['content2'] = "employee/content2";
		$this->load->view('employee/template',$send);
	}
	
	public function searchJobseeker(){
		$this->load->model('dropdown');
		
		$send['content'] = "employee/search_View";
		$send['content2'] = "employee/content2";
		$send['dropdown_education'] = $this->dropdown->dropdown_education();
		$send['dropdown_job'] = $this->dropdown->dropdown_job();
		$send['dropdown_employmentLevel'] = $this->dropdown->dropdown_employmentLevel();
		$this->load->view('employee/template',$send);
	}
}