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
    
                <a class="navbar-brand" aria-current="page" href="<?php echo base_url('index.php/dashboardC/index')?>">
                <img src="https://d338t8kmirgyke.cloudfront.net/icons/icon_pngs/000/011/145/original/marketplace.png" width="30" height="30">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="<?php echo base_url('index.php/penjualC/index')?>">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Jual Barang
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item " href="#">Status Lelang</a></li>
                                <li><a class="dropdown-item " href="<?php echo base_url('index.php/jualBarangC/index')?>">Input Barang</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Lelang
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item " href="#">Pelelang</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url('index.php/pembeliC/index')?>">Pembeli</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item " href="#">Saldo</a></li>
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
                <h1 class="display-4 text-center">STATUS LELANG</h1>      

                <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Harga Terakhir</th>
                    <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Tas LV</td>
                    <td>Rp. 1.000.000</td>
                    <td><button type="button" class="btn btn-success">Success</button></td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>Tas Vans</td>
                    <td>Rp. 1.500.000</td>
                    <td><button type="button" class="btn btn-danger">Lelang</button></td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Tas Dickies</td>
                    <td>Rp. 4.000.000</td>
                    <td><button type="button" class="btn btn-success">Success</button></td>
                    </tr>
                </tbody>
                </table>

            </div>
        </div>
    </div>


        

    <!-- Footer -->
    <section id="footer">
		<div class="container">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Home</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>About</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
						<li><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
						<li><a href="https://wwwe.sunlimetech.com" title="Design and developed by"><i class="fa fa-angle-double-right"></i>Imprint</a></li>
					</ul>
				</div>
			</div>
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