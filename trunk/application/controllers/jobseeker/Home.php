<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$send['content'] = "jobseeker/Content";
		$this->load->view('jobseeker/template',$send);
	}
	
	public function editCV() {
		$send['content'] = "jobseeker/accordian";
		$this->load->view('jobseeker/template',$send);
	}
}