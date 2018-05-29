<?php

class M_turnament extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    
    function get_anggotum($kode_posting)
    {
        return $this->db->get_where('posting',array('kode_posting'=>$kode_posting))->row_array();
    }
        
    
    function get_all_anggota()
    {
       // $this->db->order_by('kode_posting', 'desc');
        //return $this->db->get('posting')->result_array();
        
        $this->load->database();
        $this->db->select('*');
        $this->db->from('posting');
        $this->db->where('kode_posting=3 ');

        return $this->db->get()->result();
    }
        
   
}
