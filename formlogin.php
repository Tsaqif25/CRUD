<?php
session_start();
include 'koneksi.php';

?>
<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css"  href="fontawesome/css/fontawesome.min.css">
  </head>
  <style>
    body {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #f5f5f5;
        margin: 0;
    }
    .form-login {
        max-width: 330px;
        width: 100%;
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
  </style>
  <body>
   
   <div class="container-fluid d-flex justify-content-center align-items-center" style="height: 100vh;">
    <form action="proseslogin.php" class="form-login" method="post">
        <h3 class="fw-normal text-center mb-3">Login</h3>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" placeholder="E-mail" name="email" required>
            <label for="email">E-mail</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" placeholder="PASSWORD" name="password" required>
            <label for="password">Password</label>
        </div>
        <button class="btn btn-primary w-100 mb-2" type="submit">
        <i class="bi bi-box-arrow-in-right"></i>
        Submit
         </button>
        <p class="text-center">Tidak Punya Akun? <a href="../0.CRUDPHP/register.php">Daftar</a></p>
        <p class="text-muted text-center mb-0">&copy; 2024</p>
    </form>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
