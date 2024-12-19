<div class="container-fluid">
	
	<div class="alert alert-success" role="alert">
      <i class="fas fa-university"></i> Form Update Tentang Kampus
    </div>

    <?php foreach($tentang as $ttg): ?>

	<form method="post" action="<?php echo base_url('administrator/tentang_kampus/update_aksi') ?>">
		<div class="form-group">
			<label>Sejarah</label>
			<input type="hidden" name="id" class="form-control" value="<?php echo $ttg->id ?>">
			<input type="text" name="sejarah" placeholder="Masukkan sejarah" class="form-control" value="<?php echo $ttg->sejarah ?>">
			<?php echo form_error('sejarah','<div class="text-danger small ml-3">','</div>');?>
		</div>

		<div class="form-group">
			<label>Visi</label>
			<input type="text" name="visi" placeholder="Masukkan visi" class="form-control" value="<?php echo $ttg->visi ?>">
			<?php echo form_error('visi','<div class="text-danger small ml-3">','</div>');?>
		</div>

		<div class="form-group">
			<label>Misi</label>
			<input type="text" name="misi" placeholder="Masukkan misi" class="form-control" value="<?php echo $ttg->misi ?>">
			<?php echo form_error('misi','<div class="text-danger small ml-3">','</div>');?>
		</div>
		
		<button type="submit" class="btn btn-primary">Simpan</button>
	</form>

	<?php endforeach; ?>
</div>