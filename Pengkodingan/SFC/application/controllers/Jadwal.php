<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('m_jadwal');
    } 



	public function index()
	{
		$data['jadwal_latihan'] = $this->m_jadwal->result_getall();
		$data['_view'] = 'jadwal';
		$this->load->view('jadwal',$data);
	}

	function getall(){      
    $this->load->model('m_jadwal');
    $data['query'] =$this->m_jadwal->result_getall();
    print_r($data['query']);
    die();
    $this->load->view('jadwal', $data);
    }
}
