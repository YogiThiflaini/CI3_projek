<?php 

class Dashboard extends CI_Controller{

	public function index()
	{
		$isi['content'] = 'backend/home';
		$isi['judul']   = 'Dashboard';
		$this->load->view('backend/dashboard', $isi);
	}
}

 ?>