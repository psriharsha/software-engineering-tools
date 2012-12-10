<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class manage_controller extends CI_Controller{
	
	//This makes the function 'is logged in' a constructor, so it runs every time
	// a function from this class is called
	public function __construct()
	{
	parent::__construct();
	$this->is_logged_in();
	}
	
	//This function checks the session data to make sure that the user is logged in
	public function is_logged_in()
	{
	$is_logged_in = $this->session->userdata('is_logged_in');
	if(!isset($is_logged_in) || $is_logged_in!==true)
		{
		echo 'You don\'t have permission to access that page, please <a href="' . base_url() . 'index.php/">Log In</a>';
		die();
		}
	}
	
	public function index()
	{
		$this->load->model('dropdown');
		$send['dropdown_sectors'] = $this->dropdown->dropdown_sectors();
		$send['content'] = "employer/manage_view";
		$send['content2'] = "employer/content2";
		$this->load->view('employer/template',$send);
	}
	
	public function inputExperience()
	{
		$this->form_validation->set_rules('empLevel','employment level', 'trim');
		if($this->form_validation->run() == FALSE)
		{
			$this->index();
		}
		else{
			$data = $this->input->post('empLevel');
			$this->load->model('manage_model');
			$this->manage_model->addExperience($data);
			$this->index();
		}
	}
	
	public function inputEducation()
	{
		$this->form_validation->set_rules('eduLevel','education level', 'trim');
		if($this->form_validation->run() == FALSE)
		{
			$this->index();
		}
		else{
			$data = $this->input->post('eduLevel');
			$this->load->model('manage_model');
			$this->manage_model->addEducation($data);
			$this->index();
		}
	}
	
	public function inputJob()
	{
		$this->form_validation->set_rules('job','job', 'trim|is_unique[job_titles.jobtitle]');
		$this->form_validation->set_rules('sectorTxt','sector','trim|is_unique[sectors.sectorTitle]');
		if($this->form_validation->run() == FALSE)
		{
			$this->index();
		}
		else
		{
			if($this->input->post('sectorTxt') == "" && $this->input->post('sector')!=0)
			{
				$data = array(
					'jobtitle' => $this->input->post('job'),
					'sectors_idsectors' => $this->input->post('sector'));
				$this->load->model('manage_model');
				$this->manage_model->addJob($data);
				$this->index();
			}
				if($this->input->post('sectorTxt') !="" && $this->input->post('sector') == 0) {
					$this->load->model('manage_model');
					$data['sectortitle'] = $this->input->post('sectorTxt');
					$returnMaxSector = $this->manage_model->addSector($data);
					$data2 = array(
						'jobTitle' => $this->input->post('job'),
						'sectors_idsectors' => $returnMaxSector
					);

					$this->manage_model->addJob($data2);
					$this->index();
				}
		}
	}
}