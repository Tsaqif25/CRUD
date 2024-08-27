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
  <nav class="navbar navbar-dark navbar-expand-lg bg-primary">
  <div class="container flex justify-content-between">
    <a class="navbar-brand" href="#">
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
          <a class="nav-link text-nowrap" href="dataguru.php">Data Guru</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Jadwal</a>
        </li>
     
      </ul>
      <form class="d-flex w-100 me-4 my-2 my-lg" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-primary" type="submit">Search</button>
      </form>
      <ul class="navbar-nav me-auto my-2 my-lg-0">
        <li class="nav-item my-auto">
          <a class="nav-link text-nowrap" href="#">Link</a>
        </li>
        <li class="nav-item my-auto">
          <a class="btn btn-primary-white" href="#">Link</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<section class="container hero">
  <div class="row align-items-center h-100">
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
  <a href="./keloladataguru.php" class="btn btn-primary mb-4" data-toggle="tooltip" title="Tambah Data Guru Baru"> 
            <i class="fa-solid fa-circle-plus"></i> Tambah Event Baru
        </a>
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

<footer class="py-5 bg-primary">
    <div class="container">
        <div class="row">
            <!-- Logo dan teks -->
            <div class="col-12 col-md-4 mb-4 mb-md-0">
                <img src="../images/image 1.png" alt="Image description" style="height: 48px;" class="mb-3">
                <p class="text-white">Empowering the future</p>
            </div>

            <!-- Kontak -->
            <div class="col-12 col-md-3 mb-4 mb-md-0 ms-auto">
                <p class="fw-bold fs-5 text-white text-nowrap">Contact Us</p>
                <ul class="list-unstyled">
                    <li class="text-white">Email: <a href="mailto:tsaqif@gmail.com" class="text-white text-decoration-none">tsaqif@gmail.com</a></li>
                </ul>
            </div>

            <!-- Links -->
            <div class="col-12 col-md-3 ms-auto">
                <p class="fw-bold fs-5 text-white">Quick Links</p>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#" class="text-white text-decoration-none">Home</a></li>
                    <li class="mb-2"><a href="#" class="text-white text-decoration-none">Discussion</a></li>
                    <li class="mb-2"><a href="#" class="text-white text-decoration-none">About Us</a></li>
                </ul>
            </div>
        </div>

        <!-- Social Media -->
        <div class="row mt-4">
            <div class="col-12 text-center">
                <a href="#" class="text-white mx-2">
                    <i class="bi bi-facebook" style="font-size: 1.5rem;"></i>
                </a>
                <a href="#" class="text-white mx-2">
                    <i class="bi bi-twitter" style="font-size: 1.5rem;"></i>
                </a>
                <a href="#" class="text-white mx-2">
                    <i class="bi bi-instagram" style="font-size: 1.5rem;"></i>
                </a>
                <a href="#" class="text-white mx-2">
                    <i class="bi bi-linkedin" style="font-size: 1.5rem;"></i>
                </a>
            </div>
        </div>

        <!-- Copyright -->
        <div class="row mt-4">
            <div class="col-12 text-center">
                <p class="text-white mb-0">© 2024 Your Website Name. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
