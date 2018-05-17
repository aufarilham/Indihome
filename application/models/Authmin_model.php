<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authmin_model extends CI_Model {

	public function __construct()
    {
        parent::__construct();
    }

	public function loginAdmin($usernameAdmin, $passwordAdmin) {
		$this->db->select('*');
		$this->db->where('username', $usernameAdmin);
		$this->db->where('password', $passwordAdmin);
		$this->db->from('users');
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			return $query->result();
		}
		else{
			return false;
		}
	}
	
	public function load_data()
	{
		$this->db->select('*');
		$this->db->from('oa');

		$query = $this->db->get();
		return $query->result();
	}

	// mengambil data mobil per halaman
	/**
	 *
	 *	$order 	= menentukan order database, desc / asc / random
	 *	$offset = halaman
	 * 	$limit 	= Batas pengambilan data
	 * 	$search = Keyword / kata kunci
	 *
	*/
	public function load_dataPage($order, $offset, $limit, $search)
	{

		$this->db->select('*');
		$this->db->from('oa');

		// kondisi jika kata kunci tidak ada
		if($search != NULL)
		{
			$this->db->like('ospTerm', $search);
		}

       	$this->db->order_by('ospTerm', $order);

       	// kondisi jika pembatasan dan offset tidak ada
        if($limit != NULL && $offset!=NULL)
        {
        	$this->db->limit($limit,$offset);
        }
       	elseif($offset == NULL)
       	{
       		$this->db->limit($limit);
       	}

        $query = $this->db->get();

        return $query->result();
	}

	public function getColomn($user){
		$query = $this->db->select('*')
			->from('users')
			->where('username',$user)
			->get();
		if ($query->num_rows() > 0) {
			return $query->result();
		}else{
			return false;
		}
	}


	public function getAllData($namaTabel, $urut, $asc) {
		$this->db->select('*');
		$this->db->from($namaTabel);
		$this->db->order_by($urut, $asc);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();
		}
		else{
			return false;
		}
	}

	public function reportEA(){		
		$query = $this->db->query("SELECT MONTH(created) AS bulan, COUNT(*) AS nilai
		FROM ea
		GROUP BY MONTH(created);"); 
		 if($query->num_rows() > 0){
		   foreach($query->result() as $data){
			   $hasil[] = $data;
		   }

		}



		   return $hasil;
   
   }
   
	public function reportOA(){
		$query = $this->db->query("SELECT MONTH(created) AS bulan, COUNT(*) AS nilai
		FROM oa
		GROUP BY MONTH(created);"); 
	   if($query->num_rows() > 0){
		   foreach($query->result() as $data){
			   $hasil[] = $data;
		   }
		   return $hasil;
   }
   }
   public function reportODP(){
	$query = $this->db->query("SELECT MONTH(created) AS bulan, COUNT(*) AS nilai
	FROM odp
	GROUP BY MONTH(created);"); 
   if($query->num_rows() > 0){
	   foreach($query->result() as $data){
		   $hasil[] = $data;
	   }
	   return $hasil;
}
   }
public function reportODC(){
	$query = $this->db->query("SELECT MONTH(created) AS bulan, COUNT(*) AS nilai
	FROM odc
	GROUP BY MONTH(created);"); 
   if($query->num_rows() > 0){
	   foreach($query->result() as $data){
		   $hasil[] = $data;
	   }
	   return $hasil;
}}
public function reportPelanggan(){
	$query = $this->db->query("SELECT MONTH(created) AS bulan, COUNT(*) AS nilai
	FROM pelanggan
	GROUP BY MONTH(created);"); 
   if($query->num_rows() > 0){
	   foreach($query->result() as $data){
		   $hasil[] = $data;
	   }
	   return $hasil;
}}



	public function getAllDataJOIN($cable) {

		if($cable == 'ea'){
			$query =$this->db->query('Select ea.xConnectCable from ea left join oa on ea.xConnectCable = oa.xConnectCable where oa.xConnectCable is null ');
			if ($query->num_rows() > 0) {
				return $query->result_array();
			}
			else{
				return false;
			}	
		}

		if($cable == 'oa'){
			$query =$this->db->query('Select oa.xConnectODCspin, count(odc.xConnectODCspin) from oa left join odc on oa.xConnectODCspin = odc.xConnectODCspin  GROUP BY (oa.xConnectODCspin) HAVING count(odc.xConnectODCspin) < 4 ');
			if ($query->num_rows() > 0) {
				return $query->result_array();
			}
			else{
				return false;
			}
			}

		if($cable == 'odc'){
			$query =$this->db->query('Select odc.odpSPIN, count(odp.odpSPIN) from odc left join odp on odc.odpSPIN = odp.odpSPIN  GROUP BY (odc.odpSPIN) HAVING count(odp.odpSPIN) < 8 ');
			if ($query->num_rows() > 0) {
				return $query->result_array();
			}
			else{
				return false;
			}
			
		}

		if($cable == 'pelanggan'){
			$query =$this->db->query('Select pelanggan.pelangganID from pelanggan left join odp on pelanggan.pelangganID = odp.pelangganID where odp.pelangganID IS NULL ');
			if ($query->num_rows() > 0) {
				return $query->result_array();
			}
			else{
				return false;
			}
			
		}
	}

	public function search($search) {
		$this->db->select('pelanggan.nama, pelanggan.lokasi, odp.operationDate , odp.odpIDPORT, odp.kondisi, odp. odpName, odp.noModem, odp.noInternet, odp.noTelepon, odp.noTelevisi, odc.xConnectODCspin, odc.xConnectODCspout, odc.odcPORTOUT, odc.distributionCable, odc.fileABDODC, odc.odpAddress, odc.odpKordX, odc.odpKordY, oa.xConnectCable, oa.ospTerm, oa.feederCable , odc.fileABDODC , oa.primaryFiberCable, oa.primaryFiberCable, oa.fileABDOSP, oa.odcPORTIN, oa.lossCore, ea.eqpIP, ea.eqpPORT, ea.eqpTERM');
		$this->db->join('odp','pelanggan.pelangganID = odp.pelangganID');
		$this->db->join('odc', 'odp.odpSPIN = odc.odpSPIN');
		$this->db->join('oa', 'odc.xConnectODCspin = oa.xConnectODCspin');
		$this->db->join('ea', 'oa.xConnectCable = ea.xConnectCable');
		$this->db->where('pelanggan.pelangganID', $search);
		$this->db->from('pelanggan');
		$query = $this->db->get();
		
		if ($query->num_rows() == 1) {
			
			return $query->result();
		}
		else{
			return false;
		}
	}


	public function getData($namaTabel) {
		$this->db->select('*');
		$this->db->from($namaTabel);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result();
		}
		else{
			return false;
		}
	}

	function getUser(){
        $res=$this->db->get('users'); 
		return $res->result_array(); 
	}

	public function getSelData($namaTabel, $where, $datawhere) {
		$this->db->select('*');
		$this->db->from($namaTabel);
		$this->db->where($where, $datawhere);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			return $query->result();
		}
		else{
			return false;
		}
	}

	public function getSeltwoData($namaTabel, $where1, $where2, $datawhere1, $datawhere2) {
		$this->db->select('*');
		$this->db->from($namaTabel);
		$this->db->where($where1, $datawhere1);
		$this->db->where($where2, $datawhere2);
		$query = $this->db->get();
		var_dump($query); exit;
		
		if ($query->num_rows() == 1) {
			return $query->result();
		}
		else{
			return false;
		}
	}
	public function getOrder() {
		$this->db->select('*');
		$this->db->from('order');
		$this->db->order_by('tanggalkirim');
		$query = $this->db->get();
		if($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}

	function get_order_id($id){
		$this->db->select('*');
		$this->db->join('buktibayar', 'buktibayar.kode = order.kode_order', 'left');
		$this->db->where('kode_order', $id);
		$this->db->from('order');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result();
		}
		else{
			return false;
		}
	}

	public function getDetilOrder($id) {
		$this->db->select('*');
		$this->db->join('menu','menu.kode=detil_order.kodebarang');
		$this->db->join('order', 'order.kode_order=detil_order.orderid');
		$this->db->where('orderid', $id);
		$this->db->from('detil_order');
		$query = $this->db->get();
		if ($query && $query->num_rows() > 0) {
			return $query->result();
		}
		else{
			return false;
		}
	}

	 public function insertData($namaTabel, $data) {
		try{
			$hasil = $this->db->insert($namaTabel, $data); 
			if (!$hasil) {
				throw new Exception('error in query');
				return false;
			}
			return $hasil;
		} catch(Exception $e) {
			return false;
		}
	}

	public function deleteData($namaTabel, $where, $data) {
		$this->db->where($where, $data);
		$this->db->delete($namaTabel);
	}

	public function deletetwoData($namaTabel, $where1, $where2, $data1, $data2) {
		$this->db->where($where1, $data1);
		$this->db->where($where2, $data2);
		$this->db->delete($namaTabel);
	}





	public function updateData($where, $wheredata, $namaTabel, $data) {
		$this->db->where($where, $wheredata);
		return $this->db->update($namaTabel, $data);
        
	}

	public function updatetwoData($where1, $where2, $wheredata1, $wheredata2, $namaTabel, $data) {
		$this->db->where($where1, $wheredata1);
		$this->db->where($where2, $wheredata2);
		$this->db->update($namaTabel, $data);
        
	}

	public function getTopMenu() {
		$this->db->select('kodebarang, nama, sum(kuantitas)');
		$this->db->join('menu', 'detil_order.kodebarang=menu.kode');
		$this->db->from('detil_order');
		$this->db->group_by('kodebarang');
		$this->db->order_by('sum(kuantitas)', 'DESC');
		$this->db->limit(5);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result_array();
		}
		else{
			return false;
		}
	}

	public function getTotalOrderMenu() {
		$this->db->select_sum('kuantitas');
		$this->db->from('detil_order');
		$query = $this->db->get();
		return $query->row()->kuantitas;
	}

	public function now() {
		$dtz = new DateTimeZone("Asia/Jakarta");
		$dateTime = date_create('now', $dtz)->format('Y-m-d H:i:s');
		return$dateTime;
	}
}
?>