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

	public function index() {
		$data['title'] = 'Assistent Manager Dashboard';
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
		$this->load->view('asman/headfoot/sider',$data);
		$this->load->view('asman/headfoot/header');
		$this->load->view('addOA');
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

	public function manageUser() {
		$data['title'] = 'Manage User';
		$datauser = array(
			'user'=> $this->Authmin_model->getAllData('user', 'lastLogin', 'DESC'));
		$this->load->view('asman/headfoot/sider',$data);
		$this->load->view('asman/headfoot/header');
		$this->load->view('admin/listuser', $datauser);
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

	public function insertMenu() {
		$kode = htmlspecialchars($this->input->post('kodemenu'));
		$nama = htmlspecialchars(strtoupper($this->input->post('namamenu')));
		$kategori = $this->input->post('kategorimenu');
		$harga = $this->input->post('hargamenu');
		$deskripsi = htmlspecialchars($this->input->post('deskripmenu'));

		$config = array(
				'upload_path'=> './assets/fotomenu/',
				'allowed_types'=>'gif|jpg|png|jpeg',
				'max_size'=>2048,
				'overwrite'=>true,
				'file_name'=> $kategori . '_' . $this->input->post('kodemenu'));
		$this->upload->initialize($config);
		$upload = $this->upload->do_upload('previewimage');

		if($upload) {
			$datainsert = array(
				'kode' => $kode,
				'nama' => $nama,
				'kategori' => $kategori,
				'harga' => $harga,
				'deskripsi' => $deskripsi,
				'image' => 'assets/fotomenu/'.$this->upload->data('file_name'));

			$insert = $this->Authmin_model->InsertData('menu', $datainsert);
			if($insert) {
				$this->session->set_flashdata('success', ' '. $nama . " berhasil ditambahkan ke menu.");
				redirect('asman/addMenu');
			} else {
				$this->session->set_flashdata('error','Menu gagal ditambahkan, cek kode makanan.');
				redirect('asman/addMenu');
			}
		} else {
				$this->session->set_flashdata('error','Gagal upload Gambar. Maksimal gambar adalah 2MB');
				redirect('asman/addMenu');
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
		$datamenu = array(
			'OA' => $this->Authmin_model->getAllData('oa', 'ospTerm', 'ASC'));
		$this->load->view('asman/headfoot/sider',$data);
		$this->load->view('asman/headfoot/header');
		$this->load->view('OA', $datamenu);
		$this->load->view('asman/headfoot/footer');
	}
	

		public function deleteMenu($kode) {
		$this->Authmin_model->deleteData('menu', 'kode', $kode);
		$this->session->set_flashdata('success','menu berhasil Dihapus.');
			redirect('asman/managemenu');
	}

	public function editOA($xConnectCable) {
		$data['title'] = 'Edit Menu';
		$dataSelMenu= array(
			'oa' => $this->Authmin_model->getSelData('oa', 'xConnectCable', $xConnectCable),
			'title' => 'Edit OA');
		$this->load->view('asman/headfoot/sider',$data);
		$this->load->view('asman/headfoot/header');
		$this->load->view('editOA', $dataSelMenu);
		$this->load->view('asman/headfoot/footer');
	}

	public function updateOA() {
		$ospTerm = ($this->input->post('ospTerm'));
		$feederCable = ($this->input->post('feederCable'));
		$primaryFC = ($this->input->post('primaryFC'));
		$lossCore = ($this->input->post('lossCore'));
		$odcPortIn = ($this->input->post('odcPortIn'));
		$xConnectCable = ($this->input->post('xConnectCable'));
		$dataupdate = array(
				'ospTerm' => $ospTerm,
				'feederCable' => $feederCable,
				'primaryFC' => $primaryFC,
				'lossCore' => $lossCore,
				'odcPortIn' => $odcPortIn,
				'xConnectCable' => $xConnectCable
				);

			$update = $this->Authmin_model->updateData('ospTerm', $ospTerm, 'oa', $dataupdate);
			$this->session->set_flashdata('success', ' '. $nama . " berhasil diupdate.");
			redirect('asman/manageOA');
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