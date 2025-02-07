<?php 

 
class M_login extends CI_Model{
	
	public function proses_loginA($username, $password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', md5($password));
		$query = $this->db->get('user');
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$sess = array(
					'id_user' => $row->id_user,
					'username' => $row->username,
					'password' => $row->password
				);
				$this->session->set_userdata($sess);
			}
			redirect('dashboard');
		}else{
			$this->session->set_flashdata('info','<div class="alert alert-danger" role="alert"> Login Gagal, Silahkan periksa kembali username dan password anda! </div>');
			redirect('panel');
		}
	}
	
	public function proses_loginK($username, $password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', md5($password));
		$query = $this->db->get('konsumen');
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$sess = array(
					'kode_konsumen' => $row->kode_konsumen,
					'username' => $row->username,
					'password' => $row->password
				);
				$this->session->set_userdata($sess);
			}
			redirect('home');
		}else{
			$this->session->set_flashdata('info','<div class="alert alert-danger" role="alert"> Login Gagal, Silahkan periksa kembali username dan password anda! </div>');
			redirect('panels');
		}
	}
}

 ?>