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

$query = "
    SELECT 
        registersiswa.idregister,
        registersiswa.email,
        registersiswa.password,
        registersiswa.level,
        `tabel-siswa`.nis,
        `tabel-siswa`.namasiswa,
        `tabel-siswa`.kelas,
        `tabel-siswa`.alamat
    FROM 
        registersiswa
    INNER JOIN 
        `tabel-siswa` 
    ON 
        registersiswa.idsiswa = `tabel-siswa`.idsiswa";


$sql = mysqli_query($conn, $query);

if (!$sql) {
    die("query Error: " . mysqli_error($conn));
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
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" type="text/css" href="datatables/datatables.css">

    <!-- jQuery dan DataTables -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRmsW7pmo4LXx7EIlQaE2TvjKwIcxkhJdPgy0x5cr" crossorigin="anonymous"></script>
    <script type="text/javascript" src="datatables/datatables.js"></script>
    <title>Daftar Guru</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
   <?php include 'navbar-admin.php'; ?> 
    <div class="col-md-10 p-5 pt-10">
        <h3>Daftar Akun</h3>

 
  <hr class="bg-secondary"> 
  <a class="btn btn-primary text-white " href="#" data-bs-toggle="modal" data-bs-target="#tambahAkunModal">
    <i class="fa-solid fa-circle-plus"></i> Tambah Akun
  </a>
  <br><br>
<!-- Modal -->
<div class="modal fade" id="tambahAkunModal" tabindex="-1" aria-labelledby="tambahAkunModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahAkunModalLabel">Tambah Akun Baru</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
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
            <input type="text" class="form-control" placeholder="idregister" name="idregister" required>
            <label for="idregister">id register</label>
        </div> 
        <div class="form-floating mb-3">
            <input type="idsiswa" class="form-control" placeholder="idsiswa" name="idsiswa" required>
            <label for="idsiswa">id siswa</label>
        </div>
        <div class="form-floating mb-3">
    <select class="form-control" id="level" name="level" required>
        <option value="" disabled selected>Select Level</option>
        <option value="admin">Admin</option>
        <option value="user">User</option>
    </select>
    <label for="level">Level</label>
</div>

        <!-- <div class="form-floating mb-3">
            <input type="text" class="form-control" placeholder="Nama" name="nama" required>
            <label for="nama">Nama</label>
        </div> -->
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
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
      
      </div>
    </div>
  </div>
</div>
        <table class="table table-striped table-bordered" id="example">
            <thead>
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">Nama Siswa </th>
                    <th scope="col">NIS </th>
                    <th scope="col">Gmail</th>
                    <th scope="col">Level</th>
                    <th scope="col">Password</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php  
                $no = 1;
                while($result = mysqli_fetch_assoc($sql)) {
                ?>
                <tr>
                    <th scope="row"><?php echo $no++; ?></th>
                    <td><?php echo $result['namasiswa']; ?></td>
                    <td><?php echo $result['nis']; ?></td>
                    <td><?php echo $result['email']; ?></td>
                    <td><?php echo $result['level']; ?></td>
                    <td><?php echo $result['password']; ?></td>
                    <td>
                                    
                <a href="./keloladataakun.php?ubah=<?php echo $result['idregister']; ?>" class="btn btn-warning mr-3" data-bs-toggle="tooltip" title="Edit Data">
                    <i class="fa-solid fa-pen-to-square"></i> Edit
                </a>
                <a href="./prosesdataakun.php?hapus=<?php echo $result['idregister']; ?>" class="btn btn-danger" data-bs-toggle="tooltip" title="Hapus Data" 
                onclick="return confirm('Apakah Anda ingin menghapus data tersebut?');">
                    <i class="fa-solid fa-trash"></i> Hapus
                </a>


                    </td>
                </tr>
                <?php 
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip(); 
    });
    </script>
      <script>
        $(document).ready(function(){
            $('#example').DataTable();
            $('[data-toggle="tooltip"]').tooltip(); 
        });
    </script>
</body>
</html>
