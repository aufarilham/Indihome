<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		
		$this->load->model('Authmin_model');
		$this->load->helper('url');
		if($this->session->userdata('loggedin')){
            $data = $this->session->userdata('loggedin');
            
                if($data['role'] == '2')
                {
                    redirect(base_url('asman'));
                }
        
	}
    }

	public function	index() {
		if($this->session->userdata('loggedin')['status'] != 'login'){
			
			$this->load->view("signin"); 
			
		}
	}
}
