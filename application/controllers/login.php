<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	
	function index(){
		$send['content'] = "login_view";
		$this->load->view('template',$send);
	}
	
	function validate_credentials(){
		$this->load->model('login_model');
		$query = $this->login_model->validate_jobseeker();
		if($query){
			
			$data = array(
				'username' => $this->input->post('username'),
				'is_logged_in' => true
			);
			
			$this->session->set_userdata($data);
			redirect(base_url()."index.php/jobseeker/home");
		}
		else{
			$query = $this->login_model->validate_employee();
			if($query)
			{
				$data = array(
					'username' => $this->input->post('username'),
				'is_logged_in' => true
				);
				
				$this->session->set_userdata($data);
				redirect(base_url()."index.php/employee/home");
			}
			else {
				$this->index();
			}
		}
	}
	
	function signup(){
		
		$send['content'] = "register";
		$this->load->view('template',$send);
	}

	function register(){
		$data = array(
			'forename1' => $this->input->post('name'),
			'surname' => $this->input->post('surname'),
			'username' => $this->input->post('email'),
			'password' => $this->input->post('password')
		);
		
		$this->load->model('register');
		$this->register->createJobseeker($data);
			
		$this->session->set_userdata($this->input->post('email'));
		redirect(base_url()."index.php/jobseeker/home");
	}
}