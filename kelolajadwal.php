<!doctype html>

<?php
session_start();
include 'koneksi.php';

   $ruangan = '' ;
   $hari = '';
   $jammulai  = '' ;
   $jamselesai = '' ;
   $idjadwal = '';
    $idguru = '' ;


if(isset($_GET['ubah'])) {            
   $idjadwal = $_GET['ubah'];
   $query = "SELECT *FROM `jadwalbelajar` WHERE idjadwal = '$idjadwal';";
   $sql = mysqli_query($conn,$query);
   $result = mysqli_fetch_assoc($sql);
      $idguru = $result['idguru'];
   $checkGuru = "SELECT * FROM `tabel-guru` WHERE idguru = '$idguru'";
   $checkResult = mysqli_query($conn, $checkGuru);
   $ruangan= $result['ruangan'];
   $hari  = $result['hari'];
   $jammulai = $result['jammulai'];
   $jamselesai = $result['jamselesai'];
//    $idjadwal = $result['idjadwal'];


   if(mysqli_num_rows($checkResult) == 0) {
       echo "<script>
                alert('Maaf, ID Guru tidak ditemukan.');
                document.location.href = 'dashboard-jadwal.php';
             </script>";
       exit();
   }
}
?>
 
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand" href="#">
           Tambah Jadwal
          </a>
        </div>
      </nav>

     <div class="container ">
        <form method="post" action="prosesjadwal.php">
        <input type="hidden" value="<?php echo $idjadwal ?>" name="idjadwal" >
        <div class="mb-3">
        <label for="idjadwal" class="form-label">Id Jadwal</label>
        <input type="text" name="idjadwal" class="form-control" id="idjadwal" placeholder="example.com" value="<?php echo $idjadwal; ?>" >
      </div>
        <div class="mb-3">
        <label for="ruangan" class="form-label">Ruangan</label>
        <input type="text" name="ruangan" class="form-control" id="ruangan" placeholder="Masukkan Ruangan" value="<?php echo $ruangan; ?>" >
      </div>
      <div class="mb-3">
    <label for="hari" class="form-label">Hari</label>
    <select name="hari" class="form-control" id="hari">
        <option value="">Pilih Hari</option>
        <option value="Senin" <?php echo ($hari == 'Senin') ? 'selected' : ''; ?>>Senin</option>
        <option value="Selasa" <?php echo ($hari == 'Selasa') ? 'selected' : ''; ?>>Selasa</option>
        <option value="Rabu" <?php echo ($hari == 'Rabu') ? 'selected' : ''; ?>>Rabu</option>
        <option value="Kamis" <?php echo ($hari == 'Kamis') ? 'selected' : ''; ?>>Kamis</option>
        <option value="Jumat" <?php echo ($hari == 'Jumat') ? 'selected' : ''; ?>>Jumat</option>
        <option value="Sabtu" <?php echo ($hari == 'Sabtu') ? 'selected' : ''; ?>>Sabtu</option>
    </select>
</div>

<div class="mb-3">
    <label for="jammulai" class="form-label">Jam Mulai</label>
    <select name="jammulai" class="form-control" id="jammulai">
        <option value="">Pilih Jam Mulai</option>
        <option value="07:00" <?php echo ($jammulai == '07:00') ? 'selected' : ''; ?>>07:00</option>
        <option value="08:00" <?php echo ($jammulai == '08:00') ? 'selected' : ''; ?>>08:00</option>
        <option value="09:00" <?php echo ($jammulai == '09:00') ? 'selected' : ''; ?>>09:00</option>
        <option value="10:00" <?php echo ($jammulai == '10:00') ? 'selected' : ''; ?>>10:00</option>
        <option value="11:00" <?php echo ($jammulai == '11:00') ? 'selected' : ''; ?>>11:00</option>
        <option value="12:00" <?php echo ($jammulai == '12:00') ? 'selected' : ''; ?>>12:00</option>
        <option value="14:00" <?php echo ($jammulai == '14:00') ? 'selected' : ''; ?>>14:00</option>
        <option value="15:00" <?php echo ($jammulai == '15:00') ? 'selected' : ''; ?>>15:00</option>
        <option value="16:00" <?php echo ($jammulai == '16:00') ? 'selected' : ''; ?>>16:00</option>
        <option value="17:00" <?php echo ($jammulai == '17:00') ? 'selected' : ''; ?>>17:00</option>
       
    </select>
</div>

<div class="mb-3">
    <label for="jamselesai" class="form-label">Jam Selesai</label>
    <select name="jamselesai" class="form-control" id="jamselesai">
        <option value="">Pilih Jam Selesai</option>
        <option value="08:00" <?php echo ($jamselesai == '08:00') ? 'selected' : ''; ?>>08:00</option>
        <option value="09:00" <?php echo ($jamselesai == '09:00') ? 'selected' : ''; ?>>09:00</option>
        <option value="10:00" <?php echo ($jamselesai == '10:00') ? 'selected' : ''; ?>>10:00</option>
        <option value="11:00" <?php echo ($jamselesai == '11:00') ? 'selected' : ''; ?>>11:00</option>
        <option value="12:00" <?php echo ($jamselesai == '12:00') ? 'selected' : ''; ?>>12:00</option>
        <option value="14:00" <?php echo ($jamselesai == '14:00') ? 'selected' : ''; ?>>14:00</option>
        <option value="15:00" <?php echo ($jamselesai == '15:00') ? 'selected' : ''; ?>>15:00</option>
        <option value="16:00" <?php echo ($jamselesai == '16:00') ? 'selected' : ''; ?>>16:00</option>
        <option value="17:00" <?php echo ($jamselesai == '17:00') ? 'selected' : ''; ?>>17:00</option>
      
    </select>
</div>
      <div class="mb-3">
        <label for="idguru" class="form-label">Id Guru</label>
        <input type="text" name="idguru" class="form-control" id="idguru"  placeholder="Masukkan idguru " value="<?php echo $idguru; ?>">
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
            <a class="btn btn-danger" href="dashboard-jadwal.php">Batal</a>
            </form>
        </div>
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
