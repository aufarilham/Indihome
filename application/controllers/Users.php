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
        $data["cabang"] =  $this->kabel->getCabang();	
		$data["oa"] =  $this->kabel->getOA();
        $data["ea"] =  $this->kabel->getEA();
        $data["et"] =  $this->kabel->getET();
		$data["odc"] =  $this->kabel->getODC();
        $data["odcIn"] =  $this->kabel->getODCIN();
		$data["odp"] =  $this->kabel->getODP();
		$data["odpIn"] =  $this->kabel->getODPIN();
        $this->load->view('basic-table', $data);
	}
}