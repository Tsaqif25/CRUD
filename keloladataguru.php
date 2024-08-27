<!doctype html>

<?php
session_start();
include 'koneksi.php';

   $idguru = '' ;
   $nama = '';
   $nip  = '' ;
   $matapelajaran = '' ;

if(isset($_GET['ubah'])) {            
   $idguru = $_GET['ubah'];
   $query = "SELECT *FROM `tabel-guru` WHERE idguru = '$idguru';";
   $sql = mysqli_query($conn,$query);
   $result = mysqli_fetch_assoc($sql);
   $nama = $result['nama'];
   $nip  = $result['nip'];
   $matapelajaran = $result['matapelajaran'];


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
           Tambah Data Guru
          </a>
        </div>
      </nav>

     <div class="container ">
        <form method="post" action="prosesdataguru.php">
        <input type="hidden" value="<?php echo $idguru ?>" name="idguru" >
        <div class="mb-3">
        <label for="idguru" class="form-label">Id Guru</label>
        <input type="text" name="idguru" class="form-control" id="idguru" placeholder="example.com" value="<?php echo $idguru; ?>" >
      </div>
        <div class="mb-3">
        <label for="namaguru" class="form-label">Nama Guru</label>
        <input type="text" name="namaguru" class="form-control" id="namaguru" placeholder="Masukkan Nama Guru" value="<?php echo $nama; ?>" >
      </div>
      <div class="mb-3">
        <label for="nip" class="form-label">NIP</label>
        <input type="text" name="nip" class="form-control" id="nip"  placeholder="Masukkan Nip Guru" value="<?php echo $nip; ?>">
      </div>
      <div class="mb-3">
    <label for="matapelajaran" class="form-label">Mata Pelajaran</label>
    <select class="form-select" name="matapelajaran" id="matapelajaran">
        <option value="">Pilih Mata Pelajaran</option>
        <option value="Matematika" <?php if(isset($matapelajaran) && $matapelajaran == 'Matematika') { echo "selected"; } ?>>Matematika</option>
        <option value="IPS" <?php if(isset($matapelajaran) && $matapelajaran == 'IPS') { echo "selected"; } ?>>IPS</option>
        <option value="TIK" <?php if(isset($matapelajaran) && $matapelajaran == 'TIK') { echo "selected"; } ?>>TIK</option>
        <option value="IPA" <?php if(isset($matapelajaran) && $matapelajaran == 'IPA') { echo "selected"; } ?>>IPA</option>
        <option value="Bahasa Inggris" <?php if(isset($matapelajaran) && $matapelajaran == 'Bahasa Inggris') { echo "selected"; } ?>>Bahasa Inggris</option>
        <option value="Bahasa Indonesia" <?php if(isset($matapelajaran) && $matapelajaran == 'Bahasa Indonesia') { echo "selected"; } ?>>Bahasa Indonesia</option>
        <option value="Olahraga" <?php if(isset($matapelajaran) && $matapelajaran == 'Olahraga') { echo "selected"; } ?>>Olahraga</option>
        <option value="Seni Budaya" <?php if(isset($matapelajaran) && $matapelajaran == 'Seni Budaya') { echo "selected"; } ?>>Seni Budaya</option>
    </select>
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
            <a class="btn btn-danger" href="dashboard-admin-guru.php">Batal</a>
            </form>
        </div>
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
