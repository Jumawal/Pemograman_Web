<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_iuran extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->model('Iuran_model');
    } 



	public function index()
	{
		$data['iuran'] = $this->Iuran_model->result_getall();
		$data['_view'] = 'daftar_iuran';
		$this->load->view('daftar_iuran',$data);
	}

	function getall(){      
    $this->load->model('iuran_model');
    $data['query'] =$this->iuran_model->result_getall();
    print_r($data['query']);
    die();
    $this->load->view('daftar_iuran', $data);
    }
}
