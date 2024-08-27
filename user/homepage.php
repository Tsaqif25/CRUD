<?php
session_start(); 
include('../koneksi.php');

if (!isset($_SESSION['email'])) {
    echo "
    <script>
        alert('Silakan login dulu');
        document.location.href = '../formlogin.php'; 
    </script>
    ";
    exit; // Pastikan kode berikutnya tidak dieksekusi jika pengguna belum login
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <style>
    .navbar-nav .nav-link.active {
        color: #ffffff; /* Ganti variabel $white dengan kode warna */
        font-weight: bold;
    }

    .navbar-nav .nav-link {
        color: #ffffff; /* Ganti variabel $white dengan kode warna */
    }

    .navbar-nav .nav-link:hover {
        color: #f8f9fa; /* Ganti variabel $gray-100 dengan kode warna */
    }

    .nav-item {
        padding-left: 0;
        padding-right: 0;
    }

    .btn-primary-white {
        background-color: #ffffff; /* Menggunakan warna putih */
        color: #0d6efd; /* Warna primary Bootstrap */
        border-radius: 30px;
        padding: 10px 24px;
        min-width: 120px;
        border: 1px solid #0d6efd;

        /* Hover state */
        transition: background-color 0.3s, color 0.3s;
    }

    .btn-primary-white:hover {
        background-color: #f8f9fa; /* Warna abu-abu terang untuk hover */
        color: #0d6efd;
    }

    .hero {
        padding-top: 16px;
        padding-bottom: 16px;
    }

    .hero-image {
        max-height: 100%;
        max-width: 100%;
    }

    .h-315px {
        height: 315px;
    }

    .me-140 {
        margin-right : 140px;;
    }
  </style>
  <body>
  <?php include 'navbar.php'; ?> 
  
<section class="container hero  mt-5">
  <div class="row align-items-center h-100 mt-5">
    <div class="col-12 col-lg-4">
      <h1>Your Journey <br> Begins Here</h1>
      <p class="mb-4">Discover the Power of Education </p>
      <a href="" class="btn btn-primary me-2 mb-2 mb-lg-0">Sign Up</a>
      <!-- <a href="" class="btn btn-secondary me-2 mb-2 mb-lg-0">Join Our Community</a> -->
    </div>
    <div class="col-12 col-lg-6 h-315px order-lg-first order-lg-last mb-3 mb-lg-0">
      <img class="hero-image float-lg-end" src="../images/Mask group.png" alt="">
    </div>
  </div>
</section>
<section class="container mt-5">
   
  <h2 class="text-center">Upcoming Events</h2>
  <!-- <a href="./keloladataguru.php" class="btn btn-primary mb-4" data-toggle="tooltip" title="Tambah Data Guru Baru"> 
            <i class="fa-solid fa-circle-plus"></i> Tambah Event Baru
        </a> -->
  <br>
  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">New Semester Orientation</h5>
          <p class="card-text">Date: September 5, 2024</p>
          <p class="card-text">Location: Main Auditorium</p>
          <a href="#" class="btn btn-primary">Learn More</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Job Fair</h5>
          <p class="card-text">Date: October 10, 2024</p>
          <p class="card-text">Location: Conference Center</p>
          <a href="#" class="btn btn-primary">Learn More</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Graduation Ceremony</h5>
          <p class="card-text">Date: November 15, 2024</p>
          <p class="card-text">Location: Graduation Hall</p>
          <a href="#" class="btn btn-primary">Learn More</a>
        </div>
      </div>
    </div>
  </div>
</section>
<br><br><br>
<?php include 'footer.php'; ?> 




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
