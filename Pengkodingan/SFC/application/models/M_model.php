<?php

class M_model extends CI_Model
{
    function __construct()
    {
        $this->load->database();
    }
    
    function get_anggota($id_anggotaku)
    {
        return $this->db->get_where('anggotaku',array('id_anggotaku'=>$id_anggotaku))->row_array();
    }
 
    function add_anggota($params)
    {
        $this->db->insert('anggotaku',$params);
        return $this->db->insert_id();
    }
    function check_data($username){
        $this->db->where('username',$username);
        $this->db->from('anggotaku');

        $query = $this->db->get();
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return $query->result();
            return false;
        }
    }
    function get($data,$table){
        $insert = $this->db->insert($table,$data);
        
        return $insert;
    }
   
}
