<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		if($this->is_logged_in())
			redirect(base_url().'index.php');
	}
	
	//This function checks the session data to make sure that the user is logged in
	public function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in!==true)
		{
			return true;
		}
	}
	
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