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
					<form method="post" action="<?= base_url() ?>about/simpan" enctype="multipart/form-data">

						<div class="form-group">
							<input type="text" name="judul_about" class="form-control" placeholder="input judul about" required>
						</div>

						<div class="form-group">
							<textarea name="deskripsi_about" cols="30" rows="5" class="form-control" placeholder="input deskripsi about" required></textarea>
						</div>

						<div class="form-group">
							<input type="file" name="gambar_about" class="form-control" placeholder="input gambar about" required>
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-primary"> Simpan </button>
							<a href="<?= base_url() ?>about" class="btn btn-danger"> Batal </a>	
						</div>
					</form>
				</div>
			</div>			
		</div>
	</body>
</html>