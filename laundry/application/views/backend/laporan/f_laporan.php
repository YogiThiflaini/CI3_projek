<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
	</head>

	<body>
		<div class="container-fluid">
			<h3 class="mb-3 text-gray-800"><?= $judul; ?></h3>

			<div class="card shadow mb-4">
				<div class="card-body">
					<form action="<?= base_url() ?>laporan/cetak_laporan" method="post" class="form-user">
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Tanggal Mulai</label>
							<div class="col-sm-4">
								<input type="date" name="tanggal_mulai" class="form-control" required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label">Tanggal Akhir</label>
							<div class="col-sm-4">
								<input type="date" name="tanggal_akhir" class="form-control" required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-2 col-form-label"></label>
							<div class="col-sm-4">
								<button type="submit" class="btn btn-primary"> Submit </button>	
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>	