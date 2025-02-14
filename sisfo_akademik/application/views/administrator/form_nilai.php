<?php 

$nilai = get_instance();
$nilai->load->model('matakuliah_model');
$nilai->load->model('tahunakademik_model');

 ?>

 <div class="container-fluid">
 	
 	<?php 
 		if ($list_nilai == null) {
 			$thn = $nilai->tahunakademik_model->get_by_id($id_thn_akad);
 			$semester = $thn->semester == "Ganjil";

 			if ($semester == "Ganjil") {
                        $tampilSemester = "Ganjil";
                    }else{
                        $tampilSemester = "Genap";
                    }
 	 ?>

 	 <div class="alert alert-danger">
 	 	Maaf, kode matakuliah yang anda input <strong>TIDAK TERSEDIA!</strong> di tahun ajaran <?php echo $thn->tahun_akademik.'('.$tampilSemester.')'; ?>
 	 </div>

 	 <?php echo anchor('administrator/nilai/input_nilai','<div class="btn btn-sm btn-primary">Kembali</div>') ?>

 	 <?php 
 	 	}else{
 	  ?>

 	  <center>
 	  	<legend><strong>MASUKKAN NILAI AKHIR</strong></legend>

 	  	<table>
 	  		<tr>
 	  			<td>Kode Mata Kuliah</td>
 	  			<td>: <?php echo $kode_matakuliah; ?></td>	
 	  		</tr>

 	  		<tr>
 	  			<td>Nama Mata Kuliah</td>
 	  			<td>: <?php echo $nilai->matakuliah_model->get_by_id($kode_matakuliah)->nama_matakuliah; ?></td>	
 	  		</tr>

 	  		<tr>
 	  			<td>SKS</td>
 	  			<td>: <?php echo $nilai->matakuliah_model->get_by_id($kode_matakuliah)->sks; ?></td>
 	  		</tr>

 	  			<?php 
 	  				$thn = $nilai->tahunakademik_model->get_by_id($id_thn_akad);
 	  				$semester = $thn->semester == "Ganjil";

 	  				if ($semester == "Ganjil") {
                        $tampilSemester = "Ganjil";
                    }else{
                        $tampilSemester = "Genap";
                    }
 	  			 ?>
 	  		<tr>
 	  			<td>
 	  				Tahun Akademik (Semester)
 	  				<td>: <?php echo $thn->tahun_akademik.'('.$tampilSemester.')'; ?></td>
 	  			</td>
 	  		</tr>
 	  	</table>
 	  </center>

 	  <form method="post" action="<?php echo base_url('administrator/nilai/simpan_nilai') ?>">
 	  	
 	  	<table class="table table-bordered table-striped table-hover mt-4">
 	  		<tr>
 	  			<td>NO</td>
 	  			<td>NIM</td>
 	  			<td>NAMA MAHASISWA</td>
 	  			<td>NILAI</td>
 	  		</tr>

 	  		<?php 
 	  			$no=1;
 	  			foreach($list_nilai as $row) :
 	  		 ?>

 	  		 <tr>
 	  		 	<td width="25px"><?php echo $no++ ?></td>
 	  		 	<td><?php echo $row->nim ?></td>
 	  		 	<td><?php echo $row->nama_lengkap ?></td>
 	  		 	<input type="hidden" name="id_krs[]" value="<?php echo $row->id_krs ?>">
 	  		 	<td width="25px"><input type="text" name="nilai[]" class="form-control" value="<?php echo $row->nilai; ?>"></td>
 	  		 </tr>

 	  		<?php endforeach; ?>
 	  	</table>

 	  	   <button type="submit" class="btn btn-primary">Simpan</button>

 	  </form>

	<?php } ?>
 </div>