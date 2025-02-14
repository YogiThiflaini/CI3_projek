<nav class="navbar navbar-light bg-warning text-dark">

  <?php foreach($identitas as $id): ?>
  <a class="navbar-brand"><strong><?php echo $id->judul_website ?></strong></a>
  <span class="small"><?php echo $id->alamat ?> - <?php echo $id->email ?> - <?php echo $id->telp ?></span>
  <?php endforeach; ?>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    <button class="btn btn-outline-primary
     my-2 my-sm-0 ml-2" type="submit">Login</button>
  </form>
</nav>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav mx-auto">
      <a class="nav-item nav-link ml-3" href="#">BERANDA <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link ml-3" href="#">TENTANG KAMPUS</a>
      <a class="nav-item nav-link ml-3" href="#">INFORMASI</a>
      <a class="nav-item nav-link ml-3" href="#">FASILITAS</a>
      <a class="nav-item nav-link ml-3" href="#">GALERI</a>
      <a class="nav-item nav-link ml-3" href="#">KONTAK</a>
    </div>
  </div>
</nav>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url('assets/img/slide1.jpg') ?>" class="d-block w-100" alt="slider">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/img/slide2.jpg') ?>" class="d-block w-100" alt="slider">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/img/slide3.jpg') ?>" class="d-block w-100" alt="slider">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

  <div class="card text-center m-5">
    <div class="card-header">
      <strong>TENTANG KAMPUS</strong>
    </div>
    <div class="card-body">
      <p class="card-text">
      <?php foreach($tentang as $ttg) :?>
        <?php echo word_limiter( $ttg->sejarah,60) ?>
      <?php endforeach; ?>
      </p>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Selengkapnya...
      </button>
    </div>
  </div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tentang Kampus</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-justify"> 
        <?php foreach($identitas as $id): ?>
          <strong>SEJARAH <?php echo $id->judul_website ?></strong>
        <?php endforeach; ?>
        <?php foreach($tentang as $ttg) :?>
          <?php echo $ttg->sejarah ?>
        <?php endforeach; ?><br><br>

        <?php foreach($identitas as $id): ?>
          <strong>VISI <?php echo $id->judul_website ?></strong>
        <?php endforeach; ?>
        <?php foreach($tentang as $ttg) :?>
          <?php echo $ttg->visi ?>
        <?php endforeach; ?><br><br>

        <?php foreach($identitas as $id): ?>
          <strong>MISI <?php echo $id->judul_website ?></strong>
        <?php endforeach; ?>
        <?php foreach($tentang as $ttg) :?>
          <?php echo $ttg->misi ?>
        <?php endforeach; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="row m-4">

  <?php foreach($informasi as $info) : ?>
<div class="col-md-3 mb-4 d-flex justify-content-center">
  <div class="card" style="width: 18rem;">
    <span class="display-2 text-center text-info"><i class="<?php echo $info->icon ?>"></i></span>
    <div class="card-body text-center">
      <h5 class="card-title badge badge-success"><?php echo $info->judul_informasi ?></h5>
      <p class="card-text"><?php echo $info->isi_informasi ?></p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
</div>
  <?php endforeach; ?>

</div>

<form method="post" action="<?php echo base_url('landing_page/kirim_pesan') ?>">
  
  <div class="row m-4">
    <div class="col-md-8">
      <div class="alert alert-primary">
        <i class="fas fa-envelope-open-text"></i>  HUBUNGI KAMI
      </div>

      <?php echo $this->session->flashdata('pesan') ?>

      <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control">
        <?php echo form_error('nama','<div class="text-danger small ml-2">','</div>');?>
      </div>

      <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control">
        <?php echo form_error('email','<div class="text-danger small ml-2">','</div>');?>
      </div>

      <div class="form-group">
        <label>pesan</label>
        <textarea type="text" name="pesan" class="form-control" rows="5"></textarea>
        <?php echo form_error('pesan','<div class="text-danger small ml-2">','</div>');?>
      </div>

      <button type="submit" class="btn btn-primary">Kirim</button>

    </div>
  </div>
</form>