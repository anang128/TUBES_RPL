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
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/loginV.css' ?>">

    <!-- My Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

    <!-- Tittle -->
    <title>Login</title>
  </head>
  <body>
    
    <div>
        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light nav1" data-aos = "fade-down">
            <div class="container">
    
        <a class="navbar-brand" aria-current="page" href="<?php echo base_url('index.php/dashboardC/index')?>">
        <img src="https://d338t8kmirgyke.cloudfront.net/icons/icon_pngs/000/011/145/original/marketplace.png" width="30" height="30">
        </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse  justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="<?php echo base_url('index.php/dashboardC/index')?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('index.php/regisC/index')?>">Sign Up</a>
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
                        Welcome To Lebabe
                    </div>
                    <div class="card-body">
					<form class="form-signin" action="<?= base_url('index.php/ControllerLogin/index')?>" method="POST">
					<div class="form-floating mb-3">
                            <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                            <label for="username">Username</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                            <label for="password">Password</label>
                        </div>
                        <div class="button-login text-end" href="#">
                            <button type="submit" class="btn btn-signin">Sign In</button>
                        </div>
                        <div class="new-lebabers">
                            New Lebabers? <a href="<?php echo base_url('index.php/ControllerRegister/index')?>">Create Account</a>
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
