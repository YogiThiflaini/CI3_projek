<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-edit"></i> Form Input Mata Kuliah
    </div>

        <form method="post" action="<?php echo base_url('administrator/matakuliah/tambah_matakuliah_aksi'); ?>">

            <div class="form-group">
                <label>Kode Mata Kuliah</label>
                <input type="text" name="kode_matakuliah" class="form-control" placeholder="Masukkan Kode Mata Kuliah">
                <?php echo form_error('kode_matakuliah','<div class="text-danger small ml-3">','</div>');?>
            </div> 

            <div class="form-group">
                <label for="nama_matakuliah">Nama Mata Kuliah</label>
                <input type="text" name="nama_matakuliah" class="form-control"  placeholder="Masukkan Nama Mata Kuliah" >
                 <?php echo form_error('kode_matakuliah','<div class="text-danger small ml-3">','</div>');?>
            </div>

            <!-- Input untuk SKS -->
            <div class="form-group">
                <label for="sks">SKS</label>
                <select name="sks" class="form-control">
                    <option value="">--Pilih SKS--</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </div>

            <!-- Input untuk semester -->
            <div class="form-group">
                <label for="semester">Semester</label>
                <select name="semester" class="form-control">
                    <option value="">--Pilih Semester--</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>
            </div>

            <div class="form-group">
                <label for="nama_prodi">Program Studi</label>
                <select name="nama_prodi" class="form-control">
                    <option value="">--Pilih Prodi--</option>
                    <?php foreach($prodi as $prd) : ?>
                        <option value="<?php echo $prd->nama_prodi; ?>"><?php echo $prd->nama_prodi; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <button type="submit" class="btn btn-sm btn-primary">Simpan</button>

        </form>
</div>
