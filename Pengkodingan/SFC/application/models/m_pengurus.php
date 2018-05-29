<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class M_pengurus extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get iuran by kode_iuran
     */
    function get_iuran($kode_pengurus)
    {
        return $this->db->get_where('pengurus',array('kode_pengurus'=>$kode_pengurus))->row_array();
    }
        
    /*
     * Get all iuran
     */
    function get_all_iuran()
    {
        $this->db->order_by('kode_pengurus', 'desc');
        return $this->db->get('pengurus')->result_array();
    }
        
     function result_getall(){

    $this->db->select('*');
    $this->db->from('pengurus');
    $this->db->join('anggotaku', 'anggotaku.id_anggota = pengurus.id_anggota'); 
    $query = $this->db->get();
    return $query->result();

    }
}