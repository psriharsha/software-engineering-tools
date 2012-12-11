<?php
require_once(APPPATH . '/controllers/test/Toast.php');


class CvDetailsTest extends Toast
{
	function CvDetailsTest()
	{
		parent::Toast(__FILE__);
		$this->load->model('Register','modelo');
		$this->load->library('form_validation');
		// Load any models, libraries etc. you need here
	}
	
	/**
	 * OPTIONAL; Anything in this function will be run before each test
	 * Good for doing cleanup: resetting sessions, renewing objects, etc.
	 */
	function _pre() {
		$this->db = $this->load->database('testing',TRUE);
	
	}
	
	
	/**
	 * OPTIONAL; Anything in this function will be run after each test
	 * I use it for setting $this->message = $this->My_model->getError();
	 */
	function _post() {
		$table_names = array('educational_qualifications','job_preferences','employee','experiences','professional_qualifications','referees','skills',' persons');
		foreach($table_names as $table){
			$this->db->query('delete from '.$table);
		}
		$this->db = $this->load->database('default',TRUE);
	}
	
	function test_emptyDataSavePersonalTest(){
		$data = array(
				'add1' => '',
				'addressLine2' => '',
				'town' => '',
				'postcode' => '',
				'personalUrl' => ''
		);
		$url = base_url().'index.php/jobseeker/profile/savePersonal';
		$r = $this->do_post_request($url,$data,null);
		$expected = "Personal Information Saved";
		$this->_assert_not_equals($r,$expected);
		$this->message = "<table border=\"1\" class=\"testingClass\"><tr><td>".$r."</td><td>".$expected."</td></tr></table>";
	}
	
	function test_numericTownSavePersonalTest(){
		$data = array(
				'add1' => '',
				'addressLine2' => '',
				'town' => '3423fff',
				'postcode' => '',
				'personalUrl' => ''
		);
		$url = base_url().'index.php/jobseeker/profile/savePersonal';
		$r = $this->do_post_request($url,$data,null);
		$expected = "Personal Information Saved";
		$this->_assert_not_equals($r,$expected);
		$this->message = "<table border=\"1\" class=\"testingClass\"><tr><td>".$r."</td><td>".$expected."</td></tr></table>";
	}
	
	function test_numericGCSEGradesTest(){
		$data = array(
				'add1' => '181',
				'addressLine2' => 'Empire',
				'town' => 'London',
				'postcode' => 'HA9 0AJ',
				'personalUrl' => '',
				'gcseeng' => '78',
				'gcsemath' => '45'
		);
		$url = base_url().'index.php/jobseeker/profile/savePersonal';
		$r = $this->do_post_request($url,$data,null);
		$expected = "Personal Information Saved";
		$this->_assert_not_equals($r,$expected);
		$this->message = "<table border=\"1\" class=\"testingClass\"><tr><td>".$r."</td><td>".$expected."</td></tr></table>";
	}
	
	function test_alphaMaxLenGCSEGradesTest(){
		$data = array(
				'add1' => '181',
				'addressLine2' => 'Empire',
				'town' => 'London',
				'postcode' => 'HA9 0AJ',
				'personalUrl' => '',
				'gcseeng' => 'AB',
				'gcsemath' => 'ABCD'
		);
		$url = base_url().'index.php/jobseeker/profile/savePersonal';
		$r = $this->do_post_request($url,$data,null);
		$expected = "Personal Information Saved";
		$this->_assert_not_equals($r,$expected);
		$this->message = "<table border=\"1\" class=\"testingClass\"><tr><td>".$r."</td><td>".$expected."</td></tr></table>";
	}
	
	function test_correctPersonalDataTest(){
		$data = array(
				'add1' => '181',
				'addressLine2' => 'Empire',
				'town' => 'London',
				'postcode' => 'HA9 0AJ',
				'personalUrl' => '',
				'gcseeng' => 'A',
				'gcsemath' => 'B'
		);
		$url = base_url().'index.php/jobseeker/profile/savePersonal';
		$r = $this->do_post_request($url,$data,null);
		$expected = "Personal Information Saved";
		$this->_assert_equals($r,$expected);
		$this->message = "<table border=\"1\" class=\"testingClass\"><tr><td>".$r."</td><td>".$expected."</td></tr></table>";
	}
	
	function test_correctContactDataTest(){
		$data = array(
				'altmail' => 'alternate@mail.com',
				'mobile' => '',
				'land' => ''
		);
		$url = base_url().'index.php/jobseeker/profile/saveContact';
		$r = $this->do_post_request($url,$data,null);
		$expected = "Contact Information Saved";
		$this->_assert_equals($r,$expected);
		$this->message = "<table border=\"1\" class=\"testingClass\"><tr><td>".$r."</td><td>".$expected."</td></tr></table>";
	}
	
	function test_invalidMailContactDataTest(){
		$data = array(
				'altmail' => 'alternatemail.com',
				'mobile' => '',
				'land' => ''
		);
		$url = base_url().'index.php/jobseeker/profile/saveContact';
		$r = $this->do_post_request($url,$data,null);
		$expected = "Contact Information Saved";
		$this->_assert_not_equals($r,$expected);
		$this->message = "<table border=\"1\" class=\"testingClass\"><tr><td>".$r."</td><td>".$expected."</td></tr></table>";
	}
	
	function test_invalidMailContactDataTest2(){
		$data = array(
				'altmail' => 'alternate@mailcom',
				'mobile' => '',
				'land' => ''
		);
		$url = base_url().'index.php/jobseeker/profile/saveContact';
		$r = $this->do_post_request($url,$data,null);
		$expected = "Contact Information Saved";
		$this->_assert_not_equals($r,$expected);
		$this->message = "<table border=\"1\" class=\"testingClass\"><tr><td>".$r."</td><td>".$expected."</td></tr></table>";
	}
	
	function test_invalidPhoneContactDataTest2(){
		$data = array(
				'altmail' => 'alternate@mail.com',
				'mobile' => 'abcd',
				'land' => 'abmknhj'
		);
		$url = base_url().'index.php/jobseeker/profile/saveContact';
		$r = $this->do_post_request($url,$data,null);
		$expected = "Contact Information Saved";
		$this->_assert_not_equals($r,$expected);
		$this->message = "<table border=\"1\" class=\"testingClass\"><tr><td>".$r."</td><td>".$expected."</td></tr></table>";
	}
	
	function test_emptyEduDetailsTest(){
		$data = array(
				'qualificationType' => '',
				'courseName' => '',
				'nameOfInstitutions' => ''
		);
		$url = base_url().'index.php/jobseeker/profile/saveEdu';
		$r = $this->do_post_request($url,$data,null);
		$expected = "Your Educational Qualification has been Saved";
		$this->_assert_not_equals($r,$expected);
		$this->message = "<table border=\"1\" class=\"testingClass\"><tr><td>".$r."</td><td>".$expected."</td></tr></table>";
	}
	
	function do_post_request($url, $data, $optional_headers)
	{
		$r = new HttpRequest($url, HttpRequest::METH_POST);
		$r->addPostFields($data);
		try {
			$x= $r->send();
		} catch (HttpException $ex) {
			echo $ex;
		}
		return $x->getBody();
	}
	
}