<?php 

class Transaksi extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_transaksi');
	}

	public function index()
	{
		$isi['content'] = 'frontend/transaksi';
		$isi['judul']   = 'Form Transaksi';
		$isi['konsumen']   = $this->db->get('konsumen')->result();
		$isi['paket']   = $this->db->get('paket')->result();
		$this->load->view('frontend/header', $isi);
	}

	public function tambah()
	{
		$isi['content'] = 'backend/transaksi/t_transaksi';
		$isi['judul']   = 'Form Tambah Transaksi';
		$isi['konsumen']   = $this->db->get('konsumen')->result();
		$isi['paket']   = $this->db->get('paket')->result();
		$this->load->view('backend/dashboard', $isi);
	}

	public function getHargaPaketK()
	{
    	$kode_paket = $this->input->post('kode_paket');
    
	    if (!empty($kode_paket)) {
       		$data = $this->m_transaksi->getHargaPaket($kode_paket);
	        if ($data) {
       		    echo json_encode($data);
	        } else {
       		    echo json_encode(['harga_paket' => 0]); // Jika paket tidak ditemukan, kirim harga 0
	        }
   		} else {
       		echo json_encode(['harga_paket' => 0]); // Jika tidak ada kode paket dikirim, kirim harga 0
   		}
	}

	public function getHargaPaket()
	{
		$kode_paket = $this->input->post('kode_paket');
		$data = $this->m_transaksi->getHargaPaket($kode_paket);
		echo json_encode($data);
	}

	public function simpan()
	{
		$data = array(
			'kode_konsumen' => $this->input->post('kode_konsumen'),
			'kode_paket' => $this->input->post('kode_paket'),
			'tgl_masuk' => $this->input->post('tgl_masuk'),
			'tgl_ambil' => '',
			'berat' => $this->input->post('berat'),
			'grand_total' => $this->input->post('grand_total'),
			'bayar' => $this->input->post('bayar'),
			'status' => $this->input->post('status'),
		);

		$query = $this->db->insert('transaksi', $data);
		if ($query = true) {
			$this->session->set_flashdata('info', 'Data Transaksi Berhasil ditambahkan');
			redirect('transaksi/tambah','refresh');
		}
	}

	public function riwayat()
	{
		$isi['content'] = 'backend/transaksi/r_transaksi';
		$isi['judul']   = 'Riwayat Transaksi';
		$isi['data']   = $this->m_transaksi->getAllRiwayat();
		$this->load->view('backend/dashboard', $isi);
	}

	public function edit($kode_transaksi)
	{
		$isi['content'] = 'backend/transaksi/e_transaksi';
		$isi['judul']   = 'Form Edit transaksi';
		$isi['transaksi']   = $this->m_transaksi->edit($kode_transaksi);
		$isi['konsumen']   = $this->db->get('konsumen')->result();
		$isi['paket']   = $this->db->get('paket')->result();
		$this->load->view('backend/dashboard', $isi);
	}

	public function update()
	{

		$kode_transaksi = $this->input->post('kode_transaksi');
		$data = array(
			'kode_konsumen' => $this->input->post('kode_konsumen'),
			'kode_paket' => $this->input->post('kode_paket'),
			'tgl_masuk' => $this->input->post('tgl_masuk'),
			'tgl_ambil' => '',
			'berat' => $this->input->post('berat'),
			'grand_total' => $this->input->post('grand_total'),
			'bayar' => $this->input->post('bayar'),
			'status' => $this->input->post('status'),
		);

		$query = $this->m_transaksi->update($kode_transaksi, $data);
		if ($query = true) {
			$this->session->set_flashdata('info', 'Data Transaksi Berhasil diupdate!');
			redirect('transaksi/riwayat','refresh');
		}
	}

	public function update_status()
	{
		$kode_transaksi = $this->input->post('kt');
		$status = $this->input->post('stt');
		$tgl_ambil = date('Y-m-d h:i:s');
		$status_bayar = 'Lunas';

		if ($status == "Baru" OR $status == "Proses") {
			$this->m_transaksi->update_status($kode_transaksi,$status);
		} else{
			$this->m_transaksi->update_status1($kode_transaksi,$status, $tgl_ambil,$status_bayar);
		}
	}

	public function detail($kode_transaksi)
	{
		// $this->load->library('dompdf_gen');
		$isi['transaksi'] = $this->m_transaksi->detail($kode_transaksi);
		$this->load->view('backend/transaksi/detail',$isi);

		// $paper_size = 'A5';
		// $orientation ='landscape';
		// $html = $this->output->get_output();
		// $this->dompdf->set_paper($paper_size, $orientation);
		// $this->dompdf->load_html($html);
		// $this->dompdf->render();
		// $this->dompdf->stream("Detail Transaksi", array('Attachment'=>0));
	}
}

 ?>