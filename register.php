<?php
require ('koneksi.php');
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <link rel="stylesheet" type="text/css"  href="fontawesome/css/fontawesome.min.css">
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
    <form action="prosesregister.php" class="form-login" method="POST">
        <h3 class="fw-normal text-center mb-3">Daftar Akun
        </h3>
        <?php
          if(isset($_SESSION['log'])) {
        ?>
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Gagal</strong> Email sudah terdaftar.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        <?php
            session_unset(); 
          }
        ?>  
        <div class="form-floating mb-3">
            <input type="text" class="form-control" placeholder="Nama" name="nama" required>
            <label for="nama">Nama</label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" placeholder="E-mail"  name="email" required>
            <label for="email">E-mail</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" placeholder="Password" name="password" required>
            <label for="password">Password</label>
        </div>
        <button class="btn btn-primary w-100 mb-2">
        <i class="fas fa-sign-in-alt"></i>  
        Daftar</button>
        <p class="text-center"> <a href="formlogin.php">LOGIN</a></p>
        <p class="text-muted text-center mb-0">&copy; 2024</p>
    </form>
   </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
