<?php 

class M_transaksi extends CI_Model{

	public function getHargaPaket($kode_paket)
	{
		$this->db->where('kode_paket',$kode_paket);
		return $this->db->get('paket')->row_array();
	}

	public function getAllRiwayat()
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('konsumen','transaksi.kode_konsumen = konsumen.kode_konsumen');
		$this->db->join('paket','transaksi.kode_paket = paket.kode_paket');
		return $this->db->get()->result();
	}

	public function edit($kode_transaksi)
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->where('kode_transaksi',$kode_transaksi);
		$this->db->join('konsumen','transaksi.kode_konsumen = konsumen.kode_konsumen');
		$this->db->join('paket','transaksi.kode_paket = paket.kode_paket');
		return $this->db->get()->row_array();
	}

	public function update($kode_transaksi,$data)
	{
		$this->db->where('kode_transaksi',$kode_transaksi);
		$this->db->update('transaksi',$data);
	}

	public function update_status($kode_transaksi,$status)	
	{
		$this->db->set('status',$status);
		$this->db->where('kode_transaksi',$kode_transaksi);
		$this->db->update('transaksi');
	}

	public function update_status1($kode_transaksi,$status, $tgl_ambil,$status_bayar)
	{
		$this->db->set('status',$status);
		$this->db->set('tgl_ambil',$tgl_ambil);
		$this->db->set('bayar',$status_bayar);
		$this->db->where('kode_transaksi',$kode_transaksi);
		$this->db->update('transaksi');
	}

	public function detail($kode_transaksi)
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('konsumen','transaksi.kode_konsumen = konsumen.kode_konsumen','left');
		$this->db->join('paket','transaksi.kode_paket = paket.kode_paket','left');
		$this->db->where('kode_transaksi',$kode_transaksi);
		return $this->db->get()->row_array();

	}
}

?>