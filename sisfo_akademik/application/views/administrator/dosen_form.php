<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-edit"></i> Form Input Dosen
    </div>

    <?php echo form_open_multipart('administrator/dosen/tambah_dosen_aksi') ?>

        <div class="form-group">
            <label>NIDN Dosen</label>
            <input type="text" name="nidn" class="form-control" placeholder="Masukkan NIDN Dosen">
            <?php echo form_error('nidn','<div class="text-danger small ml-3">','</div>');?>
        </div> 

        <div class="form-group">
            <label>Nama Dosen</label>
            <input type="text" name="nama_dosen" class="form-control" placeholder="Masukkan Nama Lengkap Dosen">
            <?php echo form_error('nama_dosen','<div class="text-danger small ml-3">','</div>');?>
        </div> 

        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat Dosen">
            <?php echo form_error('alamat','<div class="text-danger small ml-3">','</div>');?>
        </div> 

         <div class="form-group">
            <label>Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control">
                <option value="">--Pilih Jenis Kelamin--</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            <?php echo form_error('jenis_kelamin','<div class="text-danger small ml-3">','</div>');?>
        </div>  

        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control" placeholder="Masukkan Email Dosen">
            <?php echo form_error('email','<div class="text-danger small ml-3">','</div>');?>
        </div> 

        <div class="form-group">
            <label>Telepon</label>
            <input type="text" name="telp" class="form-control" placeholder="Masukkan Telepon Dosen">
            <?php echo form_error('telp','<div class="text-danger small ml-3">','</div>');?>
        </div> 

        <div class="form-group">
            <label>Foto</label>
            <input type="file" name="photo" class="form-control" placeholder="Masukkan Foto">
        </div> 

        <button type="submit" class="btn btn-primary mb-5 mt-3">Simpan</button>

    <?php form_close(); ?>
        
</div>
