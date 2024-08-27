
<?php
session_start();
include 'koneksi.php';
$idregister = '' ;
// $nama = '';
$email = '';
$password = '';
$idsiswa = '';
if(isset($_GET['ubah'])) {            
    $idregister= $_GET['ubah'];
    $query = "SELECT * FROM `registersiswa` WHERE idregister= '$idregister';";
    $sql = mysqli_query($conn, $query);
    $result = mysqli_fetch_assoc($sql);
    // $nama  = $result['nama'];
    $email = $result['email'];
    $password = $result['password'];
  //   $checkidsiswa = "SELECT * FROM `tabel-siswa` WHERE idsiswa = '$idsiswa'";
  //   $checkResult = mysqli_query($conn, $checkidsiswa );
  //   if(mysqli_num_rows($checkResult) == 0) {
  //     echo "<script>
  //              alert('Maaf, ID Siswa tidak ditemukan.');
  //              document.location.href = 'dashboard-akun.php';
  //           </script>";
  //     exit();
  // }
   
}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand" href="#">
            Tambah Data Akun
          </a>
        </div>
      </nav>

     <div class="container mt-4">
        <form method="post" action="prosesdataakun.php">
        <input type="" value="<?php echo $idregister ?>" name="idregister">
      
        <div class="mb-3">
        <label for="emailclass="form-label">Email</label>
        <input type="text" name="email" class="form-control" id="email" placeholder="example.com" value="<?php echo $email; ?>" >
      </div>
        <!-- <div class="mb-3">
          <label for="nama" class="form-label">Nama Akun</label>
          <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama Siswa" value="<?php echo $nama; ?>">
        </div> -->
        
        <div class="mb-3">
          <label for="password" class="form-label">password</label>
          <input type="text" name="password" class="form-control" id="password" placeholder="Masukkan password Siswa" value="<?php echo $password; ?>">
        </div>
        <div class="mb-3">
        <label for="idregister" class="form-label">Id Register</label>
        <input type="text" name="idregister" class="form-control" id="idregister" placeholder="example.com" value="<?php echo $idregister; ?>" >
      </div>
      <div class="mb-3">
        <label for="idregister" class="form-label">Id Register</label>
        <input type="text" name="idregister" class="form-control" id="idregister" placeholder="example.com" value="<?php echo $idregister; ?>" >
      </div>
    

        <div class="mb-3 row mt-4">
    <div class="col">
        <?php
        if(isset($_GET['ubah'])) {            
        ?>
         <button type="submit" name="aksi" value="edit"  class="btn btn-primary">Simpan Perubahan</button>
        <?php
        } 
        else {
            ?>  
            <button type="submit" type="button" name="aksi"  value="add"  class="btn btn-primary">Tambahkan</button>
        <?php
        }
        ?>
    </div>
</div>

        <a class="btn btn-danger" href="dashboard-akun.php">Batal</a>
        </form>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
