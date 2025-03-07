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
					<form method="post" action="<?= base_url() ?>about/update" enctype="multipart/form-data">

						<div class="form-group">
							<input type="hidden" name="id_about" class="form-control" placeholder="input judul about" value="<?= $about['id_about'] ?>" required>
						</div>

						<div class="form-group">
							<input type="text" name="judul_about" class="form-control" placeholder="input judul about" value="<?= $about['judul_about'] ?>"required>
						</div>

						<div class="form-group">
							<textarea name="deskripsi_about" cols="30" rows="5" class="form-control" placeholder="input deskripsi about" required><?= $about['deskripsi_about'] ?></textarea>
						</div>

						<div class="form-group">
							<input type="file" name="gambar_about" class="form-control" placeholder="input gambar about" >
							 <img src="<?= base_url()?>assets/images/about/<?= $about['gambar_about']; ?>" width="150">
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-primary"> Update </button>
							<a href="<?= base_url() ?>about" class="btn btn-danger"> Batal </a>	
						</div>
					</form>
				</div>
			</div>			
		</div>
	</body>
</html>