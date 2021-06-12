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
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/pembeliV.css' ?>">

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

                <a class="navbar-brand" aria-current="page" href="<?php echo base_url('index.php/Pembeli/ControllerDashboardPembeli/index')?>">
                <img src="https://d338t8kmirgyke.cloudfront.net/icons/icon_pngs/000/011/145/original/marketplace.png" width="30" height="30">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('index.php/Pembeli/barang/index')?>">Item</a>
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
                                <li><a class="dropdown-item " href="#">Saldo</a></li>
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

        <div class="row">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <div class="col">
                    <img src="<?php echo base_url('assets/img/Thrift-shop-bro.svg') ?>" class="d-block" alt="..." height = 500px>
                    </div>
                    
                    <h1 class="display-4">Shop</h1>      
                    <p class="lead">Find your dream fashion style today.</p>
                </div>
            </div>
        </div>

        <div class="container">

            <div class="row r-1">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <img src="<?php echo base_url('assets/img/11.jpg') ?>" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                <img src="<?php echo base_url('assets/img/21.jpg') ?>" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                <img src="<?php echo base_url('assets/img/31.jpg') ?>" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="false"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title text-center">Tas LV</h5>
                            <p class="card-text">Bid Tertinggi</p>
                            <p class="card-text">Last Bid</p>
                            <p class="card-text">Mulai Bid</p>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Masukan Nominal Bid" aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Bid</button>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <img src="<?php echo base_url('assets/img/12.jpg') ?>" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                <img src="<?php echo base_url('assets/img/22.jpg') ?>" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                <img src="<?php echo base_url('assets/img/23.jpg') ?>" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title text-center">Tas Vans</h5>
                            <p class="card-text">Bid Tertinggi</p>
                            <p class="card-text">Last Bid</p>
                            <p class="card-text">Mulai Bid</p>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Masukan Nominal Bid" aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Bid</button>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <img src="<?php echo base_url('assets/img/13.jpg') ?>" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                <img src="<?php echo base_url('assets/img/32.jpg') ?>" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                <img src="<?php echo base_url('assets/img/33.jpg') ?>" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title text-center">Tas Dikies</h5>
                            <p class="card-text">Bid Tertinggi</p>
                            <p class="card-text">Last Bid</p>
                            <p class="card-text">Mulai Bid</p>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Masukan Nominal Bid" aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Bid</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
