<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Postingan extends CI_Controller {

	public function index()
	{
		$this->load->view('postingan_view');
	}
}
