<?php 
 
class M_Penilaian extends CI_Model{

	function masukan_data($data,$table){
		$this->db->insert($table,$data);
	}
}