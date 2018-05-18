<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct() {
            parent::__construct();
            $this->CI =& get_instance();

            $this->load->model('Authmin_model');
			
            $loggedin = $this->session->userdata('loggedin');
            if (empty($loggedin) || $loggedin != true) {
            	
            }
        }

	public function index() {
		redirect('admin/Dashboard');
	}

	public function loginadmin() {
		$usernameAdmin = htmlspecialchars($this->input->post('username'));
		$passwordAdmin = htmlspecialchars($this->input->post('password'));
		$passenc = hash('sha256', $passwordAdmin);
		$isLogin = $this->Authmin_model->loginAdmin($usernameAdmin, $passenc);
		
		if($isLogin == true) {
			$loginadminData = array(
				'userID' => $isLogin[0]->userID,
				'username' => $isLogin[0]->username,
				'email' => $isLogin[0]->email,
				'role' => $isLogin[0]->role,
				'created' => $isLogin[0]->created,
				'time' => $isLogin[0]->lastLogin);
			$this->session->set_userdata('loggedin', $loginadminData);
			$timeLogin = array('lastLogin' => $this->Authmin_model->now());
			$this->Authmin_model->updateData('userID', $isLogin[0]->userID, 'users', $timeLogin);
			if($isLogin[0]->role == '2')
                {
                    redirect(base_url('asman'));
				} elseif($isLogin[0]->role == '1')
                {
                    redirect(base_url('manager'));
				}  
				elseif($isLogin[0]->role == '3')
                {
                    redirect(base_url('supervisor'));
                }  elseif($isLogin[0]->role == '4')
                {
                    redirect(base_url('staffahli'));
				}  
				elseif($isLogin[0]->role == '5')
                {
                    redirect(base_url('staff'));
                }  elseif($isLogin[0]->role == '6')
                {
                    redirect(base_url('sales'));
                }  
				
					
			
			
		} else {
			redirect(base_url('home'));
            
		}
	}

	public function logoutadmin() {
		$this->session->unset_userdata('loggedin');
		$this->session->sess_destroy();
		redirect(base_url(('Home')));
	}



	
}
?>