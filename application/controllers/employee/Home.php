<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$send['content'] = "employee/content";
		$this->load->view('employee/template',$send);
	}
	
	public function searchJobseeker(){
		$this->load->model('dropdown');
		
		$send['content'] = "employee/search_View";
		$send['dropdown_education'] = $this->dropdown->dropdown_education();
		$send['dropdown_job'] = $this->dropdown->dropdown_job();
		$send['dropdown_sector'] = $this->dropdown->dropdown_sector();
		$this->load->view('employee/template',$send);
	}
}