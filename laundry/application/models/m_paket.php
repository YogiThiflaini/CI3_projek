<?php 

class M_paket extends CI_Model{

	public function getAllDataPaket()
	{
		return $this->db->get('paket')->result();
	}

	public function edit($id)
	{
		$this->db->select('*');
		$this->db->from('paket');
		$this->db->where('kode_paket',$id);
		return $this->db->get()->row_array();
	}

	public function update($kode_paket,$data)
	{
		$this->db->where('kode_paket',$kode_paket);
		$this->db->update('paket',$data);
	}

	public function delete($id)
	{
		$this->db->where('kode_paket',$id);
		$this->db->delete('paket');
	}
}

 ?>