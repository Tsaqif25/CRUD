<?php
include 'koneksi.php';
session_start(); 
if (!isset($_SESSION['email'])) {
  echo "
  <script>
      alert('Silakan login dulu');
      document.location.href = 'formlogin.php';
  </script>
  ";
  exit; // Pastikan kode berikutnya tidak dieksekusi jika pengguna belum login
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>Hello, world!</title>
    <link rel="stylesheet" href="admin.css">
  </head>
 
</style>
  <body>
  <?php include 'navbar-admin.php'; ?>
    <div class="col-md-10 p-5 pt-10">
  <h3><i class="fa-solid fa-gauge"></i> Dashboard</h3>
  <hr>
  <div class="row mb-4">
    <!-- Card 1 -->
    <div class="col-md-4 mb-3">
      <div class="card text-white bg-info" style="width: 100%;">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fa-solid fa-user-graduate"></i>
          </div>
          <h5 class="card-title">Jumlah Siswa</h5>
          <div class="display-4">1.200</div>
          <a href=""><p class="text-white">Lihat Detail</p></a>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-md-4 mb-3">
      <div class="card text-white bg-success" style="width: 100%;">
        <div class="card-body">
          <div class="card-body-icon">
          <i class="fa-solid fa-chalkboard-user"></i>
          </div>
          <h5 class="card-title">Jumlah Guru</h5>
          <div class="display-4">1.200</div>
          <a href=""><p class="text-white">Lihat Detail</p></a>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col-md-4 mb-3">
      <div class="card text-white bg-warning" style="width: 100%;">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fa-solid fa-user-graduate"></i>
          </div>
          <h5 class="card-title">Jumlah Pegawai</h5>
          <div class="display-4">1.200</div>
          <a href=""><p class="text-white">Lihat Detail</p></a>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <!-- Card 4 -->
    <div class="col-md-4 mb-3">
      <div class="card" style="width: 100%;">
        <div class="card-header bg-danger display-4 text-center pt-4 pb-4">
        <i class="fa-brands fa-instagram"></i>
        </div>
        <div class="card-body">
          <h5 class="card-title">INSTAGRAM</h5>
          <a href="#" class="btn btn-primary">FOLLOW</a>
        </div>
      </div>
    </div>

    <!-- Card 5 -->
    <div class="col-md-4 mb-3">
      <div class="card" style="width: 100%;">
        <div class="card-header bg-info display-4 text-center pt-4 pb-4">
        <i class="fa-brands fa-facebook"></i>
        </div>
        <div class="card-body">
          <h5 class="card-title">INSTAGRAM</h5>
          <a href="#" class="btn btn-primary">FOLLOW</a>
        </div>
      </div>
    </div>

    <!-- Card 6 -->
    <div class="col-md-4 mb-3">
      <div class="card" style="width: 100%;">
        <div class="card-header bg-success display-4 text-center pt-4 pb-4">
          X
        </div>
        <div class="card-body">
          <h5 class="card-title">FACEBOOK</h5>
          <a href="#" class="btn btn-primary">FOLLOW</a>
        </div>
      </div>
    </div>
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>