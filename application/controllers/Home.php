<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		
		$this->load->model('Authmin_model');
		$this->load->helper('url');
		if($this->session->userdata('loggedin')){
            $data = $this->session->userdata('loggedin');
            
                if($data['role'] == '1')
                {
                    redirect(base_url('manager'));
				} elseif($data['role'] == '2')
                {
                    redirect(base_url('asman'));
				} elseif($data['role'] == '3')
                {
                    redirect(base_url('supervisor'));
				} elseif($data['role'] == '4')
                {
                    redirect(base_url('staffahli'));
				} elseif($data['role'] == '5')
                {
                    redirect(base_url('staff'));
				} elseif($data['role'] == '6')
                {
                    redirect(base_url('sales'));
				} 
				
        
	}
    }

	public function	index() {
		if($this->session->userdata('loggedin')['status'] != 'login'){
			
			$this->load->view("signin"); 
			
		}
	}
}
