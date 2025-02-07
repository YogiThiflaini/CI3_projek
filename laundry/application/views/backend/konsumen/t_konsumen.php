<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
	</head>

	<body>
		<div class="container-fluid">
			<h1 class="h3 mb-2 text-gray-800"><?php echo $judul; ?></h1>
			<div class="card shadow mb-4">
				<div class="card-body">
					<form method="post" action="<?= base_url() ?>konsumen/simpan">
						<!-- <div class="form-group">
							<input type="text" name="kode_konsumen" value="<?=  $kode_konsumen; ?>" class="form-control" readonly>
						</div> -->

						<div class="form-group">
							<input type="text" name="nama_konsumen" class="form-control" placeholder="input nama konsumen" required>
						</div>

						<div class="form-group">
							<input type="text" name="username" class="form-control"  placeholder="input username" required>
						</div>
						<div class="form-group">
							<input type="text" name="password" class="form-control"  placeholder="input password" required>
						</div>

						<div class="form-group">
							<textarea name="alamat_konsumen" cols="30" rows="5" class="form-control" placeholder="input alamat konsumen" required></textarea>
						</div>

						<div class="form-group">
							<input type="text" name="no_telp" class="form-control" placeholder="input no telpon" >
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-primary"> Simpan </button>
							<a href="<?= base_url() ?>konsumen" class="btn btn-danger"> Batal </a>	
						</div>
					</form>
				</div>
			</div>			
		</div>
	</body>
</html>