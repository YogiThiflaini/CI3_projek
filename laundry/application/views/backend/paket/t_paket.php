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
					<form method="post" action="<?= base_url() ?>paket/simpan">

						<div class="form-group">
							<input type="text" name="nama_paket" class="form-control" placeholder="input nama paket" required>
						</div>

						<div class="form-group">
							<input type="number" name="harga_paket" class="form-control" placeholder="input harga paket" required>
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-primary"> Simpan </button>
							<a href="<?= base_url() ?>paket" class="btn btn-danger"> Batal </a>	
						</div>
					</form>
				</div>
			</div>			
		</div>
	</body>
</html>