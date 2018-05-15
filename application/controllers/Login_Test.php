<?php
class Login_Test extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library('unit_test');
		$this->load->model('Authmin_model');
	}
	public function index()
	{
		$this->good_login();
		$this->wrong_password();
		echo $this->unit->report();
	}
	public function good_login()
	{
		$temp = $this->Authmin_model->getUser();
		$indx = rand(0, (sizeof($temp)-1));
		$where = array(
			'username_pengguna' => $temp[$indx]['username'],
			'password_pengguna' => $temp[$indx]['password']
		);
		$cek = $this->Authmin_model->loginAdmin($where[username_pengguna],$where[password_pengguna]);
		$test = count($cek);
		$expected_result = 1;
		$test_name = 'Username and Password Matched to Database';
		$this->unit->run($test, $expected_result, $test_name);
		
	}
	
	public function wrong_password()
	{
		$temp = $this->Authmin_model->getUser();
		$indx = rand(0,sizeof($temp)-1);
		$where = array(
			'username_pengguna' => $temp[$indx]['username_pengguna'],
			'password_pengguna' => 'wrong Password'
		);
		$cek = $this->Authmin_model->loginAdmin($where[username_pengguna],$where[password_pengguna]);
		$test = count($cek);
		$expected_result = 0;
		$test_name = 'User login using wrong password';
		$this->unit->run($test, $expected_result, $test_name);
	}
}