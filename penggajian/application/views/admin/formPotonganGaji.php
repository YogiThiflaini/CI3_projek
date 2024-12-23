
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>


    <div class="card" style="width:65%;">
        <div class="card-body">
            
            <form method="post" action="<?php echo base_url('admin/potonganGaji/tambahDataAksi') ?>">

                <div class="form-group">
                    <label>Jenis Potongan</label>
                    <input type="text" name="potongan" class="form-control" placeholder="Masukkan Jenis Potongan">
                    <?php echo form_error('potongan','<div class="text-danger small ml-2">','</div>');?>
                </div> 

                <div class="form-group">
                    <label>Jumlah Potongan</label>
                    <input type="number" name="jml_potongan" class="form-control" placeholder="Masukkan jumlah potongan">
                    <?php echo form_error('jml_potongan','<div class="text-danger small ml-2">','</div>');?>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>

</div>

