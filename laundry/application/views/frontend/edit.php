<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
	</head>

	<body>
		<div class="container-fluid" data-aos="fade-up" data-aos-duration="1000">
			<h1 class="h3 mb-2 text-center" style="color:seagreen;"><?php echo $judul; ?></h1>
			<div class="card shadow mb-4">
				<div class="card-body">
					<form method="post" action="<?= base_url() ?>konsumen/updateK">
						<div class="form-group">
							<input type="text" name="kode_konsumen" value="<?=  $konsumen['kode_konsumen']; ?>" class="form-control" readonly>
						</div>

						<div class="form-group">
							<input type="text" name="nama_konsumen" class="form-control" value="<?=  $konsumen['nama_konsumen']; ?>" placeholder="input nama konsumen" required>
						</div>

						<div class="form-group">
							<input type="text" name="username" class="form-control" value="<?=  $konsumen['username']; ?>" placeholder="input username" >
						</div>
						<div class="form-group">
							<input type="text" name="password" class="form-control" value="<?=  $konsumen['password']; ?>" placeholder="input password" >
						</div>

						<div class="form-group">
							<textarea name="alamat_konsumen" cols="30" rows="5" class="form-control"placeholder="input alamat konsumen" required><?=  $konsumen['alamat_konsumen']; ?></textarea>
						</div>

						<div class="form-group">
							<input type="text" name="no_telp" class="form-control" value="<?=  $konsumen['no_telp']; ?>" placeholder="input no telpon" >
						</div>

						<div class="form-group d-flex">
						    <button type="submit" class="btn btn-primary flex-fill mr-2">Update</button>
						    <a href="<?= base_url() ?>home" class="btn btn-danger flex-fill">Batal</a>
						</div>
					</form>
				</div>
			</div>			
		</div>
	</body>
</html>