
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
.emp-profile{
    padding: 100px;
    margin-top: 6%;
    margin-bottom: 1%;
    border-radius: 10px;
    margin-left: auto;
    margin-right: auto;
    width : 800px;
    height : 400px;
    background: #fff;
}

.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #f38997;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 100px;
    padding: 2%;
    font-weight: 600;
    color: #ffffff;
    background: #d67592;
    cursor: pointer;
    margin: 10px;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin : 10px;

}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #f38997;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
    margin-bottom: 20px;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #f38997;
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
			<?php if ($this->session->flashdata('pesan')) : ?>
			<?= $this->session->flashdata('pesan'); ?>
			<?php endif; ?>
			<?php $this->session->unset_userdata('pesan'); ?>
                <div class="card">
                    <div class="card-body">
                <form class="form-edit" action="<?= base_url('index.php/Pembeli/ControllerDashboardPembeli/editProfile')?>">
			<?php foreach($data as $dt) : ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="profile-head">
                            <h5>
								<?php echo $dt->username ?>
                            </h5>
                        </div>
                    </div>
                </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>username</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $dt->username ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $dt->nama ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $dt->email ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $dt->no_telp ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Address</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $dt->alamat ?></p>
                                            </div>
                                        </div>
										<div class="row">
                                            <div class="col-md-6">
                                                <label>Saldo</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $dt->saldo ?></p>
                                            </div>
                                        </div>
                                            <div class="col-md-2">
                                                <button type="submit" class="profile-edit-btn">Edit Profile </button>
                                            </div>
                                </div>
			<?php endforeach; ?>

                        </div>
                    </div>
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
