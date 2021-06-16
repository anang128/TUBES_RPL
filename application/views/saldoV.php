
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
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/saldoV.css' ?>">

    <!-- My Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

    <!-- Tittle -->
    <title>Lelang Barang Bekas!</title>
  </head>
  <style>
      .content{
    padding : 88px;
    
}
.panel-default{
    height : 300px;
    width : 500px;
    margin-left: auto;
    margin-right: auto;
    margin-top: 10px;
    border : 2px solid #f38997;
    border-radius: 10px;
}
.panel-heading{
    background-color: #f38997;
    color : white;
    text-align: center;
    padding : 10px;
    font-weight: bolder;
    font-family: 'Poppins';
}
.panel-body{
    padding : 20px;
    color : black;
    font-family: 'Poppins';
}
.dropdown {
    color: white;
    position: relative;
    display: inline-block;
}
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #FFF;
    min-width: 160px;
    box-shadow: 0px 4px 8px 0px rgba(34, 49, 63, 1);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    font-weight: bolder;
}

.dropdown-content a:hover {
    background-color: #000;
    color : white;
    font-weight: bolder;
}

nav {
    font-family: 'Poppins';
}

.nav-link {
    color: #ffffff;
}

.dropdown:hover .dropdown-content {display: block;}
</style>
  <body>

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
                            <a class="nav-link" href="<?php echo base_url('index.php/Pembeli/keranjangC')?>">Item</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('index.php/Penjual/ControllerDashboardPenjual/index')?>">Auction</a>
                        </li>
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
    <div class="content">
			<?php if ($this->session->flashdata('pesan')) : ?>
			<?= $this->session->flashdata('pesan'); ?>
			<?php endif; ?>
			<?php $this->session->unset_userdata('pesan'); ?>
        <div class="panel panel-default">
            <div class="panel-heading">SALDO</div>
                <div class="panel-body">
                <?php if(isset($error_message)) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?= $error_message ?>
                        </div>
                <?php } ?>
                <?php if(isset($success)) { ?>
                            <div class="alert alert-success" role="alert">
                                <?= $success ?>
                            </div>
                <?php } ?>
				<?php foreach ($data as $dt) : ?>
						<div class="row">
							<label>Jumlah Saldo</label>
                            <div class="col-md-6">
                            <?php echo $dt->username ?> : Rp.<?php echo $dt->saldo ?></p>
                            </div>
                        </div>
                		<form method="post" action="<?php echo base_url('index.php/Pembeli/ControllerDashboardPembeli/isiSaldo'); ?>">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Isi Saldo</label>
                            <input type="number" name="saldo" class="form-control" id="formGroupExampleInput" placeholder="Isi Saldo" name="jumlah"required>
                        </div>      
                        <div class="form-group">
							<button type="submit" class="profile-edit-btn">Isi</button>
                        </div>
                		</form>
                    </div>
				<?php endforeach; ?>
            </div>
        </div>
    		</body>
		</html>
    <!-- Footer -->
      <!-- Site footer -->
    <Footer>
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
        </div>
    </footer>
        <!-- Optional JavaScript; choose one of the two! -->

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
                    