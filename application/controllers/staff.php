<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class staff extends CI_Controller {

	
	public function __construct() {
			parent::__construct();
			
			
            $this->load->model('Authmin_model');
            if ($this->session->userdata('loggedin')['role'] != '3') {
            	redirect(base_url('Home'));
			}
			
			
        }

	public function userrole(){
		return 'supervisor';
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
    
	
	
	public function insertODP() {
		$data['title'] = 'Add ODP';
		$data['role'] = $this->userrole();
		$data2 = array(
			'dataODC' => $this->Authmin_model->getAllDataJOIN('odc'),
			'dataPelanggan' => $this->Authmin_model->getAllDataJOIN('pelanggan')
		);
		$this->load->view('headfoot/sider',$data);
		$this->load->view('headfoot/header' ,$data);
		$this->load->view('addODP', $data2);
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

	public function addODP() {
		$odpSPIN = ($this->input->post('odpSPIN'));
		$odpIDPORT = ($this->input->post('odpIDPORT'));
		$kondisi = ($this->input->post('kondisi'));
		$odpName = ($this->input->post('odpName'));
		$noModem = ($this->input->post('noModem'));
		$noInternet = ($this->input->post('noInternet'));
		$noTelepon = ($this->input->post('noTelepon'));
		$noTelevisi = ($this->input->post('noTelevisi'));
		$pelangganID = ($this->input->post('pelangganID'));
		$operationDate = ($this->input->post('operationDate'));

        $datainsert = array(
				'odpSPIN' => $odpSPIN,	
				'odpIDPORT' => $odpIDPORT,
				'kondisi' => $kondisi,
				'odpName' => $odpName,
				'noModem' => $noModem,
                'noInternet' => $noInternet,
				'noTelepon' => $noTelepon,
				'noTelevisi' => $noTelevisi,
				'pelangganID' => $pelangganID,
				'operationDate' => $operationDate
                                
        );
			
			$insert = $this->Authmin_model->InsertData('odp', $datainsert);
			if($insert) {
				$this->session->set_flashdata('success', ' '. $odpIDPORT . " berhasil ditambahkan ke ODP.");
				redirect(base_url(''. $this->userrole() .'/manageODP'));
			} else {
				$this->session->set_flashdata('error','ODP gagal ditambahkan, cek odpIDPORT.');
				redirect(base_url(''. $this->userrole() .'/insertODP'));
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

	

	public function deleteODC($xConnectODCspin, $xConnectODCspout) {
		$xConnectODCspin;
		$xConnectODCspout;
		$this->Authmin_model->deletetwoData('odc', 'xConnectODCspin','xConnectODCspout', $xConnectODCspin, $xConnectODCspout);
		$this->session->set_flashdata('success','ODC berhasil Dihapus.');
			redirect(base_url(''. $this->userrole() .'/manageODC'));
			
	}

	public function deleteODP($a, $b, $c, $d) {
		
		$a; $b; $c; $d;
		$odpSPIN = $a.'/'.$b;
		$odpIDPORT = $c.'/'.$d;
		$this->Authmin_model->deletetwoData('odp', 'odpSPIN','odpIDPORT', $odpSPIN, $odpIDPORT);
		$this->session->set_flashdata('success','ODP berhasil Dihapus.');
			redirect(base_url(''. $this->userrole() .'/manageODP'));
			
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
	


	public function editODP($a, $b, $c, $d) {
		
		$a; $b; $c; $d;
		$odpSPIN = $a.'/'.$b;
		$odpIDPORT = $c.'/'.$d;
		$data['title'] = 'Edit ODP';
        $data['role'] = $this->userrole();
		$dataSelMenu= array(
			'odp' => $this->Authmin_model->getSeltwoData('odp', 'odpSPIN', 'odpIDPORT', $odpSPIN, $odpIDPORT),
			'title' => 'Edit ODP');
		$this->load->view('headfoot/sider',$data);
		$this->load->view('headfoot/header' ,$data);
		$this->load->view('editODP', $dataSelMenu);
		$this->load->view('headfoot/footer');
	}

	public function editODC($xConnectODCspin, $xConnectODCspout) {
		$xConnectODCspin;
		$xConnectODCspout;
		$data['title'] = 'Edit ODC';
        $data['role'] = $this->userrole();
		$dataSelMenu= array(
			'odc' => $this->Authmin_model->getSeltwoData('odc', 'xConnectODCspin', 'xConnectODCspout', $xConnectODCspin, $xConnectODCspout),
			'title' => 'Edit ODC');
		$this->load->view('headfoot/sider',$data);
		$this->load->view('headfoot/header' ,$data);
		$this->load->view('editODC', $dataSelMenu);
		$this->load->view('headfoot/footer');
	}

	public function showODCkordinat($xConnectODCspin, $xConnectODCspout) {
		$xConnectODCspin;
		$xConnectODCspout;
		$data['title'] = 'ODC MAPS';
        $data['role'] = $this->userrole();
		$dataSelMenu= array(
			'odc' => $this->Authmin_model->getSeltwoData('odc', 'xConnectODCspin', 'xConnectODCspout', $xConnectODCspin, $xConnectODCspout),
			'title' => 'ODC MAPS');
			
		$this->load->view('headfoot/sider',$data);
		$this->load->view('headfoot/header' ,$data);
		$this->load->view('odcMaps', $dataSelMenu);
		$this->load->view('headfoot/footer');
	}




	
	public function showODCkord($xConnectODCspin, $xConnectODCspout) {
		$xConnectODCspin;
		$xConnectODCspout;
		$data['title'] = 'ODC Maps';
        $data['role'] = $this->userrole();
		$dataSelMenu= array(
			'odc' => $this->Authmin_model->getSeltwoData('odc', 'xConnectODCspin', 'xConnectODCspout', $xConnectODCspin, $xConnectODCspout),
			'title' => 'ODC Maps');
		$this->load->view('headfoot/sider',$data);
		$this->load->view('headfoot/header' ,$data);
		$this->load->view('odcMaps', $dataSelMenu);
		$this->load->view('headfoot/footer');
	}



		public function updateODC() {
		$xConnectODCspin = ($this->input->post('xConnectODCspin'));
        $xConnectODCspout = ($this->input->post('xConnectODCspout'));
		$odcPORTOUT = ($this->input->post('odcPORTOUT'));
		$distributionCable = ($this->input->post('distributionCable'));
        $fileABDODC = ($this->input->post('fileABDODC'));
		$odpAddress = ($this->input->post('odpAddress'));
		$odpKordX = ($this->input->post('odpKordX'));
		$odpKordY = ($this->input->post('odpKordY'));
		$odpSPIN = ($this->input->post('odpSPIN'));
		
        $dataupdate = array(
				'odcPORTOUT' => $odcPORTOUT,
				'distributionCable' => $distributionCable,
				'fileABDODC' => $fileABDODC,
                'odpAddress' => $odpAddress,
				'odpKordX' => $odpKordX,
				'odpKordY' => $odpKordY,
				'odpSPIN' => $odpSPIN
                                
        );
				$update = $this->Authmin_model->updatetwoData('xConnectODCspin','xConnectODCspout', $xConnectODCspin, $xConnectODCspout, 'odc', $dataupdate);
				$this->session->set_flashdata('success', ' '. $xConnectODCspout . " berhasil diupdate.");
				redirect(base_url(''. $this->userrole() .'/manageODC'));
			} 

			public function updateODP() {
				$odpSPIN = ($this->input->post('odpSPIN'));
		$odpIDPORT = ($this->input->post('odpIDPORT'));
		$kondisi = ($this->input->post('kondisi'));
		$odpName = ($this->input->post('odpName'));
		$noModem = ($this->input->post('noModem'));
		$noInternet = ($this->input->post('noInternet'));
		$noTelepon = ($this->input->post('noTelepon'));
		$noTelevisi = ($this->input->post('noTelevisi'));
		$pelangganID = ($this->input->post('pelangganID'));
		$operationDate = ($this->input->post('operationDate'));

        $dataupdate = array(
				
				'kondisi' => $kondisi,
				'odpName' => $odpName,
				'noModem' => $noModem,
                'noInternet' => $noInternet,
				'noTelepon' => $noTelepon,
				'noTelevisi' => $noTelevisi
		);

				$update = $this->Authmin_model->updatetwoData('odpSPIN','odpIDPORT',$odpSPIN, $odpIDPORT, 'odp', $dataupdate);
				$this->session->set_flashdata('success', ' '. $odpIDPORT . " berhasil diupdate.");
				redirect(base_url(''. $this->userrole() .'/manageODP'));
			}



}