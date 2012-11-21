<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function selectedAbout()
	{
		if($this->session->userdata('type') == 1){
			$send['content'] = "about";
			$this->load->view('jobseeker/template',$send);
		}
		else{
			if($this->session->userdata('type') == 2){
				$send['content'] = "about";
				$send['content2'] = "employee/content2";
				$this->load->view('employee/template',$send);
			}
			else {
				$send['content'] = "about";
				$this->load->view('template',$send);
			}
		}
		
	}
	
	public function selectedContact()
	{
		if($this->session->userdata('type') == 1){
			$send['content'] = "contact";
			$this->load->view('jobseeker/template',$send);
		}
		else{
			if($this->session->userdata('type') == 2){
				$send['content'] = "contact";
				$send['content2'] = "employee/content2";
				$this->load->view('employee/template',$send);
			}
			else {
				$send['content'] = "contact";
				$this->load->view('template',$send);
			}
		}
	}
}