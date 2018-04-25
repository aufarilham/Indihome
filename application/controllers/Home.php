<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('signin');
	}

	public function basic_table()
	{
		$this->load->view('basic-table');
	}

	public function map_google()
	{
		$this->load->view('map-google');
	}
}
