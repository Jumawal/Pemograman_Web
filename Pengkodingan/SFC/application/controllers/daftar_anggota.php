<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_anggota extends CI_Controller {
	 function __construct()
    {
        parent::__construct();
        $this->load->model('m_anggota');
    } 


	public function index()
	{
		
		$data['anggotaku'] = $this->m_anggota->get_all_anggota();
        $this->load->view('daftar_anggota',$data);
	}
}
