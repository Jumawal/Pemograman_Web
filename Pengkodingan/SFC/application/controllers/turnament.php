<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Turnament extends CI_Controller {
	 function __construct()
    {
        parent::__construct();
        $this->load->model('m_turnament');
    } 


	public function index()
	{
		
		$data['posting'] = $this->m_turnament->get_all_anggota();
        $this->load->view('Turnament',$data);
	}
}
