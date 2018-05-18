<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sales extends CI_Controller {

	
	public function __construct() {
			parent::__construct();
			
			
            $this->load->model('Authmin_model');
            if ($this->session->userdata('loggedin')['role'] != '6') {
            	redirect(base_url('Home'));
			}
			
			
        }

	public function userrole(){
		return 'sales';
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
    

	public function profile() {
		$data['title'] = 'My Profile';
		$data['role'] = $this->userrole();
		$this->load->view('headfoot/sider',$data);
		$this->load->view('headfoot/header' ,$data);
		$this->load->view('profil');
		$this->load->view('headfoot/footer');
	}
    
	public function insertPelanggan() {
		$data['title'] = 'Add Pelanggan';
        $data['role'] = $this->userrole();
		$this->load->view('headfoot/sider',$data);
		$this->load->view('headfoot/header' ,$data);
		$this->load->view('addPelanggan');
		$this->load->view('headfoot/footer');
	}

	
	public function addPelanggan() {
		$pelangganID = ($this->input->post('pelangganID'));
        $nama = ($this->input->post('nama'));
		$lokasi = ($this->input->post('lokasi'));
		
        $datainsert = array(
				'pelangganID' => $pelangganID,	
				'nama' => $nama,
				'lokasi' => $lokasi
                                
        );
			
			$insert = $this->Authmin_model->InsertData('pelanggan', $datainsert);
			if($insert) {
				$this->session->set_flashdata('success', ' '. $pelangganID . " berhasil ditambahkan ke Pelanggan.");
				redirect(base_url(''. $this->userrole() .'/managePelanggan'));
			} else {
				$this->session->set_flashdata('error','Pelanggan gagal ditambahkan, cek ID Pelanggan.');
				redirect(base_url(''. $this->userrole() .'/insertPelanggan'));
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

	



	public function deletePelanggan($pelangganID) {
		$this->Authmin_model->deleteData('pelanggan', 'pelangganID', $pelangganID);
		$this->session->set_flashdata('success','Pelanggan berhasil Dihapus.');
			redirect(base_url(''. $this->userrole() .'/managePelanggan'));
			
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


	public function editPelanggan($id) {
		$data['title'] = 'Edit Pelanggan';
        $data['role'] = $this->userrole();
		$dataSelMenu= array(
			'pelanggan' => $this->Authmin_model->getSelData('pelanggan', 'pelangganID', $id),
			'title' => 'Edit Pelanggan');
		$this->load->view('headfoot/sider',$data);
		$this->load->view('headfoot/header' ,$data);
		$this->load->view('editPelanggan', $dataSelMenu);
		$this->load->view('headfoot/footer');
	}

	

			
		public function updatePelanggan() {
			$pelangganID = ($this->input->post('pelangganID'));
        $nama = ($this->input->post('nama'));
		$lokasi = ($this->input->post('lokasi'));
		
        $dataupdate = array(
				'pelangganID' => $pelangganID,	
				'nama' => $nama,
				'lokasi' => $lokasi
                                
        );
	
				$update = $this->Authmin_model->updateData('pelangganID', $pelangganID, 'pelanggan', $dataupdate);
				$this->session->set_flashdata('success', ' '. $pelangganID . " berhasil diupdate.");
				redirect(base_url(''. $this->userrole() .'/managePelanggan'));
			}

			
}