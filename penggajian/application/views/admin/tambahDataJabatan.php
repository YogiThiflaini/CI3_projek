
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>

    <div class="card" style="width:60%; margin-bottom:100px ;">
        <div class="card-body">
            
            <form method="post" action="<?php echo base_url('admin/dataJabatan/tambahDataAksi') ?>">
                
                <div class="form-group">
                    <label>Nama Jabatan</label>
                    <input type="text" name="nama_jabatan" class="form-control" placeholder="Masukkan Nama Jabatan">
                    <?php echo form_error('nama_jabatan','<div class="text-danger small ml-2">','</div>');?>
                </div> 

                
                <div class="form-group">
                    <label>Gaji Pokok</label>
                    <input type="text" name="gaji_pokok" class="form-control" placeholder="Masukkan Gaji Pokok">
                    <?php echo form_error('gaji_pokok','<div class="text-danger small ml-2">','</div>');?>
                </div> 

                
                <div class="form-group">
                    <label>Tunjangan Transport</label>
                    <input type="text" name="tj_transport" class="form-control" placeholder="Masukkan Tunjangan Transport">
                    <?php echo form_error('tj_transport','<div class="text-danger small ml-2">','</div>');?>
                </div> 

                
                <div class="form-group">
                    <label>Uang Makan</label>
                    <input type="text" name="uang_makan" class="form-control" placeholder="Masukkan Uang Makan">
                    <?php echo form_error('uang_makan','<div class="text-danger small ml-2">','</div>');?>
                </div> 

                <button type="submit" class="btn btn-success">Submit</button>

            </form>
        </div>
    </div>

</div>

