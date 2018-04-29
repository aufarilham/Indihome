<?php    
class Kabel extends CI_Model{
    public function getOA(){
        $this->load->database();
        $query =$this->db->query('select*from oa');
        return $query->result();   
    }
	public function getODC(){
        $this->load->database();
        $query =$this->db->query('select*from odc');
        return $query->result();   
    }
	public function getODP(){
        $this->load->database();
        $query =$this->db->query('select*from odp');
        return $query->result();   
    }
	
}