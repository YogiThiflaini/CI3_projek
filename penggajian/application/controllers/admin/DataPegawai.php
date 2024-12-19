<?php 

class dataPegawai extends CI_Controller{

	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('hak_akses') !='1') {
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
					  Anda belum login!
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
				redirect('welcome');
		}
	}
	public function index()
	{
		$data['title'] = "Data Pegawai";
		$data['pegawai'] = $this->penggajianModel->get_data('data_pegawai')->result();
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/dataPegawai',$data);
		$this->load->view('templates_admin/footer');
	}

	public function tambahData()
	{
		$data['title'] = "Tambah Data Pegawai";
		$data['jabatan'] = $this->penggajianModel->get_data('data_jabatan')->result();
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/formTambahPegawai',$data);
		$this->load->view('templates_admin/footer');
	}

	public function tambahDataAksi()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE) {
			$this->tambahData();
		}else{
			$nik   = $this->input->post('nik');
			$nama_pegawai   = $this->input->post('nama_pegawai');
			$jenis_kelamin   = $this->input->post('jenis_kelamin');
			$jabatan   = $this->input->post('jabatan');
			$tanggal_masuk   = $this->input->post('tanggal_masuk');
			$status   = $this->input->post('status');
			$hak_akses   = $this->input->post('hak_akses');
			$username   = $this->input->post('username');
			$password   = md5($this->input->post('password'));
			$photo   = $_FILES['photo']['name'];
			if ($photo == '') {
	    		echo "Tidak ada file yang diupload";
			} else {
	    		$config['upload_path']   = './assets/photo';
	    		$config['allowed_types'] = 'jpg|jpeg|png|gif|tiff';
	    
	   		 $this->load->library('upload', $config);

	    		if (!$this->upload->do_upload('photo')) {
	        	echo "Upload Gagal: " . $this->upload->display_errors();
	    		} else {
	       		 $photo = $this->upload->data('file_name');
	        		echo "Upload Berhasil, file: " . $photo;
	        	}
	    	}


			$data = array(

				'nik' => $nik,
				'nama_pegawai' => $nama_pegawai,
				'jenis_kelamin' => $jenis_kelamin,
				'jabatan' => $jabatan,
				'tanggal_masuk' => $tanggal_masuk,
				'status' => $status,
				'hak_akses' => $hak_akses,
				'username' => $username,
				'password' => $password,
				'photo'=>$photo,
			);

			$this->penggajianModel->insert_data($data,'data_pegawai');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
					  Data Berhasil Ditambahkan!
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
			redirect('admin/dataPegawai');
		}
	}

	public function updateData($id)
	{
		$where = array('id_pegawai' => $id);
		$data['pegawai'] = $this->db->query("SELECT * FROM data_pegawai WHERE id_pegawai = '$id'")->result();
		$data['jabatan'] = $this->penggajianModel->get_data('data_jabatan')->result();
		$data['title'] = "Update Data Pegawai";
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/formUpdatePegawai',$data);
		$this->load->view('templates_admin/footer');
	}

	public function updateDataAksi()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE) {
			$this->updateData();
		}else{
			$id   = $this->input->post('id_pegawai');
			$nik   = $this->input->post('nik');
			$nama_pegawai   = $this->input->post('nama_pegawai');
			$jenis_kelamin   = $this->input->post('jenis_kelamin');
			$jabatan   = $this->input->post('jabatan');
			$tanggal_masuk   = $this->input->post('tanggal_masuk');
			$status   = $this->input->post('status');
			$hak_akses   = $this->input->post('hak_akses');
			$username   = $this->input->post('username');
			$password   = md5($this->input->post('password'));
			$photo   = $_FILES['photo']['name'];
			if ($photo){
	    		$config['upload_path']   = './assets/photo';
	    		$config['allowed_types'] = 'jpg|jpeg|png|gif|tiff';

	   		 $this->load->library('upload', $config);

	    		if ($this->upload->do_upload('photo')) {
	        		$photo = $this->upload->data('file_name');
	        		$this->db->set('photo',$photo);
	    		} else {
	        		echo "Upload eror";
	        	}
	    	}

			$data = array(

				'nik' => $nik,
				'nama_pegawai' => $nama_pegawai,
				'jenis_kelamin' => $jenis_kelamin,
				'jabatan' => $jabatan,
				'tanggal_masuk' => $tanggal_masuk,
				'status' => $status,
				'hak_akses' => $hak_akses,
				'username' => $username,
				'password' => $password,
			);

			$where = array(
				'id_pegawai' => $id
			);

			$this->penggajianModel->update_data('data_pegawai',$data,$where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
					  Data Berhasil Diupdate!
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
			redirect('admin/dataPegawai');
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('nik','nik','required',['required' =>'nik wajib diisi!']);
		$this->form_validation->set_rules('nama_pegawai','nama_pegawai','required',['required' => 'nama pegawai wajib diisi!']);
		$this->form_validation->set_rules('jenis_kelamin','jenis_kelamin','required',['required' => 'jenis kelamin wajib diisi!']);
		$this->form_validation->set_rules('jabatan','jabatan','required',['required' => 'jabatan wajib diisi!']);
		$this->form_validation->set_rules('tanggal_masuk','tanggal_masuk','required',['required' => 'tanggal masuk wajib diisi!']);
		$this->form_validation->set_rules('status','status','required',['required' => 'status wajib diisi!']);
		$this->form_validation->set_rules('hak_akses','hak_akses','required',['required' => 'hak akses wajib diisi!']);
		$this->form_validation->set_rules('username','username','required',['required' => 'username wajib diisi!']);
		$this->form_validation->set_rules('password','password','required',['required' => 'password wajib diisi!']);
	}

	public function deleteData($id)
	{
		$where = array('id_pegawai' => $id);
		$this->penggajianModel->hapus_data($where,'data_pegawai');
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					  Data Pegawai Berhasil Dihapus!
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
		redirect('admin/dataPegawai');
	}
}

 ?>