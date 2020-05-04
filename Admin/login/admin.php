<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/admin.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

    <title>Halaman Admin</title>
  </head>
  <body>

    <?php 
  session_start();

  // cek apakah yang mengakses halaman ini sudah login
  if($_SESSION['level']==""){
    header("location:index.php?pesan=gagal");
  }

  ?>

  <nav class="navbar navbar-expand-lg navbar-light bg-secondary fixed-top">
    <a class="navbar-brand" href="admin.php">Selamat Datang <b><?php echo $_SESSION['level']; ?></b></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
      </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <form class="form-inline my-2 my-lg-0 ml-auto">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
    </form>

    <div class="icon ml-4">
      <h5>
        <i class="fas fa-bell mr-2" data-toggle="tooltip" title="Pemberitahuan"></i>
        <i class="fas fa-user-circle mr-3"> <b><?php echo $_SESSION['username']; ?></b></i>
        <a href="logout.php"><i class="fas fa-sign-out-alt " data-toggle="tooltip" title="Sign Out"></i></a>
      </h5>
    </div>
  </div>
</nav>

<div class="row no-gutters mt-4">
  <div class="col-md-2 bg-dark mt-2 pr-3 pt-4 ">
    <ul class="nav flex-column ml-3 mb-5">
      <div class="mb-3">
        <img src="img/logo.png " width='200' height='150'>
      </div>
  <li class="nav-item">
    <a class="nav-link active text-white" href="admin.php?page=admin"><i class="fas fa-tachometer-alt mr-2"></i>DASHBOARD</a><hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="admin.php?page=data_pelanggan"><i class="fas fa-user mr-2"></i>Data Pelanggan</a><hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="admin.php?page=mobil"><i class="fas fa-car-alt mr-2"></i>Mobil</a><hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="admin.php?page=Laporan"><i class="fas fa-user-edit mr-2"></i>Laporan</a><hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="admin.php?page=menghubungi"><i class="fas fa-phone mr-2"></i>Menghubungi</a><hr class="bg-secondary">
  </li>
</ul>
  </div>

  <div class="badan">


  <?php 
  if(isset($_GET['page'])){
    $page = $_GET['page'];

    switch ($page) {
      case 'admin':
        include "halaman/admin.php";
        break;
      case 'data_pelanggan':
        include "halaman/data_pelanggan.php";
        break;
      case 'mobil':
        include "halaman/mobil.php";
        break;
      case 'Laporan':
        include "halaman/Laporan.php";
        break;
      case 'menghubungi':
        include "halaman/menghubungi.php";
        break;                  
      default:
        echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
        break;
    }
  }else{
    include "halaman/admin.php";
  }

   ?>

  </div>
  </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/admin.js"></script>
  </body>
</html>