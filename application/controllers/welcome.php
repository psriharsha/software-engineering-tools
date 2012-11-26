<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function selectedClose()
	{
		if($this->session->userdata('type')==1){
			redirect(base_url()."index.php/jobseeker/home");
		}
		else{
			if($this->session->userdata('type') == 2){
				redirect(base_url()."index.php/employer/search_Control");
			}
			else{
				$send['content'] = "login_view";
				$this->load->view('template',$send);
			}
		}
	}
	
	
	
	//display about content
	public function selectedAbout()
	{
		if($this->session->userdata('type') == 1){
			$send['content'] = "about";
			$this->load->view('jobseeker/template',$send);
		}
		else{
			if($this->session->userdata('type') == 2){
				$send['content'] = "about";
				$send['content2'] = "employer/content2";
				$this->load->view('employer/template',$send);
			}
			else {
				$send['content'] = "about";
				$this->load->view('template',$send);
			}
		}
		
	}
	
	//diaplay contact content
	public function selectedContact()
	{
		if($this->session->userdata('type') == 1){
			$send['content'] = "contact";
			$this->load->view('jobseeker/template',$send);
		}
		else{
			if($this->session->userdata('type') == 2){
				$send['content'] = "contact";
				$send['content2'] = "employer/content2";
				$this->load->view('employer/template',$send);
			}
			else {
				$send['content'] = "contact";
				$this->load->view('template',$send);
			}
		}
	}
}