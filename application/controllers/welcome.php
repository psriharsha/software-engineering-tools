<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('template');
	}
	
	public function login(){
		$username = $this->input->post('username');
		$password =  $this->input->post('password');
		$this->load->model('Register');
		if($this->Register->checkLogin($username,$password))
			redirect(base_url()."jobseeker/home");
		else
			echo "Invalid Details";
	}
}