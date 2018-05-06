<?php    
class Kabel extends CI_Model{
    
    public function getCabang(){
        $this->load->database();
        $query =$this->db->query('select*from cabang');
        return $query->result();   
    }
    public function getOA(){
        $this->load->database();
        $query =$this->db->query('select*from oa');
        return $query->result();   
    }
     public function getEA(){
        $this->load->database();
        $query =$this->db->query('select*from ea');
        return $query->result();   
    }
     public function getET(){
        $this->load->database();
        $query =$this->db->query('select*from et');
        return $query->result();   
    }
	public function getODC(){
        $this->load->database();
        $query =$this->db->query('select*from odc');
        return $query->result();   
    }
    public function getODCIN(){
        $this->load->database();
        $query =$this->db->query('select*from odcin');
        return $query->result();   
    }
	public function getODP(){
        $this->load->database();
        $query =$this->db->query('select*from odp');
        return $query->result();   
    }
    public function getODPIN(){
        $this->load->database();
        $query =$this->db->query('select*from odpin');
        return $query->result();   
    }
	
}