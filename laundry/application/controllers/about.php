<?php 

class About extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_about');
	}

	public function index()
	{
		$isi['content'] = 'backend/about/v_about';
		$isi['judul'] = 'Data About';
		$isi['data'] = $this->m_about->getAllData();
		$this->load->view('backend/dashboard',$isi);
	}

	public function tambah()
	{
		$isi['content'] = 'backend/about/t_about';
		$isi['judul'] = 'Form Tambah About';
		$this->load->view('backend/dashboard',$isi);
	}

	public function simpan()
{
    $config['upload_path'] = './assets/images/about'; 
    $config['allowed_types'] = 'jpg|png|jpeg';
    $config['max_size'] = '2048';
    
    $this->load->library('upload', $config);

    if ($this->upload->do_upload('gambar_about')) {
        $file_data = $this->upload->data();

        $data = array(
            'judul_about'  => $this->input->post('judul_about'),
            'deskripsi_about'  => $this->input->post('deskripsi_about'),
            'gambar_about'  => $file_data['file_name']
        );

        $query = $this->db->insert('about', $data);

        if ($query) {
            $this->session->set_flashdata('info', 'Data About Berhasil ditambahkan');
            redirect('about');
        }
    } else {
        $error = $this->upload->display_errors();
        $this->session->set_flashdata('error', 'Upload gagal: ' . $error);
        redirect('about');
    }
}

	public function edit($id)
	{
		$isi['content'] = 'backend/about/e_about';
		$isi['judul']   = 'Form Edit About';
		$isi['about']   = $this->m_about->edit($id);
		$this->load->view('backend/dashboard', $isi);
	}	

	public function update()
	{
		$id_about  = $this->input->post('id_about');
		$config['upload_path'] = './assets/images/about'; 
    	$config['allowed_types'] = 'jpg|png|jpeg';
    	$config['max_size'] = '2048';
    
	    $this->load->library('upload', $config);

	    if (!empty($_FILES['gambar_about']['name'])) {
	    	$this->upload->do_upload('gambar_about');
	    	$upload = $this->upload->data();
	    	$gambar = $upload['file_name'];
	    	$data = array(
	    		'gambar_about' => $gambar,
	    		'judul_about' => $this->input->post('judul_about'),
	    		'deskripsi_about' => $this->input->post('deskripsi_about'),
	    	);
	    	$_id = $this->db->get_where('about',['id_about' => $id_about])->row();
	    	$query = $this->m_about->update($id_about, $data);
	    	if ($query = true) {
			$this->session->set_flashdata('info', 'Data about Berhasil diupdate!');
			unlink('./assets/images/about/'.$_id->gambar_about);
			redirect('about','refresh');
			}
	    }else{
	    	$data = array(
	    		'judul_about' => $this->input->post('judul_about'),
	    		'deskripsi_about' => $this->input->post('deskripsi_about'),
	    	);
	    	$query = $this->m_about->update($id_about, $data);
	    	if ($query = true) {
			$this->session->set_flashdata('info', 'Data about Berhasil diupdate!');
			redirect('about','refresh');
			}
	    }
	}

	public function delete($id)
	{
		$query = $this->m_about->delete($id);
		if ($query = true) {
			$this->session->set_flashdata('info', 'Data about Berhasil di hapus!');
			redirect('about');
		}
	}

}

 ?>