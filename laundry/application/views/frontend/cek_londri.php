<?php 
	        if (!empty($this->session->flashdata('info'))) { ?>
	     <div class="alert alert-success alert-dismissible fade show" role="alert">
	      <strong>Selamat!</strong> <?= $this->session->flashdata('info') ?>
	      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	        <span aria-hidden="true">&times;</span>
	      </button>
	    </div>
	    <?php } ?>

<form data-aos="fade-up" data-aos-duration="1000" method="post" action="<?= base_url() ?>cek_londri">
	<div class="container">
		<div class="row my-5">
			<div class="col-md-10">
				<input type="text" name="kode_transaksi" class="form-control" placeholder="Silahkan masukkan kode transaksi anda">
			</div>
			<div class="col-md-2">
				<button type="submit" class="btn btn-success">Cek Laundry</button>
			</div>
		</div>
	</div>
</form>

<div class="container" data-aos="fade-up" data-aos-duration="1000">
	<table class="table table-bordered table-striped mb-5">
		<thead>
			<tr>
				<th>Nama Konsumen</th>
				<th>Tanggal Order</th>
				<th>Paket</th>
				<th>Total</th>
				<th>Status</th>
			</tr>
		</thead>	
		<tbody>
			<?php 
				if (!empty($data)) {
					foreach($data as $row){ ?>
						<tr>
							<td><?= $row->nama_konsumen ?></td>
							<td><?= $row->tgl_masuk ?></td>
							<td><?= $row->nama_paket ?></td>
							<td><?= "Rp. ".number_format($row->grand_total,0,',','.') ?></td>
							<td><?= $row->status ?></td>
						</tr>
					<?php }
				}else{ ?>
					<tr>
						<td colspan="5" class="bg-danger text-white text-center">Tidak Ada Data</td>
					</tr>
				<?php } ?>
		</tbody>	
	</table>
</div>