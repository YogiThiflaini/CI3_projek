<div class="container-fluid">
	
	<div class="alert alert-success" role="alert">
      <i class="fas fa-eye"></i> DETAIL DOSEN
    </div>

    <table class="table table-bordered table-striped table-hover">
		
		<?php foreach($detail as $dt) : ?>

		<img class="mb-5" src="<?php echo base_url('assets/uploads/').$dt->photo ?>" style="width: 25%;">

		<tr>
			<td>NIDN</td>
			<td><?php echo $dt->nidn; ?></td>
		</tr>

		<tr>
			<td>Nama Dosen</td>
			<td><?php echo $dt->nama_dosen; ?></td>
		</tr>

		<tr>
			<td>Alamat</td>
			<td><?php echo $dt->alamat; ?></td>
		</tr>

		<tr>
			<td>Jenis Kelamin</td>
			<td><?php echo $dt->jenis_kelamin; ?></td>
		</tr>

		<tr>
			<td>Email</td>
			<td><?php echo $dt->email; ?></td>
		</tr>

		<tr>
			<td>Telepon</td>
			<td><?php echo $dt->telp; ?></td>
		</tr>
		<?php endforeach; ?>
	</table>

	<?php echo anchor('administrator/dosen','<div class="btn btn-sm btn-warning">Kembali</div>') ?><br><br><br><br>
</div>