<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
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
  </style>
  <body>
  <nav class="navbar navbar-dark navbar-expand-lg bg-primary fixed-top">
  <div class="container flex justify-content-between">
    <a class="navbar-brand" href="homepage.php">
    <img src="../images/mcampus-logo-blue.png" alt="Image description" style="height: 32px;" class="mb-3">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-0 mx-lg-3">
        <li class="nav-item d-block d-lg-none d-xl-none">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-nowrap" href="homepage.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-nowrap" href="dataguru.php">Data Guru</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="jadwal.php">Jadwal</a>
        </li>
     
      </ul>
      <form class="d-flex w-100 me-4 my-2 my-lg" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-primary" type="submit">Search</button>
      </form>
      <ul class="navbar-nav me-auto my-2 my-lg-0">
        <li class="nav-item my-auto">
        <a class="btn btn-primary-white" href="logoutuser.php" onclick="return confirm('Yakin mau keluar?');"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
