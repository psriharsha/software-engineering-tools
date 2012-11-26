<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class empViewCV extends CI_Controller {

public function _remap($UserID)
{
$this->load->model('GetEmpCV');
$send['person'] = $this->GetEmpCV->getPerson($UserID);
$send['educationQuals'] = $this->GetEmpCV->getEducationalQuals($UserID);
$send['experiences'] = $this->GetEmpCV->getExperiences($UserID);
$send['professionalQuals'] = $this->GetEmpCV->getProfessionalQuals($UserID);
$send['skills'] = $this->GetEmpCV->getSkills($UserID);
$send['preferences'] = $this->GetEmpCV->getPreferences($UserID);
$send['referees'] = $this->GetEmpCV->GetReferees($UserID);
$send['content'] = "jobseeker/cvview";
$this->load->view('employer/cvTemplate',$send);
}
}