<div class="container-fluid">
	<div class="alert alert-success" role="alert">
      <i class="fas fa-edit"></i> Form Update Tahun Akademik
    </div>

    <?php foreach($tahun_akademik as $ak) : ?>

    	<form method="post" action="<?php echo base_url('administrator/tahun_akademik/update_aksi') ?>">
    		
    		<div class="form-group">
    			<label>Tahun Akademik</label>
    			<input type="hidden" name="id_thn_akad" class="form-control" value="<?php echo $ak->id_thn_akad ?>">
    			<input type="text" name="tahun_akademik" class="form-control" value="<?php echo $ak->tahun_akademik ?>">
    		</div>
    		<div class="form-group">
                <label for="semester">Semester</label>
                <select name="semester" class="form-control">
                    <option value="<?php echo $ak->semester ?>"><?php echo $ak->semester ?></option>
                    <option value="Ganjil">Ganjil</option>
                    <option value="Genap">Genap</option>
                </select>
                <?php echo form_error('semester','<div class="text-danger small ml-3">','</div>');?>
            </div>
            <div class="form-group">
                <label>Status</label>
                <select name="status" class="form-control">
                    <option value="<?php echo $ak->status ?>"><?php echo $ak->status ?></option>
                    <option value="Aktif">Aktif</option>
                    <option value="Tidak Aktif">Tidak Aktif</option>
                </select>
                <?php echo form_error('status','<div class="text-danger small ml-3">','</div>');?>
            </div>
            </select>
            </div>

    		<button type="submit" class="btn btn-primary ml-4">Simpan</button>
    	</form>

    <?php endforeach; ?>
</div>