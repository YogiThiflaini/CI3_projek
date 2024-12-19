<div class="container-fluid">
	
	<div class="alert alert-success" role="alert">
      <i class="fas fa-university"></i> DAFTAR USERS
    </div>

     <?php echo $this->session->flashdata('pesan') ?>

    <?php echo anchor('administrator/users/tambah_users','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i>Tambah Users</button>') ?>

    <table class="table table-bordered table-striped table-hover">
    	<tr>
    		<th>NO</th>
    		<th>USERNAME</th>
    		<th>EMAIL</th>
    		<th>LEVEL</th>
    		<th>BLOKIR</th>
    		<th colspan="2">AKSI</th>
    	</tr>

    	<?php 
    	$no=1;
    	foreach($user as $use):
    	 ?>
    	 <tr>
    	 	<td><?php echo $no++ ?></td>
    	 	<td><?php echo $use->username ?></td>
    	 	<td><?php echo $use->email ?></td>
    	 	<td><?php echo $use->level ?></td>
    	 	<td><?php echo $use->blokir ?></td>
			<td width="20px"><?php echo anchor('administrator/users/update/'.$use->id,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
    		<td width="20px"><?php echo anchor('administrator/users/hapus/'.$use->id,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>') ?></td>
    	 </tr>

    	<?php endforeach; ?>
    </table>
</div>