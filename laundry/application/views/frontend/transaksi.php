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

    <div class="container-fluid">
        <h1 class="h3 mb-2 text-center" style="color:seagreen;"><?php echo $judul; ?></h1>
        <div class="card shadow mb-4">
            <div class="card-body">
                <form method="post" action="<?= base_url() ?>transaksi/simpanK">

                	<div class="form-group">
			    				<select name="kode_konsumen" class="form-control" disabled>
			        				<?php foreach($konsumen as $row) { ?>
			            				<option value="<?= $this->session->userdata('kode_konsumen') ?>"><?= $this->session->userdata('nama_konsumen') ?></option>
			        				<?php } ?>
			    				</select>
			    				<input type="hidden" name="kode_konsumen" value="<?= $this->session->userdata('kode_konsumen') ?>">
						</div>

                    <div class="form-group">
                        <select name="kode_paket" id="paket" class="form-control" required>
                            <option value="" selected>- Pilih paket -</option>
                            <?php foreach($paket as $row) { ?>
                                <option value="<?= $row->kode_paket ?>" data-harga="<?= $row->harga_paket ?>">
                                    <?= $row->nama_paket ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="text" id="harga" class="form-control" placeholder="input harga paket" readonly>
                    </div>

                    <div class="form-group">
                        <input type="number" name="berat" id="berat" class="form-control" placeholder="input berat (KG)" required>
                    </div>

                    <div class="form-group">
                        <input type="number" name="grand_total" id="grand_total" class="form-control" placeholder="input grand total" readonly>
                    </div>

						<div class="form-group">
							<select name="bayar"  class="form-control" required>
								<option value="Lunas" >Lunas</option>
								<option value="Belum Lunas" selected>Belum Lunas</option>
							</select>
						</div>

						<div class="form-group" hidden>
							<input type="text" name="tgl_masuk" class="form-control" placeholder="input tgl masuk" value="<?= $tgl_masuk ?>" readonly>
						</div>

						<div class="form-group" hidden>
							<input type="text" name="status" class="form-control" placeholder="input status" value="Baru" readonly>
						</div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"> Simpan </button>
                        <a href="<?= base_url() ?>transaksi" class="btn btn-danger"> Batal </a>    
                    </div>
                </form>
            </div>
        </div>          
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const paketSelect = document.getElementById("paket");
            const hargaInput = document.getElementById("harga");
            const beratInput = document.getElementById("berat");
            const grandTotalInput = document.getElementById("grand_total");

            // Ketika paket dipilih, set harga
            paketSelect.addEventListener("change", function() {
                const selectedOption = paketSelect.options[paketSelect.selectedIndex];
                const hargaPaket = selectedOption.getAttribute("data-harga") || 0;
                
                hargaInput.value = hargaPaket;
                updateGrandTotal(); 
            });

            // Ketika berat berubah, hitung grand total
            beratInput.addEventListener("input", updateGrandTotal);

            function updateGrandTotal() {
                const harga = parseFloat(hargaInput.value) || 0;
                const berat = parseFloat(beratInput.value) || 0;
                grandTotalInput.value = harga * berat;
            }
        });
    </script>

</body>
</html>
