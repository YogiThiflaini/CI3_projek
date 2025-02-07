<?php 

class Konsumen extends CI_Controller{

		public function __construct()
	{
		parent::__construct();
		$this->load->model('m_konsumen');
	}

	public function index()
	{
		$isi['content'] = 'backend/konsumen/v_konsumen';
		$isi['judul']   = 'Data Konsumen';
		$isi['data'] = $this->m_konsumen->getAllDataKonsumen();
		$this->load->view('backend/dashboard', $isi);
	}	

	public function tambah()
	{
		$isi['content'] = 'backend/konsumen/t_konsumen';
		$isi['judul']   = 'Form Tambah Konsumen';
		// $isi['kode_konsumen']   = $this->m_konsumen->generate_kode_konsumen();
		$this->load->view('backend/dashboard', $isi);
	}	

	public function simpan()
	{
		$data = array(
			// 'kode_konsumen'  => $this->input->post('kode_konsumen'),
			'nama_konsumen'  => $this->input->post('nama_konsumen'),
			'username'  => $this->input->post('username'),
			'password'  => md5($this->input->post('password')),
			'alamat_konsumen'  => $this->input->post('alamat_konsumen'),
			'no_telp'  => $this->input->post('no_telp'),
		);
		$query = $this->db->insert('konsumen', $data);
		if ($query = true) {
			$this->session->set_flashdata('info', 'Data Konsumen Berhasil ditambahkan');
			redirect('konsumen');
		}
	} 

	public function simpanK()
	{
		$data = array(
			// 'kode_konsumen'  => $this->input->post('kode_konsumen'),
			'nama_konsumen'  => $this->input->post('nama_konsumen'),
			'username'  => $this->input->post('username'),
			'password'  => md5($this->input->post('password')),
			'alamat_konsumen'  => $this->input->post('alamat_konsumen'),
			'no_telp'  => $this->input->post('no_telp'),
		);
		$query = $this->db->insert('konsumen', $data);
		if ($query = true) {
			$this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible fade show" role="alert">
					  Data Anda Berhasil ditambahkan!
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
			redirect('panels');
		}
	} 

	public function edit($id)
	{
		$isi['content'] = 'backend/konsumen/e_konsumen';
		$isi['judul']   = 'Form Edit Konsumen';
		$isi['konsumen']   = $this->m_konsumen->edit($id);
		$this->load->view('backend/dashboard', $isi);
	}		

	public function editK($id)
	{
		$isi['content'] = 'frontend/edit';
		$isi['judul']   = 'Form Edit Konsumen';
		$isi['konsumen']   = $this->m_konsumen->edit($id);
		$this->load->view('frontend/header', $isi);
	}	

	public function update()
	{
		$kode_konsumen  = $this->input->post('kode_konsumen');
		$nama_konsumen  = $this->input->post('nama_konsumen');
		$username  = $this->input->post('username');
		$password  = md5($this->input->post('password'));
		$alamat_konsumen  = $this->input->post('alamat_konsumen');
		$no_telp  = $this->input->post('no_telp');
		$data = array(
			
			'nama_konsumen'  => $nama_konsumen,
			'username'  => $username,
			'password'  => $password,
			'alamat_konsumen'  => $alamat_konsumen,
			'no_telp'  => $no_telp,
		);
		$query = $this->m_konsumen->update($kode_konsumen, $data);
		if ($query = true) {
			$this->session->set_flashdata('info', 'Data Konsumen Berhasil diupdate!');
			redirect('konsumen');
		}
	}

	public function updateK()
	{
		$kode_konsumen  = $this->input->post('kode_konsumen');
		$nama_konsumen  = $this->input->post('nama_konsumen');
		$username  = $this->input->post('username');
		$password  = md5($this->input->post('password'));
		$alamat_konsumen  = $this->input->post('alamat_konsumen');
		$no_telp  = $this->input->post('no_telp');
		$data = array(
			
			'nama_konsumen'  => $nama_konsumen,
			'username'  => $username,
			'password'  => $password,
			'alamat_konsumen'  => $alamat_konsumen,
			'no_telp'  => $no_telp,
		);
		$query = $this->m_konsumen->update($kode_konsumen, $data);
		if ($query = true) {
			$this->session->set_flashdata('info', '<div class="alert alert-success alert-dismissible fade show" role="alert">
					  Data Anda Berhasil diupdate!
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
			redirect('home');
		}
	}

	public function delete($id)
	{
		$query = $this->m_konsumen->delete($id);
		if ($query = true) {
			$this->session->set_flashdata('info', 'Data Konsumen Berhasil di hapus!');
			redirect('konsumen');
		}
	}
}

 ?>