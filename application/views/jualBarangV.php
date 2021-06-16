<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


    <!-- aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />


    <!-- My CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/regisV.css' ?>">

    <!-- My Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

    <!-- Tittle -->
    <title>Registrasi</title>
  </head>
  <body>
    
    <div>
        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light nav1" data-aos = "fade-down">
            <div class="container">
    
        <a class="navbar-brand" aria-current="page" href="<?php echo base_url('index.php/Penjual/ControllerDashboardPenjual/index')?>">
        <img src="https://d338t8kmirgyke.cloudfront.net/icons/icon_pngs/000/011/145/original/marketplace.png" width="30" height="30">
        </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse  justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Sell Item
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item " href="<?php echo base_url('index.php/Penjual/statusLelangC/index')?>">Status</a></li>
                                <li><a class="dropdown-item " href="<?php echo base_url('index.php/Penjual/jualBarangC/index')?>">Input Item</a></li>
                            </ul>
                        </li>
                        <a class="nav-link" href="<?php echo base_url('index.php/Penjual/ControllerDashboardPenjual/index')?>">Auction</a>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Account
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item " href="<?php echo base_url('index.php/Penjual/ControllerDashboardPenjual/profile')?>">Profile</a></li>
                                <li><a class="dropdown-item " href="<?php echo base_url('index.php/Penjual/ControllerDashboardPenjual/saldo')?>">Saldo</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="<?php echo base_url('index.php/dashboardC/index')?>">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Form -->
        <div class="row row1 justify-content-center">
            <section class="col-12 col-sm-6 col-md-4 kotak">
			<?php if ($this->session->flashdata('pesan')) : ?>
			<?= $this->session->flashdata('pesan'); ?>
			<?php endif; ?>
			<?php $this->session->unset_userdata('pesan'); ?>
                <div class="card">
                    <div class="wlcm text-center">
                        Masukan Informasi Barang
                    </div>
                    <div class="card-body">
					<?php echo form_open_multipart('Penjual/ControllerBarang/addBarang'); ?>
                        <div class="form-floating mb-3">
                            <input type="text" name="namaBarang" class="form-control" id="namaBarang" placeholder="Nama Barang">
							<?= form_error('namaBarang', '<small class="text-danger pl-3">', '</small>'); ?>
                            <label for="namaBarang">Nama Barang</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="statusBarang" class="form-control" id="statusBarang" placeholder="Status Barang">
							<?= form_error('statusBarang', '<small class="text-danger pl-3">', '</small>'); ?>
                            <label for="statusBarang">Status Barang</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="descBarang" class="form-control" id="descBarang" placeholder="Deskripsi Barang">
							<?= form_error('descBarang', '<small class="text-danger pl-3">', '</small>'); ?>
                            <label for="descBarang">Deskripsi Barang</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="hargaBarang" class="form-control" id="hargaBarang" placeholder="Harga Awal">
							<?= form_error('hargaBarang', '<small class="text-danger pl-3">', '</small>'); ?>
                            <label for="hargaBarang">Harga Awal</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="date" name="deadline" class="form-control" id="deadline" placeholder="Deadline">
							<?= form_error('deadline', '<small class="text-danger pl-3">', '</small>'); ?>
                            <label for="deadline">Set Tanggal Terakhir Bid</label>
                        </div>
                        <div class="form-floating mb-3">
                            <div class="new-lebabers" style="padding-bottom:10px">
                                Masukan Gambar Barang
                            </div>
                            <input type="file" name="gambar" id="gambar" value="upload gambar"/>
                        </div>
                        
                        <div class="button-login text-end" href="#">
                            <button type="submit" class="btn btn-signin">Submit</button>
                        </div>
					</form>
                    </div>
                </div>
            </section>
        </div>

    <!-- Footer -->
<section id="footer">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
					
				</div>
				<hr>
			</div>	
			<div class="footer-lower-content">
            ©2021 LeBabe. All rights reserved.
            <div class="total-shots-container">
                <img
                    src="https://d338t8kmirgyke.cloudfront.net/icons/icon_pngs/000/011/145/original/marketplace.png"
                    width="24px"
                    height="24px"
                 >
            </div>
		</div>
	</section>
	<!-- ./Footer -->
    




















    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->

    <!-- JS AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
