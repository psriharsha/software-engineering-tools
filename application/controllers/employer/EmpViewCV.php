<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class empViewCV extends CI_Controller {

public function _remap($UserID)
{
$send['UserID'] = $UserID;
$this->load->view('employer/template', $send);
}

}