<?php
	date_default_timezone_set('Asia/Jakarta');
	$tgl_masuk = date('Y-m-d h:i:s');
?>

<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
	</head>

	<body>

		<?php 
	        if (!empty($this->session->flashdata('info'))) { ?>
	     <div class="alert alert-success alert-dismissible fade show" role="alert">
	      <strong>Selamat!</strong> <?= $this->session->flashdata('info') ?>
	      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	        <span aria-hidden="true">&times;</span>
	      </button>
	    </div>
	    <?php } ?>

		<div class="container-fluid">
			<h1 class="h3 mb-2 text-gray-800"><?php echo $judul; ?></h1>
			<div class="card shadow mb-4">
				<div class="card-body">
					<form method="post" action="<?= base_url() ?>transaksi/update">

						<div class="form-group">
							<select name="kode_konsumen" class="form-control" required>
								<?php
									foreach($konsumen as $row){
									if ($transaksi['kode_konsumen'] == $row->kode_konsumen) { ?>
										<option value="<?= $row->kode_konsumen ?>" selected><?= $row->nama_konsumen ?></option>
									<?php }else{ ?>
										<option value="<?= $row->kode_konsumen ?>"><?= $row->nama_konsumen ?></option>
									<?php } ?>
								<?php }?>	
							</select>
						</div>

						<div class="form-group">
							<select name="kode_paket" id="paket" class="form-control" required>
								<?php
									foreach($paket as $row){
									if ($transaksi['kode_paket'] == $row->kode_paket) { ?>
										<option value="<?= $row->kode_paket ?>" selected><?= $row->nama_paket ?></option>
									<?php }else{ ?>
										<option value="<?= $row->kode_paket ?>"><?= $row->nama_paket ?></option>
									<?php } ?>
								<?php }?>	
							</select>
						</div>

						<div class="form-group">
							<input type="text" id="harga"  class="form-control" placeholder="input harga paket" value="<?= $transaksi['harga_paket']; ?>" readonly>
						</div>

						<div class="form-group">
							<input type="number" name="berat" id="berat" class="form-control" placeholder="input berat (KG)" value="<?= $transaksi['berat']; ?>" required>
						</div>

						<div class="form-group">
							<input type="number" name="grand_total" id="grand_total" class="form-control" placeholder="input grand total" value="<?= $transaksi['grand_total']; ?>" readonly>
						</div>

						<div class="form-group" hidden>
							<input type="text" name="tgl_masuk" class="form-control" placeholder="input tgl masuk" value="<?= $tgl_masuk ?>" readonly>
						</div>

						<div class="form-group">
							<select name="bayar"  class="form-control" required>
							<?php 
							if ($transaksi['bayar'] == "Lunas") {?>
								<option value="Lunas" selected>Lunas</option>
								<option value="Belum Lunas" >Belum Lunas</option>
							<?php } else{?>
								<option value="Lunas" >Lunas</option>
								<option value="Belum Lunas" selected>Belum Lunas</option>
							<?php } ?>
							</select>
						</div>

						<div class="form-group" hidden>
							<input type="text" name="status" class="form-control" placeholder="input status" value="Baru" readonly>
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-primary"> Simpan </button>
							<a href="<?= base_url() ?>transaksi/riwayat" class="btn btn-danger"> Batal </a>	
						</div>
					</form>
				</div>
			</div>			
		</div>

		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	</body>
</html>

<script>
	$('#paket').change(function(){
		var kode_paket = $(this).val();
		
		$.ajax({
			url	: '<?= base_url() ?>transaksi/getHargaPaket',
			data : {kode_paket : kode_paket},
			method : 'post',
			dataType : 'JSON',
			success : function(hasil){
				$('#harga').val(hasil.harga_paket);
			}
		});
	});

	$('#berat').keyup(function(){
		var berat = $(this).val();
		var harga = document.getElementById('harga').value;
		$('#grand_total').val(berat * harga);
	});

</script>