<?php
require_once(APPPATH . '/controllers/test/Toast.php');
require_once(APPPATH . 'controllers/login.php');


class Example_tests extends Toast
{
	function Example_tests()
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


	/* TESTS BELOW */

	function test_simple_addition()
	{
		$var = 2 + 2;
		$this->_assert_equals($var, 4);
	}


	function test_that_fails()
	{
		$a = true;
		$b = $a;

		// You can test multiple assertions / variables in one function:

		$this->_assert_true($a); // true
		$this->_assert_false($b); // false
		$this->_assert_equals($a, $b); // true

		// Since one of the assertions failed, this test case will fail
	}


	function test_or_operator()
	{
		$a = true;
		$b = false;
		$var = $a || $b;

		$this->_assert_true($var);

		// If you need to, you can pass a message /
		// description to the unit test results page:

		$this->message = '$a || $b';
	}
	
	function test_register_pass()
	{
		$this->_assert_true($this->form_validation);
		$data = array(
			'forename1' => 'ename',
			'surname' => 'elast',
			'username' => 'example@hot.com',
			'password' => 'test');
		
		$persons = $this->modelo->createJobseeker($data);		
	}
	
	function test_register_fail()
	{
		$this->_assert_false($this->form_validation->run());
		/*$this->login = new Login();
		$signup = $this->login->signup();
		$this->_assert_true($signup);*/
	}
	

	function test_emptyDataSavePersonalTest(){
		$data = array(
				'addressLine1' => '',
				'addressLine2' => '',
				'town' => '',
				'postcode' => '',
				'personalUrl' => ''
		);
		$url = base_url().'index.php/jobseeker/profile/savePersonal';
		$r = $this->do_post_request($url,$data,null);
		$this->_assert_not_equals($r,"Contact Information Saved");
		$this->message = $r;
	}
	
	function do_post_request($url, $data, $optional_headers)
	{
		$params = array('http' => array(
				'method' => 'POST',
				'content' => $data
		));
		$fields_string = "";
		
		foreach($data as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
		rtrim($fields_string, '&');
		
		$ch = curl_init();
		curl_setopt($ch,CURLOPT_URL, $url);
		curl_setopt($ch,CURLOPT_POST, count($data));
		curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
 
$response = curl_exec($ch);
curl_close($ch);
		return $response;
	}

}

// End of file example_test.php */
// Location: ./system/application/controllers/test/example_test.php */