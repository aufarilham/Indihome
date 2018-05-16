<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class asman extends CI_Controller {

	
	public function __construct() {
			parent::__construct();
			
			
            $this->load->model('Authmin_model');
            if ($this->session->userdata('loggedin')['role'] != '2') {
            	redirect(base_url('Home'));
			}
			
			
        }

	public function userrole(){
		return 'asman';
	}
	public function index() {
		$data['title'] = $this->userrole();
        $data['role'] = $this->userrole();
		$dataload = array(
		'role'=> $this->Authmin_model->getData('role')
		);
		$this->load->view('asman/headfoot/sider',$data);
		$this->load->view('asman/headfoot/header');
		$this->load->view('asman/dashboard', $dataload);
		$this->load->view('asman/headfoot/footer');
	}
    
    public function insertOA() {
		$data['title'] = 'Add OA';
        $data['role'] = $this->userrole();
		$this->load->view('asman/headfoot/sider',$data);
		$this->load->view('asman/headfoot/header');
		$this->load->view('addOA');
		$this->load->view('asman/headfoot/footer');
	}
	
	public function insertODC() {
		$data['title'] = 'Add ODC';
        $data['role'] = $this->userrole();
		$this->load->view('asman/headfoot/sider',$data);
		$this->load->view('asman/headfoot/header');
		$this->load->view('addODC');
		$this->load->view('asman/headfoot/footer');
	}

	public function insertODP() {
		$data['title'] = 'Add ODP';
        $data['role'] = $this->userrole();
		$this->load->view('asman/headfoot/sider',$data);
		$this->load->view('asman/headfoot/header');
		$this->load->view('addODP');
		$this->load->view('asman/headfoot/footer');
	}
        public function insertEA() {
		$data['title'] = 'Add EA';
        $data['role'] = $this->userrole();
		$this->load->view('asman/headfoot/sider',$data);
		$this->load->view('asman/headfoot/header');
		$this->load->view('addEA');
		$this->load->view('asman/headfoot/footer');
	}

	public function insertPelanggan() {
		$data['title'] = 'Add Pelanggan';
        $data['role'] = $this->userrole();
		$this->load->view('asman/headfoot/sider',$data);
		$this->load->view('asman/headfoot/header');
		$this->load->view('addPelanggan');
		$this->load->view('asman/headfoot/footer');
	}

	public function myprofile() {
		$data['title'] = 'My Profile';
		$this->load->view('asman/headfoot/sider',$data);
		$this->load->view('asman/headfoot/header');
		$this->load->view('admin/profil');
		$this->load->view('asman/headfoot/footer');
	}

	public function manageAdmin() {
		$data['title'] = 'Manage Admin';
		$dataadmin = array(
			'admin'=> $this->Authmin_model->getAllData('admin', 'lastLogin', 'DESC'));
		$this->load->view('asman/headfoot/sider',$data);
		$this->load->view('asman/headfoot/header');
		$this->load->view('admin/listadmin', $dataadmin);
		$this->load->view('asman/headfoot/footer');
	}


	public function category() {
		$data['title'] = 'Manage Category';
		$datacategory = array(
			'kategori' => $this->Authmin_model->getAllData('kategori', 'namaKategori', 'ASC'),
			'title' => 'Manage Category');
		$this->load->view('asman/headfoot/sider',$data);
		$this->load->view('asman/headfoot/header');
		$this->load->view('admin/category', $datacategory);
		$this->load->view('asman/headfoot/footer');
	}

	public function addMenu() {
		$data['title'] = 'Add Menu';
		$datacategory = array(
			'namakategori' => $this->Authmin_model->getAllData('kategori','namaKategori', 'ASC'),
			'title' => 'Add Menu');
		$this->load->view('asman/headfoot/sider',$data);
		$this->load->view('asman/headfoot/header');
		$this->load->view('admin/addMenu', $datacategory);
		$this->load->view('asman/headfoot/footer');
	}

	public function addOA() {
		$xConnectCable = ($this->input->post('xConnectCable'));
        $ospTerm = ($this->input->post('ospTerm'));
		$feederCable = ($this->input->post('feederCable'));
		$primaryFC = ($this->input->post('primaryFC'));
        $fileABDOSP = ($this->input->post('fileABDOSP'));
		$odcPortIn = ($this->input->post('odcPortIn'));
        $lossCore = ($this->input->post('lossCore'));
        $xConnectODCspin = ($this->input->post('xConnectODCspin'));
		
        $datainsert = array(
				'xConnectCable' => $xConnectCable,
				'ospTerm' => $ospTerm,
				'feederCable' => $feederCable,
				'primaryFiberCable' => $primaryFC,
				'fileABDOSP' => $fileABDOSP,
                'odcPortIn' => $odcPortIn,
                'lossCore' => $lossCore,
                'xConnectODCspin' => $xConnectODCspin                
        );
			
			$insert = $this->Authmin_model->InsertData('oa', $datainsert);
			if($insert) {
				$this->session->set_flashdata('success', ' '. $xConnectCable . " berhasil ditambahkan ke OA.");
				redirect(''. $this->userrole() .'/manageOA');
			} else {
				$this->session->set_flashdata('error','OA gagal ditambahkan, cek kode makanan.');
				redirect(''. $this->userrole() .'/insertOA');
			}

	}

	public function addODC() {
		$xConnectODCspin = ($this->input->post('xConnectODCspin'));
        $xConnectODCspout = ($this->input->post('xConnectODCspout'));
		$odcPORTOUT = ($this->input->post('odcPORTOUT'));
		$distributionCable = ($this->input->post('distributionCable'));
        $fileABDODC = ($this->input->post('fileABDODC'));
		$odpAddress = ($this->input->post('$odpAddress'));
		$odpKordX = ($this->input->post('odpKordX'));
		$odpKordY = ($this->input->post('odpKordy'));
		$odpSPIN = ($this->input->post('odpSPIN'));
		
        $datainsert = array(
				'xConnectODCspin' => $xConnectODCspin,	
				'xConnectODCspout' => $xConnectODCspout,
				'odcPORTOUT' => $odcPORTOUT,
				'distributionCable' => $distributionCable,
				'fileABDODC' => $fileABDODC,
                'odpAddress' => $odpAddress,
				'odpKordX' => $odpKordX,
				'odpKordY' => $odpKordY,
				'odpSPIN' => $odpSPIN
                                
        );
			
			$insert = $this->Authmin_model->InsertData('odc', $datainsert);
			if($insert) {
				$this->session->set_flashdata('success', ' '. $xConnectCable . " berhasil ditambahkan ke OA.");
				redirect(''. $this->userrole() .'/manageODC');
			} else {
				$this->session->set_flashdata('error','ODC gagal ditambahkan, cek kode makanan.');
				redirect(''. $this->userrole() .'/insertODC');
			}

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
				redirect(''. $this->userrole() .'/managePelanggan');
			} else {
				$this->session->set_flashdata('error','Pelanggan gagal ditambahkan, cek kode makanan.');
				redirect(''. $this->userrole() .'/insertPelanggan');
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
				$this->session->set_flashdata('success', ' '. $xConnectCable . " berhasil ditambahkan ke ODP.");
				redirect(''. $this->userrole() .'/manageODP');
			} else {
				$this->session->set_flashdata('error','ODP gagal ditambahkan, cek kode makanan.');
				redirect(''. $this->userrole() .'/insertODP');
			}

	}






    public function addEA() {
		$xConnectCable = ($this->input->post('xConnectCable'));
        $eqpIP = ($this->input->post('eqpIP'));
		$eqpPORT = ($this->input->post('eqpPORT'));
		$eqpTERM = ($this->input->post('eqpTERM'));
        
		
        $datainsert = array(
				'xConnectCable' => $xConnectCable,
				'eqpIP' => $eqpIP,
				'eqpPORT' => $eqpPORT,
				'eqpTERM' => $eqpTERM,
				                
        );
			
			$insert = $this->Authmin_model->InsertData('ea', $datainsert);
            
			if($insert) {
				$this->session->set_flashdata('success', ' '. $xConnectCable . " berhasil ditambahkan ke EA.");
				redirect(''. $this->userrole() .'/manageEA');
			} else {
				$this->session->set_flashdata('error','EA gagal ditambahkan, cek kode makanan.');
				redirect(''. $this->userrole() .'/insertEA');
			}

	}

	public function addUsers() {
		$userID = ($this->input->post('userID'));
        $username = ($this->input->post('username'));
		$password = ($this->input->post('password'));
		$role = ($this->input->post('role'));

        
		
        $datainsert = array(
				'xConnectCable' => $xConnectCable,
				'eqpIP' => $eqpIP,
				'eqpPORT' => $eqpPORT,
				'eqpTERM' => $eqpTERM,
				'created' => $this->Authmin_model->now()

				                
        );
			
			$insert = $this->Authmin_model->InsertData('users', $datainsert);
            
			if($insert) {
				$this->session->set_flashdata('success', ' '. $userID . " berhasil ditambahkan ke Users.");
				redirect(''. $this->userrole() .'/manageUser');
			} else {
				$this->session->set_flashdata('error','EA gagal ditambahkan, cek kode makanan.');
				redirect(''. $this->userrole() .'/insertUsers');
			}

	}

	public function addCategory() {
		$newcategory = htmlspecialchars(strtoupper(str_replace (" ", "", $this->input->post('newcategory'))));
		$datainsert = array('namaKategori' => $newcategory);
		$hasil = $this->Authmin_model->InsertData('kategori', $datainsert);
		if($hasil) {
			$this->session->set_flashdata('success','Kategori ' . $newcategory . " berhasil ditambahkan.");
			redirect('asman/category');
		} else {
			$this->session->set_flashdata('error','Kategori gagal ditambahkan!');
			redirect('asman/category');
		}
	}

	public function deleteCategory($id) {
		$this->Authmin_model->deleteData('kategori', 'id', $id);
		$this->session->set_flashdata('success','Kategori berhasil Dihapus.');
			redirect('asman/category');
	}

	public function addAdmin() {
		$data['title'] = 'Add Admin';
		$this->load->view('asman/headfoot/sider',$data);
		$this->load->view('asman/headfoot/header');
		$this->load->view('admin/addAdmin');
		$this->load->view('asman/headfoot/footer');
	}

	public function insertAdmin() {
		$email = htmlspecialchars($this->input->post('emailnewadmin'));
		$password = htmlspecialchars($this->input->post('passwordnewadmin'));
		$passenc = md5("m@120maH5An~7@mv4N" . $password . "5uKs3ZzZk4PepE3le@~~");
		$name = htmlspecialchars($this->input->post('namenewadmin'));
		$role = $this->input->post('rolenewadmin');

		$datainsert = array(
			'username' => $email,
			'password' => $passenc,
			'adminName' => $name,
			'role' => $role);

		$hasil = $this->Authmin_model->InsertData('admin', $datainsert);
		if($hasil) {
			$this->session->set_flashdata('success','Admin ' . $email . " berhasil ditambahkan.");
			redirect('asman/addAdmin');
		} else {
			$this->session->set_flashdata('error','Admin gagal ditambahkan. Email sudah digunakan!');
			redirect('asman/addAdmin');
		}
	}

	public function deleteadmin($id) {
		$this->Authmin_model->deleteData('admin', 'id', $id);
		$this->session->set_flashdata('success','Admin berhasil Dihapus.');
			redirect('asman/manageAdmin');
	}

	public function manageOA2() {
		$data['title'] = 'Manage OA';
		$datamenu = array(
			'OA' => $this->Authmin_model->getAllData('oa', 'ospTerm', 'ASC'));
		$this->load->view('asman/headfoot/sider',$data);
		$this->load->view('asman/headfoot/header');
		$this->load->view('listOA', $datamenu);
		$this->load->view('asman/headfoot/footer');
	}
	
	public function manageOA() {
		$data['title'] = 'Manage OA';
        $data['role'] = $this->userrole();
		$datamenu = array(
			'OA' => $this->Authmin_model->getAllData('oa', 'ospTerm', 'ASC'));
		$this->load->view('asman/headfoot/sider',$data);
		$this->load->view('asman/headfoot/header');
		$this->load->view('OA', $datamenu);
		$this->load->view('asman/headfoot/footer');
	}

	public function managePelanggan() {
		$data['title'] = 'Manage Pelanggan';
        $data['role'] = $this->userrole();
		$datamenu = array(
			'pelanggan' => $this->Authmin_model->getAllData('pelanggan', 'pelangganID', 'ASC'));
		$this->load->view('asman/headfoot/sider',$data);
		$this->load->view('asman/headfoot/header');
		$this->load->view('pelanggan', $datamenu);
		$this->load->view('asman/headfoot/footer');
	}

	public function manageUsers() {
		$data['title'] = 'Manage Users';
        $data['role'] = $this->userrole();
		$datamenu = array(
			'users' => $this->Authmin_model->getAllData('users', 'id', 'ASC'));
		$this->load->view('asman/headfoot/sider',$data);
		$this->load->view('asman/headfoot/header');
		$this->load->view('users', $datamenu);
		$this->load->view('asman/headfoot/footer');
	}

	public function manageODC() {
		$data['title'] = 'Manage ODC';
        $data['role'] = $this->userrole();
		$datamenu = array(
			'ODC' => $this->Authmin_model->getAllData('odc', 'xConnectODCspin', 'ASC'));
		$this->load->view('asman/headfoot/sider',$data);
		$this->load->view('asman/headfoot/header');
		$this->load->view('ODC', $datamenu);
		$this->load->view('asman/headfoot/footer');
	}

	public function manageODP() {
		$data['title'] = 'Manage ODP';
        $data['role'] = $this->userrole();
		$datamenu = array(
			'ODP' => $this->Authmin_model->getAllData('odp', 'odpIDPORT', 'ASC'));
		$this->load->view('asman/headfoot/sider',$data);
		$this->load->view('asman/headfoot/header');
		$this->load->view('ODP', $datamenu);
		$this->load->view('asman/headfoot/footer');
	}
    
    public function manageEA() {
		$data['title'] = 'Manage EA';
        $data['role'] = $this->userrole();
		$datamenu = array(
			'EA' => $this->Authmin_model->getAllData('ea', 'xConnectCable', 'ASC')
        );
		$this->load->view('asman/headfoot/sider',$data);
		$this->load->view('asman/headfoot/header');
		$this->load->view('EA', $datamenu);
		$this->load->view('asman/headfoot/footer');
	}

	public function manageUser() {
		$data['title'] = 'Manage Users';
        $data['role'] = $this->userrole();
		$datamenu = array(
			'users' => $this->Authmin_model->getAllData('users', 'userID', 'ASC')
        );
		$this->load->view('asman/headfoot/sider',$data);
		$this->load->view('asman/headfoot/header');
		$this->load->view('Users', $datamenu);
		$this->load->view('asman/headfoot/footer');
	}
	

		public function deleteMenu($kode) {
		$this->Authmin_model->deleteData('menu', 'kode', $kode);
		$this->session->set_flashdata('success','menu berhasil Dihapus.');
			redirect('asman/managemenu');
	}

	public function editOA($xConnectCable) {
		$data['title'] = 'Edit OA';
        $data['role'] = $this->userrole();
		$dataSelMenu= array(
			'oa' => $this->Authmin_model->getSelData('oa', 'xConnectCable', $xConnectCable),
			'title' => 'Edit OA');
		$this->load->view('asman/headfoot/sider',$data);
		$this->load->view('asman/headfoot/header');
		$this->load->view('editOA', $dataSelMenu);
		$this->load->view('asman/headfoot/footer');
	}

	
	public function editEA($xConnectCable) {
		$data['title'] = 'Edit EA';
        $data['role'] = $this->userrole();
		$dataSelMenu= array(
			'ea' => $this->Authmin_model->getSelData('ea', 'xConnectCable', $xConnectCable),
			'title' => 'Edit EA');
		$this->load->view('asman/headfoot/sider',$data);
		$this->load->view('asman/headfoot/header');
		$this->load->view('editEA', $dataSelMenu);
		$this->load->view('asman/headfoot/footer');
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
		$this->load->view('asman/headfoot/sider',$data);
		$this->load->view('asman/headfoot/header');
		$this->load->view('editODP', $dataSelMenu);
		$this->load->view('asman/headfoot/footer');
	}

	public function editODC($xConnectODCspin, $xConnectODCspout) {
		$xConnectODCspin;
		$xConnectODCspout;
		$data['title'] = 'Edit ODC';
        $data['role'] = $this->userrole();
		$dataSelMenu= array(
			'odc' => $this->Authmin_model->getSeltwoData('odc', 'xConnectODCspin', 'xConnectODCspout', $xConnectODCspin, $xConnectODCspout),
			'title' => 'Edit ODC');
		$this->load->view('asman/headfoot/sider',$data);
		$this->load->view('asman/headfoot/header');
		$this->load->view('editODC', $dataSelMenu);
		$this->load->view('asman/headfoot/footer');
	}

	public function showODCkordinat($xConnectODCspin, $xConnectODCspout) {
		$xConnectODCspin;
		$xConnectODCspout;
		$data['title'] = 'ODC MAPS';
        $data['role'] = $this->userrole();
		$dataSelMenu= array(
			'odc' => $this->Authmin_model->getSeltwoData('odc', 'xConnectODCspin', 'xConnectODCspout', $xConnectODCspin, $xConnectODCspout),
			'title' => 'ODC MAPS');
			
		$this->load->view('asman/headfoot/sider',$data);
		$this->load->view('asman/headfoot/header');
		$this->load->view('odcMaps', $dataSelMenu);
		$this->load->view('asman/headfoot/footer');
	}


	public function editPelanggan($id) {
		$data['title'] = 'Edit Pelanggan';
        $data['role'] = $this->userrole();
		$dataSelMenu= array(
			'pelanggan' => $this->Authmin_model->getSelData('pelanggan', 'pelangganID', $id),
			'title' => 'Edit Pelanggan');
		$this->load->view('asman/headfoot/sider',$data);
		$this->load->view('asman/headfoot/header');
		$this->load->view('editPelanggan', $dataSelMenu);
		$this->load->view('asman/headfoot/footer');
	}

	
	public function showODCkord($xConnectODCspin, $xConnectODCspout) {
		$xConnectODCspin;
		$xConnectODCspout;
		$data['title'] = 'ODC Maps';
        $data['role'] = $this->userrole();
		$dataSelMenu= array(
			'odc' => $this->Authmin_model->getSeltwoData('odc', 'xConnectODCspin', 'xConnectODCspout', $xConnectODCspin, $xConnectODCspout),
			'title' => 'ODC Maps');
		$this->load->view('asman/headfoot/sider',$data);
		$this->load->view('asman/headfoot/header');
		$this->load->view('odcMaps', $dataSelMenu);
		$this->load->view('asman/headfoot/footer');
	}



	public function updateOA() {
		$xConnectCable = ($this->input->post('xConnectCable'));
        $ospTerm = ($this->input->post('ospTerm'));
		$feederCable = ($this->input->post('feederCable'));
		$primaryFC = ($this->input->post('primaryFC'));
        $fileABDOSP = ($this->input->post('fileABDOSP'));
		$odcPortIn = ($this->input->post('odcPortIn'));
        $lossCore = ($this->input->post('lossCore'));
        $xConnectODCspin = ($this->input->post('xConnectODCspin'));
		
		$dataupdate = array(
				
				'ospTerm' => $ospTerm,
				'feederCable' => $feederCable,
				'primaryFiberCable' => $primaryFC,
				'fileABDOSP' => $fileABDOSP,
                'odcPortIn' => $odcPortIn,
                'lossCore' => $lossCore,
                'xConnectODCspin' => $xConnectODCspin
				);

			$update = $this->Authmin_model->updateData('xConnectCable', $xConnectCable, 'oa', $dataupdate);
			$this->session->set_flashdata('success', ' '. $xConnectCable . " berhasil diupdate.");
			redirect(''. $this->userrole() .'/manageOA');
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
				$this->session->set_flashdata('success', ' '. $xConnectCable . " berhasil diupdate.");
				redirect(''. $this->userrole() .'/manageODC');
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
				$update = $this->Authmin_model->updatetwoData('odpSPIN','odpIDPORT',$odpSPIN, $odpIDPORT, 'odp', $dataupdate);
						$this->session->set_flashdata('success', ' '. $xConnectCable . " berhasil diupdate.");
						redirect(''. $this->userrole() .'/manageODP');
					} 	
		


		public function updateEA() {
			$xConnectCable = ($this->input->post('xConnectCable'));
			$eqpIP = ($this->input->post('eqpIP'));
			$eqpPORT = ($this->input->post('eqpPORT'));
			$eqpTERM = ($this->input->post('eqpTERM'));
			
			$dataupdate = array(
					
					'xConnectCable' => $xConnectCable,
					'eqpIP' => $eqpIP,
					'eqpPORT' => $eqpPORT,
					'eqpTERM' => $eqpTERM
					);
	
				$update = $this->Authmin_model->updateData('xConnectCable', $xConnectCable, 'ea', $dataupdate);
				$this->session->set_flashdata('success', ' '. $xConnectCable . " berhasil diupdate.");
				redirect(''. $this->userrole() .'/manageEA');
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
				redirect(''. $this->userrole() .'/managePelanggan');
			}
		
	

	public function manageorders() {
		$data['title'] = 'Manage Order';
		$dataorder = array(
			'orderan' => $this->Authmin_model->getorder(),
			'title' => 'Manage Order');
		$this->load->view('asman/headfoot/sider',$data);
		$this->load->view('asman/headfoot/header');
		$this->load->view('admin/listorder', $dataorder);
		$this->load->view('asman/headfoot/footer');
	}

	public function orderdetilinfo($id) {
        $order = $this->Authmin_model->get_order_id($id);
        $order_det = $this->Authmin_model->getDetilOrder($id);
        $data =array(
            'kode'=>$order[0]->kode_order,
            'tanggal'=>$order[0]->tanggalorder,
            'tanggalkirim'=>$order[0]->tanggalkirim,
            'alamat'=>$order[0]->alamat,
            'total'=>$order[0]->totalbayar,
            'status'=>$order[0]->status,
            'buktibayar'=>$order[0]->image,
            'sudahbayar'=>$order[0]->jumlahbayar,
            'barang'=>$order_det
            );
        echo json_encode($data);
	}

	public function updatestatus($kode) {
		$data = array(
			'status' => $this->input->post('status')
			);
		$update = $this->Authmin_model->updateData('kode_order', $kode, 'order', $data);
		if ($this->input->post('status') == 'Pesanan Ditolak/Dibatalkan') {
			$flash = $this->session->set_flashdata('error', 'Status Pemesanan ' . $kode . ' diubah menjadi ' . $this->input->post('status'));
		} else {
			$flash = $this->session->set_flashdata('success', 'Status Pemesanan ' . $kode . ' berhasil diubah menjadi ' . $this->input->post('status'));
		}
		redirect('asman/manageorders', $flash);
	}

}