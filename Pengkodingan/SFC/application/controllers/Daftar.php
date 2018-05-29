<?php
	if(!defined('BASEPATH')) exit('Keluar dari sistem');
		class Daftar extends CI_Controller{
 			function __construct(){
		parent::__construct();		
		$this->load->model('M_model');
		$this->load->helper('url');
 
	}

function tambah(){
		$this->load->view('Daftar');
	}

	function tambah_aksi(){
		if (isset($_POST['submit'])) {
			# code... 
		

		$nama = $this->input->post('nama');
		$nrp = $this->input->post('nrp');
		$angkatan = $this->input->post('angkatan');
		$jurusan = $this->input->post('jurusan');
 		$jeniskelamin = $this->input->post('jeniskelamin');
 		$tlpn = $this->input->post('tlpn');
 		$alamat = $this->input->post('alamat');
 		$username = $this->input->post('username');
 		$password = $this->input->post('password');
		$data = array(
			'nama' => $nama,
			'nrp' => $nrp,
			'angkatan' => $angkatan,
			'jurusan' => $jurusan,
			'jenis_kelamin' => $jeniskelamin,
			'tlpn' => $tlpn,
			'alamat' => $alamat,			
			'username'=>$username,
			'password'=>$password
			);
		if($this->M_model->check_data($data['username'])){
			echo "<script>alert('Username sudah digunakan');history.go(-1);</script>";
		}else{
		$this->M_model->get($data,'anggotaku');	
		echo "<script>alert('data berhasil di simpan');history.go(-1);</script>";
		}		
	}else{
		echo "<script>alert('data tidak valid');history.go(-1);</script>";
	} 
}

}


	?>