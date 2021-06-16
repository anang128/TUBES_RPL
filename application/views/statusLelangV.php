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
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/statusLelangV.css' ?>">

    <!-- My Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

    <!-- Tittle -->
    <title>Lelang Barang Bekas!</title>
  </head>
  <body>
    
    
    <!-- Navbar -->
    <div>
        <nav class="navbar fixed-top navbar-expand-lg navbar-light nav1" data-aos = "fade-down">
            <div class="container">
    
                <a class="navbar-brand" aria-current="page" href="<?php echo base_url('index.php/Penjual/ControllerDashboardPenjual/index')?>">
                <img src="https://d338t8kmirgyke.cloudfront.net/icons/icon_pngs/000/011/145/original/marketplace.png" width="30" height="30">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarNavDropdown">
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
                        <li><a class="nav-link" href="<?php echo base_url('index.php/Pembeli/ControllerDashboardPembeli/index')?>">Shop</a></li>
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
    </div>

    <!-- Content-1 -->
    <div>
        <html lang="en">
            <head>
                <title>Bootstrap Example</title>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                
            </head>
        <body>

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
			<?php if ($this->session->flashdata('pesan')) : ?>
			<?= $this->session->flashdata('pesan'); ?>
			<?php endif; ?>
			<?php $this->session->unset_userdata('pesan'); ?>
                <h1 class="display-4 text-center">STATUS LELANG</h1>      

                <table class="table table-striped">
                <thead>
                    <tr>
					<th>No</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Deskripsi Barang</th>
                    <th scope="col">Status Barang</th>
                    <th scope="col">Harga Awal</th>
					<th scope="col">Harga Akhir</th>
					<th scope="col">Status Lelang</th>
					<th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                <?php $no = 1;
				foreach ($data as $dt) { ?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $dt['namaBarang'] ?></td>
						<td><?php echo $dt['descBarang'] ?></td>
						<td><?php echo $dt['statusBarang'] ?></td>
						<td><?php echo $dt['hargaBarang'] ?></td>
						<td><?php echo $dt['hargaAkhir'] ?></td>
						<?php if ($dt['statusLelang'] == "Success"): ?>
							<td><a type="button" class="btn btn-success"><?php echo $dt['statusLelang'] ?></a></td>
						<?php else: ?>
							<td><a type="button" class="btn <?= ($dt['statusLelang'] == "Pending") ? "btn-warning" : "btn-danger" ?>"><?php echo $dt['statusLelang'] ?></a></td>
						<?php endif; ?>
						<form class="form-signin" action="<?= base_url('index.php/Penjual/ControllerBarang/hapusBarang/'.$dt['idBarang'])?>">
							<td><button type="submit" class="form-signin">Delete</button></td>
						</form>
					</tr>
				<?php } ?>
                </tbody>
                </table>

            </div>
        </div>
    </div>


        

    <!-- Footer -->

			<div class="footer_bottom">
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
