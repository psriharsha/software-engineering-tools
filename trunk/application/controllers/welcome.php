<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('template');
	}
	
	/*public function login(){
		$username = $this->input->post('username');
		$password =  $this->input->post('password');
		$this->load->model('login');
		if($this->login->checkLogin($username,$password))
			redirect(base_url()."index.php/jobseeker/home");
		else
			echo "Invalid Details";
	}
	
	public function register(){
		
		$data = array(
			'forename1' => $this->input->post('name'),
			'surname' => $this->input->post('surname'),
			'username' => $this->input->post('email'),
			'password' => $this->input->post('password')
		);
		
		$this->load->model('register');
		$this->register->createJobseeker($data);	
	}*/
}