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
				'type' =>"1",
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
				'type' => "2",
				'is_logged_in' => true
				);
				
				$this->session->set_userdata($data);
				redirect(base_url()."index.php/employee/search_Control");
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
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('surname', 'Surname', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|valid_email|max_length[50]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|max_length[16]');
		$this->form_validation->set_rules('password2', 'Confirmation Password', 'trim|required|max_length[16]|matches[password]');
		
		if($this->form_validation->run() == FALSE){
			$this->signup();
		}

		else{
			$data = array(
				'forename1' => $this->input->post('name'),
				'surname' => $this->input->post('surname'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password')
			);
		
			$this->load->model('register');
			$this->register->createJobseeker($data);
			$this->session->set_userdata($this->input->post('username'));
			redirect(base_url()."index.php/jobseeker/home");
			}
	}
}