<?php 

class Panel extends CI_Controller{

	public function index()
	{
		$this->load->view('backend/login');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('panel');
	}
}

 ?>