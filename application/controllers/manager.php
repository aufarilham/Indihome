<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class manager extends CI_Controller {

	
	public function __construct() {
			parent::__construct();
			
			
            $this->load->model('Authmin_model');
            if ($this->session->userdata('loggedin')['role'] != '1') {
            	redirect(base_url('Home'));
			}
			
			
        }

	public function userrole(){
		return 'manager';
	}
	public function index() {
		$data['title'] = $this->userrole();
		$data['role'] = $this->userrole();
		$datagrafik = array(
			"oa"=> $this->Authmin_model->reportOA(),
			"ea"=> $this->Authmin_model->reportEA(),
			"odp" => $this->Authmin_model->reportODP(),
			
			"odc" => $this->Authmin_model->reportODC(),
			"pelanggan" => $this->Authmin_model->reportPelanggan()
			
			
		);
	
		$data['title'] = 'Dashboard';
		$data['role'] = $this->userrole();
		
		$this->load->view('headfoot/sider',$data);
		$this->load->view('headfoot/header' ,$data);
		$this->load->view('dashboard', $datagrafik);
		
		
	}

	public function tracing() {
		$data['title'] = 'Tracing';
		$data['role'] = $this->userrole();
		$this->load->view('headfoot/sider',$data);
		$this->load->view('headfoot/header' ,$data);
		$this->load->view('tracing');
		$this->load->view('headfoot/footer');
	}
    

	public function profile() {
		$data['title'] = 'My Profile';
		$data['role'] = $this->userrole();
		$this->load->view('headfoot/sider',$data);
		$this->load->view('headfoot/header' ,$data);
		$this->load->view('profil');
		$this->load->view('headfoot/footer');
	}
    
	public function insertUsers() {
		$data['title'] = 'Add Users';
        $data['role'] = $this->userrole();
		$this->load->view('headfoot/sider',$data);
		$this->load->view('headfoot/header' ,$data);
		$this->load->view('addUsers');
		$this->load->view('headfoot/footer');
	}

	


	public function search(){
		$search = ($this->input->post('search'));

		$seachs = $this->Authmin_model->search($search);
			if($seachs) {
				$dataSelMenu= array(
					'search' => $this->Authmin_model->search($search),
					'title' => 'Tracing');

					$data['role'] = $this->userrole();
					$data['tittle'] = 'Tracing'; 
					$this->load->view('headfoot/sider',$data);
					$this->load->view('headfoot/header' ,$data);
					$this->load->view('tracing', $dataSelMenu);
					$this->load->view('headfoot/footer');
				
			} else {
				$this->session->set_flashdata('error','tidak ditemukan');
				redirect(base_url(''. $this->userrole() .'/tracing'));
			}
		}	


	public function ubahpass($username) {
		$opass = hash('sha256',  $this->input->post('opassword'));
		$npass = hash('sha256',  $this->input->post('npassword') );
		$cpass = hash('sha256',  $this->input->post('cpassword'));
		$data['password'] = $npass;

		$do = $this->Authmin_model->getColomn($username);

		if($do[0]->password == $opass) {
			if($cpass == $npass) {
				if(strlen($this->input->post('npassword')) >= 5) {
					$update = $this->Authmin_model->updateData('username', $username, 'users', $data);
					$flash = $this->session->set_flashdata('success','Password berhasil diganti.');
				} else {
					$flash = $this->session->set_flashdata('error','Password gagal diubah, minimal 5 karakter.');
				}
			} else {
				$flash = $this->session->set_flashdata('error','Cek kembali isian anda.');
			}
		} else {
			$flash = $this->session->set_flashdata('error','Password salah.');
		}
		redirect(base_url(''. $this->userrole() .'/profile'), $flash);
	}

	public function addUsers() {
		$userID = ($this->input->post('userID'));
		$username = ($this->input->post('username'));
        $email = ($this->input->post('email'));
		$password = hash('sha256', $this->input->post('password'));
		$role = ($this->input->post('role'));

        
		
        $datainsert = array(
				'userID' => $userID,
				'username' => $username,
				'email' => $email,
				'password' => $password,
				'role' => (int)$role,
				'created' => $this->Authmin_model->now()

				                
		);

		
			
			$insert = $this->Authmin_model->InsertData('users', $datainsert);
            
			if($insert) {
				$this->session->set_flashdata('success', ' '. $userID . " berhasil ditambahkan ke Users.");
				redirect(base_url(''. $this->userrole() .'/manageUser'));
			} else {
				$this->session->set_flashdata('error','User gagal ditambahkan, cek UserID dan Username.');
				redirect(base_url(''. $this->userrole() .'/insertUsers'));
			}

	}

	
	public function manageOA() {
		$data['title'] = 'Manage OA';
        $data['role'] = $this->userrole();
		$datamenu = array(
			'OA' => $this->Authmin_model->getAllData('oa', 'ospTerm', 'ASC'));
		$this->load->view('headfoot/sider',$data);
		$this->load->view('headfoot/header' ,$data);
		$this->load->view('OA', $datamenu);
		$this->load->view('headfoot/footer');
	}

	public function managePelanggan() {
		$data['title'] = 'Manage Pelanggan';
        $data['role'] = $this->userrole();
		$datamenu = array(
			'pelanggan' => $this->Authmin_model->getAllData('pelanggan', 'pelangganID', 'ASC'));
		$this->load->view('headfoot/sider',$data);
		$this->load->view('headfoot/header' ,$data);
		$this->load->view('pelanggan', $datamenu);
		$this->load->view('headfoot/footer');
	}

	public function manageUsers() {
		$data['title'] = 'Manage Users';
        $data['role'] = $this->userrole();
		$datamenu = array(
			'users' => $this->Authmin_model->getAllData('users', 'id', 'ASC'));
		$this->load->view('headfoot/sider',$data);
		$this->load->view('headfoot/header' ,$data);
		$this->load->view('users', $datamenu);
		$this->load->view('headfoot/footer');
	}

	public function manageRole() {
		$data['title'] = 'Manage Role';
        $data['role'] = $this->userrole();
		$datamenu = array(
			'roles' => $this->Authmin_model->getAllData('role', 'id', 'ASC'));
		$this->load->view('headfoot/sider',$data);
		$this->load->view('headfoot/header' ,$data);
		$this->load->view('role', $datamenu);
		$this->load->view('headfoot/footer');
	}

	public function manageODC() {
		$data['title'] = 'Manage ODC';
        $data['role'] = $this->userrole();
		$datamenu = array(
			'ODC' => $this->Authmin_model->getAllData('odc', 'xConnectODCspin', 'ASC'));
		$this->load->view('headfoot/sider',$data);
		$this->load->view('headfoot/header' ,$data);
		$this->load->view('ODC', $datamenu);
		$this->load->view('headfoot/footer');
	}

	public function manageODP() {
		$data['title'] = 'Manage ODP';
        $data['role'] = $this->userrole();
		$datamenu = array(
			'ODP' => $this->Authmin_model->getAllData('odp', 'odpIDPORT', 'ASC'));
		$this->load->view('headfoot/sider',$data);
		$this->load->view('headfoot/header' ,$data);
		$this->load->view('ODP', $datamenu);
		$this->load->view('headfoot/footer');
	}
    
    public function manageEA() {
		$data['title'] = 'Manage EA';
        $data['role'] = $this->userrole();
		$datamenu = array(
			'EA' => $this->Authmin_model->getAllData('ea', 'xConnectCable', 'ASC')
        );
		$this->load->view('headfoot/sider',$data);
		$this->load->view('headfoot/header' ,$data);
		$this->load->view('EA', $datamenu);
		$this->load->view('headfoot/footer');
	}

	public function manageUser() {
		$data['title'] = 'Manage Users';
        $data['role'] = $this->userrole();
		$datamenu = array(
			'users' => $this->Authmin_model->getAllData('users', 'userID', 'ASC')
        );
		$this->load->view('headfoot/sider',$data);
		$this->load->view('headfoot/header' ,$data);
		$this->load->view('Users', $datamenu);
		$this->load->view('headfoot/footer');
	}
	

		public function updateRole() {
				$id = ($this->input->post('id'));
			$role_name = ($this->input->post('role_name'));
			
			$dataupdate = array(
					
					'role_name' => $role_name
									
			);
		
					$update = $this->Authmin_model->updateData('id', $id, 'role', $dataupdate);
					$this->session->set_flashdata('success', ' '. $id . " berhasil diupdate.");
					redirect(base_url(''. $this->userrole() .'/manageRole'));
				}

				public function editRole($id) {
					$data['title'] = 'Edit Role';
					$data['role'] = $this->userrole();
					$dataSelMenu= array(
						'roles' => $this->Authmin_model->getSelData('role', 'id', $id),
						'title' => 'Edit Role');
					$this->load->view('headfoot/sider',$data);
					$this->load->view('headfoot/header' ,$data);
					$this->load->view('editRole', $dataSelMenu);
					$this->load->view('headfoot/footer');
				}
		
	
	public function download($data){
		$this->load->helper('url_helper');
        $dataArray = array(
            "data"=> $this->Authmin_model->getData($data));        
           //var_dump($data); die();
		   $filename ="report" . $data .".xls";
		   $contents = $this->load->view("xls". $data , $dataArray); 
		   header('Content-type: application/ms-excel');
		   header('Content-Disposition: attachment; filename='.$filename);
		   echo $contents;   
    }

}