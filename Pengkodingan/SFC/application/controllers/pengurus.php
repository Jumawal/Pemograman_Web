<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengurus extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('m_pengurus');
    } 



	public function index()
	{
		$data['pengurus'] = $this->m_pengurus->result_getall();
		$data['_view'] = 'daftar_pengurus';
		$this->load->view('daftar_pengurus',$data);
	}

	function getall(){      
    $this->load->model('m_pengurus');
    $data['query'] =$this->m_pengurus->result_getall();
    print_r($data['query']);
    die();
    $this->load->view('daftar_pengurus', $data);
    }
}
