<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <style>
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
                    <li class="mb-2"><a href="dataguru.php" class="text-white text-decoration-none">Data Guru</a></li>
                    <li class="mb-2"><a href="jadwal.php" class="text-white text-decoration-none">Jadwal</a></li>
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
