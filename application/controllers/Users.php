<?php 
 
class Users extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
		
	}
 
	function index(){
		$this->load->model("kabel");
		$data["oa"] =  $this->kabel->getOA();
		$data["odc"] =  $this->kabel->getODC();
		$data["odp"] =  $this->kabel->getODP();
		$this->load->view('basic-table', $data);
	}
}