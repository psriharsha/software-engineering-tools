<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('employee/template');
	}
	
	public function searchJobseeker(){
		$this->load->model('dropdown');
		$data = array(
				'dropdown_education' => $this->dropdown->dropdown_education(),
				'dropdown_job' => $this->dropdown->dropdown_job(),
				'dropdown_sector' => $this->dropdown->dropdown_sector() );
		
		$this->load->view('employee/header');
		$this->load->view('employee/menu');
		$this->load->view('employee/search_View',$data);
		$this->load->view('employee/footer');
		

	}
}