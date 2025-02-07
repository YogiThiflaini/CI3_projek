<?php 

class Paket extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_paket');
	}

	public function index()
	{
		$isi['content'] = 'backend/paket/v_paket';
		$isi['judul']   = 'Daftar Data Paket';
		$isi['data'] = $this->m_paket->getAllDataPaket();
		$this->load->view('backend/dashboard', $isi);
	}	

	public function tambah()
	{
		$isi['content'] = 'backend/paket/t_paket';
		$isi['judul']   = 'Form Tambah paket';
		$this->load->view('backend/dashboard', $isi);
	}	

	public function simpan()
	{
		$data = array(
			'nama_paket'  => $this->input->post('nama_paket'),
			'harga_paket'  => $this->input->post('harga_paket'),
		);
		$query = $this->db->insert('paket', $data);
		if ($query = true) {
			$this->session->set_flashdata('info', 'Data Paket Berhasil ditambahkan');
			redirect('paket');
		}
	} 

	public function edit($id)
	{
		$isi['content'] = 'backend/paket/e_paket';
		$isi['judul']   = 'Form Edit Paket';
		$isi['paket']   = $this->m_paket->edit($id);
		$this->load->view('backend/dashboard', $isi);
	}	

	public function update()
	{
		$kode_paket  = $this->input->post('kode_paket');
		$nama_paket  = $this->input->post('nama_paket');
		$harga_paket  = $this->input->post('harga_paket');
		$data = array(
			
			'nama_paket'  => $nama_paket,
			'harga_paket'  => $harga_paket,
		);
		$query = $this->m_paket->update($kode_paket, $data);
		if ($query = true) {
			$this->session->set_flashdata('info', 'Data paket Berhasil diupdate!');
			redirect('paket');
		}
	}

	public function delete($id)
	{
		$query = $this->m_paket->delete($id);
		if ($query = true) {
			$this->session->set_flashdata('info', 'Data Paket Berhasil di hapus!');
			redirect('paket');
		}
	}
}

 ?>