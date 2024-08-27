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
  <style>
  .nav-item i {
    margin-right: 0.5rem; /* Ganti nilai ini sesuai kebutuhan */
  }
</style>
  <body>
    <div class="container">
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
  <a class="navbar-brand" href="#">
     <h3>Selamat Datang Admin</h3>
    </a>
    <div class="ml-auto">
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      
      </form>
    </div>
</nav>
</div>
<div class="row no-gutters mt-5">
    <div class="col-md-2 bg-dark mt-2 pr-3 pt-4" style="height: 140vh;">
        <ul class="nav flex-column ml-3 mb-5">
        <li class="nav-item">
  <a class="nav-link active text-white" aria-current="page" href="../0.CRUDPHP/dashboard-admin.php">
    <i class="fa-solid fa-gauge-high mr-2"></i> Dashboard
  </a>
  <hr class="bg-secondary"> 
</li>
<li class="nav-item">
  <a class="nav-link text-white" href="../0.CRUDPHP/dashboard-admin-guru.php">
    <i class="fa-solid fa-chalkboard-user mr-2"></i> Daftar Guru
  </a>
  <hr class="bg-secondary"> 
</li>
<li class="nav-item">
  <a class="nav-link text-white" href="../0.CRUDPHP/dashboard-admin-siswa.php">
    <i class="fa-solid fa-user-graduate mr-2"></i> Daftar Siswa
  </a>
  <hr class="bg-secondary"> 
</li>
<li class="nav-item">
  <a class="nav-link text-white" href="../0.CRUDPHP/dashboard-jadwal.php"> 
    <i class="fa-solid fa-calendar-days mr-2"></i> Jadwal Belajar
  </a>
  <hr class="bg-secondary"> 
</li>

<li class="nav-item">
  <a class="nav-link text-white" href="../0.CRUDPHP/dashboard-akun.php">
    <i class="fa-solid fa-user-graduate mr-2"></i> Daftar Akun
  </a>
  <hr class="bg-secondary"> 
</li>

<li class="nav-item mt-10">
    <a class="nav-link text-white" href="../0.CRUDPHP/logout.php" onclick="return confirm('Yakin mau keluar?');">
      <i class="fa-solid fa-sign-out-alt mr-2"></i> Logout
    </a>
    <hr class="bg-secondary"> 
</li>

        </ul>
    </div>
    