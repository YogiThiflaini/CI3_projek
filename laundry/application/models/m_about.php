<?php 

class M_about extends CI_Model{

	public function getAllData()
	{
		return $this->db->get('about')->result();
	}

	public function edit($id)
	{
		$this->db->select('*');
		$this->db->from('about');
		$this->db->where('id_about',$id);
		return $this->db->get()->row_array();
	}

	public function update($id_about,$data)
	{
		$this->db->where('id_about',$id_about);
		$this->db->update('about',$data);
	}

	public function delete($id)
	{
		$this->db->where('id_about',$id);
		$this->db->delete('about');
	}
}

 ?>