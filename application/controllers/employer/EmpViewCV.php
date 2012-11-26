<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class empViewCV extends CI_Controller {

public function _remap($UserID)
{
$this->load->model('GetEmpCV');
$send['person'] = $this->GetEmpCV->getPerson($UserID);
$send['content'] = "jobseeker/cvview";
$this->load->view('jobseeker/template',$send);
}
}