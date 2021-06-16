
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
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/profileV.css' ?>">

    <!-- My Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

    <!-- Tittle -->
    <title>Lelang Barang Bekas!</title>
  </head>

  <style>
    .col{
        margin:20px;
        padding: 20px;
        margin-bottom: 20px;
    }
    .form{
        margin: 20px;
        padding: 20px;
    }
    .nav1 {
    font-family: 'Poppins';
    }

    .nav-link {
    color: #ffffff;
    }
    body{
    background: linear-gradient(180deg, #f38997, #ffffff);
}



/* Navbar */
.nav1 {
    font-family: 'Poppins';
}

.nav-link {
    color: #112340;
}


/* form */
.formidpw {
    margin-top: 10px;
}
.row1{
    background-image: linear-gradient(180deg, #f38997, #ffffff);
    height: 800px;
    font-family: 'Poppins';
}
.card{
    padding: 10px;
    color: #112340;
    border-radius: 10px;
}
.kotak{
    margin-top : 20px;
}
label{
    font-size: 13px;
}

/* wlcm */
.wlcm{
    font-size: larger;
    margin-top: 20px;
    margin-bottom: 15px;
}



/* button-login */
.button-login{
    margin-top: 20px;
    border-radius: 40px;
}
.button-login .btn-signin{
    background-color: #d67592;
}


/* new-lebabers */
.new-lebabers{
    font-size: x-small;
    margin-top: 15px;
}


.total-shots-container{
    float: right;
}


/* Footer */
@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
section {
    padding: 60px 0;
}

section .section-title {
    text-align: center;
    color: #007b5e;
    margin-bottom: 50px;
    text-transform: uppercase;
}
#footer {
    background: #ffffff !important;
}
#footer h5{
	padding-left: 10px;
    border-left: 3px solid #000000;
    padding-bottom: 6px;
    margin-bottom: 20px;
    color:#000000
}
#footer a {
    color: #000000;
    text-decoration: none !important;
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
}
#footer ul.social li{
	padding: 3px 0;
}
#footer ul.social li a i {
    margin-right: 5px;
	font-size:25px;
	-webkit-transition: .5s all ease;
	-moz-transition: .5s all ease;
	transition: .5s all ease;
}
#footer ul.social li:hover a i {
	font-size:30px;
	margin-top:-10px;
}
#footer ul.social li a,
#footer ul.quick-links li a{
	color:#000000;
}
#footer ul.social li a:hover{
	color:#000000;
}
#footer ul.quick-links li{
	padding: 3px 0;
	-webkit-transition: .5s all ease;
	-moz-transition: .5s all ease;
	transition: .5s all ease;
}
#footer ul.quick-links li:hover{
	padding: 3px 0;
	margin-left:5px;
	font-weight:700;
}
#footer ul.quick-links li a i{
	margin-right: 5px;
}
#footer ul.quick-links li:hover a i {
    font-weight: 700;
}

@media (max-width:767px){
	#footer h5 {
    padding-left: 0;
    border-left: transparent;
    padding-bottom: 0px;
    margin-bottom: 10px;
}
}

.list-inline-item{
    color: black;
}



 </style>   
    <!-- Navbar -->
    <body>
    <div>
        <nav class="navbar fixed-top navbar-expand-lg navbar-light nav1" data-aos = "fade-down">
            <div class="container">

                <a class="navbar-brand" aria-current="page" href="<?php echo base_url('index.php/Pembeli/ControllerDashboardPembeli/index')?>">
                <img src="https://d338t8kmirgyke.cloudfront.net/icons/icon_pngs/000/011/145/original/marketplace.png" width="30" height="30">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse  justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Item</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('index.php/Penjual/ControllerDashboardPenjual/index')?>">Auction</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Account
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item " href="#">Profile</a></li>
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
    


<div class="row row1 justify-content-center">
            <section class="col-12 col-sm-6 col-md-4 kotak">
                <div class="card">
                    <div class="card-body">
                    <div class="wlcm text-center">
                        EDIT PROFILE
                    </div>
					<form class="form-signin" action="<?= base_url('index.php/Pembeli/ControllerDashboardPembeli/editProfile')?>" method="POST">
					<div class="form-floating mb-3">
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="name@example.com">
							<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            <label for="nama">Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="no_telp" class="form-control" id="no_telp" placeholder="name@example.com">
							<?= form_error('no_telp', '<small class="text-danger pl-3">', '</small>'); ?>
                            <label for="no_telp">Phone Number</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="alamat" class="form-control" id="alamat" placeholder="name@example.com">
							<?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                            <label for="alamat">Address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="email" class="form-control" id="email" placeholder="name@example.com">
							<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            <label for="email">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="username" class="form-control" id="username" placeholder="name@example.com">
							<?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                            <label for="username">Username</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
							<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                            <label for="password">Password</label>
                        </div>

                        
                        
                        <div class="button-login text-end" href="">
                            <button type="submit" class="btn btn-signin">Save</button>
                        </div>
					</form>
                    </div>
                </div>
            </div>

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
