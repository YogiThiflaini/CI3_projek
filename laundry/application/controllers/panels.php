<?php 

class Panels extends CI_Controller{

	public function index()
	{
		$this->load->view('frontend/login');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('home');
	}
}

 ?>