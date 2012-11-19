<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class search_Control extends CI_Controller {

	public function index()
	{
		$this->load->view('employee/template');
	}
	
	public function searchJobseeker(){
		$this->load->model('search_Model');
		$data['list'] = $this->search_Model->getJobSeeker();
		$this->load->view('search_View',$data);
	}
	
	
}