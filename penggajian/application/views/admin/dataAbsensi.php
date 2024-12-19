
<div class="container-fluid mb-4">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>

    <div class="card mb-3">
      <div class="card-header bg-primary text-white">
        Filter Data Absensi Pegawai
      </div>
      <div class="card-body">

        <form class="form-inline">
          <div class="form-group mb-2">
            <label for="staticEmail2">Bulan: </label>
            <select class="form-control ml-3" name="bulan">
                <option value="">--Pilih Bulan--</option>
                <option value="01">Januari</option>
                <option value="02">Februari</option>
                <option value="03">Maret</option>
                <option value="04">April</option>
                <option value="05">Mei</option>
                <option value="06">Juni</option>
                <option value="07">Juli</option>
                <option value="08">Agustus</option>
                <option value="09">September</option>
                <option value="10">Oktober</option>
                <option value="11">November</option>
                <option value="12">Desember</option>
            </select>
          </div>
          <div class="form-group mb-2 ml-5">
            <label for="staticEmail2">Tahun: </label>
            <select class="form-control ml-3" name="tahun">
                <option value="">--Pilih Tahun--</option>
                <?php $tahun = date('Y');
                for ($i=2024; $i < $tahun+5; $i++) {  ?>
                    <option value="<?php echo $i ?>"><?php echo $i ?></option>
                <?php } ?>
            </select>
          </div>

          <button type="submit" class="btn btn-primary mb-2 ml-auto"><i class="fas fa-eye"></i> Tampilkan Data</button>
          <a href="<?php echo base_url('admin/dataAbsensi/inputAbsensi') ?>" class="btn btn-success mb-2 ml-3"><i class="fas fa-plus"></i> Input Kehadiran</a>
        </form>
      </div>
    </div>

    <?php 
        if ((isset($_GET['bulan']) && $_GET['bulan']!='') && (isset($_GET['tahun']) && $_GET['tahun']!='')) {
            $bulan = $_GET['bulan'];
            $tahun = $_GET['tahun'];
            $bulantahun = $bulan.$tahun;
        }else{
            $bulan = date('m');
            $tahun = date('Y');
            $bulantahun = $bulan.$tahun;
        }
     ?>

    <div class="alert alert-info">
        Menampilkan Data Kehadiran Pegawai Bulan: <span class="font-weight-bold"><?php echo $bulan ?></span> Tahun: <span class="font-weight-bold"><?php echo $tahun ?></span> 
    </div>

    <?php  

    $jml_data = count($absensi);
    if ($jml_data > 0 ) { ?>

    <div class="table-responsive">
    <table  class="table table-bordered table-striped mt-2 mb-5">
        <tr>
            <th class="text-center">No</th>
            <th class="text-center">NIK</th>
            <th class="text-center">Nama Pegawai</th>
            <th class="text-center">Jenis Kelamin</th>
            <th class="text-center">Jabatan</th>
            <th class="text-center">Hadir</th>
            <th class="text-center">Sakit</th>
            <th class="text-center">Alpha</th>
            <th class="text-center">Action</th>
        </tr>

    <?php $no=1; foreach($absensi as $a): ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $a->nik ?></td>
            <td><?php echo $a->nama_pegawai ?></td>
            <td><?php echo $a->jenis_kelamin ?></td>
            <td><?php echo $a->nama_jabatan ?></td>
            <td><?php echo $a->hadir ?></td>
            <td><?php echo $a->sakit ?></td>
            <td><?php echo $a->alpha ?></td>
            <td>
                <center>
                    <a class="btn btn-sm btn-warning" href="<?php echo base_url('admin/dataAbsensi/updateData/'.$a->id_kehadiran) ?>"><i class="fas fa-edit"></i></a>
                    <a onclick="return confirm('Yakin Hapus?')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/dataAbsensi/deleteData/'.$a->id_kehadiran) ?>"><i class="fas fa-trash"></i></a>
                </center>
            </td>
        </tr>
    <?php endforeach; ?>

    </table>
    </div>

    <?php }else{ ?>
        <span class="badge badge-danger"><i class="fas fa-info-circle"></i> Data masih kosong, silahkan input data kehadiran pada bulan dan tahun yang anda pilih.</span>
    <?php } ?>

</div>

