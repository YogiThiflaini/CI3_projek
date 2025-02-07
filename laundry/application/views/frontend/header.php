<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>Laundry Online</title>
  </head>

  <body>
   <nav class="navbar navbar-expand-lg navbar-light bg-navbar">
    <a class="navbar-brand" href="#">
        <img style="height: 50px;" src="<?= base_url() ?>assets/images/logo.png">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/laundry">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>cek_londri">Cek Laundry</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <?php if ($this->session->userdata('username')): ?>
                <li class="nav-item mr-2">
                    <span class="navbar-text">
								    Konsumen: 
								    <a href="<?= base_url() ?>konsumen/editK/<?= $this->session->userdata('kode_konsumen') ?>">
								        <?= $this->session->userdata('username') ?>
								    </a>
										</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-danger btn-sm text-white" href="<?= base_url() ?>panels/logout">Logout</a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link btn btn-primary btn-sm text-white" href="<?= base_url() ?>panels">Login</a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>


	<!-- akhir navbar -->

	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner">
	    <div class="carousel-item active images-slider">
	      <img src="<?= base_url() ?>assets/images/slide/gambar1.jpg" class="d-block w-100" alt="...">
	      <div class="carousel-caption d-none d-md-block bg-caption">
	      	<h5>Laundry 1</h5>
	      	<p>Cepat dan Mudah</p>
	      </div>
	    </div>
	    <div class="carousel-item images-slider">
	      <img src="<?= base_url() ?>assets/images/slide/gambar2.jpg" class="d-block w-100" alt="...">
	      <div class="carousel-caption d-none d-md-block bg-caption">
	      	<h5>Laundry 2</h5>
	      	<p>Biaya terjangkau</p>
	      </div>
	    </div>
	    <div class="carousel-item images-slider">
	      <img src="<?= base_url() ?>assets/images/slide/gambar3.jpg" class="d-block w-100" alt="...">
	      <div class="carousel-caption d-none d-md-block bg-caption">
	      	<h5>Laundry 3</h5>
	      	<p>Dapat terpantau</p>
	      </div>
	    </div>
	  </div>
	  <a class="carousel-control-prev btn-slider" href="#carouselExampleIndicators" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next btn-slider" href="#carouselExampleIndicators" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	  <br>
	  <div class="m-5">
	    <?php if (isset($content) && $content): ?>
	        <?php $this->load->view($content); ?>
	    <?php endif; ?>
		</div>
	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript">
    	AOS.init({
    		easing:'ease-in-out-sine'
    	});
    </script>
  </body>
</html>