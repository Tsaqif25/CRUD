<!doctype html>
<?php
session_start();



include 'koneksi.php' ;
 $id_siswa = '';
$nisn = '';
$nama_siswa = '';
$jenis_kelamin = '';
$alamat = '';
if(isset($_GET['ubah'])){
  $id_siswa = $_GET['ubah'];
  $query = "SELECT * FROM tb_siswa WHERE id_siswa ='$id_siswa';";
  $sql = mysqli_query($conn,$query);
  $result = mysqli_fetch_assoc($sql) ;
  // var_dump($result) ;
  $nisn = $result['nisn'];
  $nama_siswa = $result['nama_siswa'];
  $jenis_kelamin = $result['jenis_kelamin'];
  $alamat = $result['alamat'];
  
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
            CRUD BS-5
          </a>
        </div>
      </nav>

     <div class="container ">
        <form method="post" action="proses.php">
        <input type="hidden" value="<?php echo $id_siswa ?>" name="id_siswa" >
        <div class="mb-3">
        <label for="idsiswa" class="form-label">Id Siswa</label>
        <input type="text" name="idsiswa" class="form-control" id="idsiswa" placeholder="example.com" value="<?php echo $id_siswa ?>" >
      </div>
      <div class="mb-3">
        <label for="NISN" class="form-label">NISN</label>
        <input type="text" name="nisn" class="form-control" id="NISN" value="<?php echo $nisn ?>" placeholder="example.com">
      </div>
      <div class="mb-3">
        <label for="namasiswa" class="form-label">Nama Siswa</label>
        <input type="text" name="nama_siswa" class="form-control" value="<?php echo $nama_siswa ?>"  id="namasiswa" placeholder="example.com">
      </div>
      <div class="mb-3">
    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
    <select class="form-select" name="jenis_kelamin" id="jenis_kelamin">
        <option value="">Pilih Jenis Kelamin</option>
        <option value="Laki-Laki" <?php if($jenis_kelamin == 'Laki-Laki') { echo "selected"; } ?>>Laki-Laki</option>
        <option value="Perempuan" <?php if($jenis_kelamin == 'Perempuan') { echo "selected"; } ?>>Perempuan</option>
    </select>
</div>


      <!-- <div class="mb-3">
        <label for="foto" class="form-label">Foto Siswa</label>
        <!-- <input <?php if(!isset($_GET['ubah'])) {echo "required" ;} ?> class="form-control" name="foto" type="file" id="foto" value="<?php echo $foto_siswa ?>"> -->
        <!-- <input <?php if(!isset($_GET['ubah'])) {echo "" ;} ?> class="form-control" name="foto" type="file" id="foto" value="<?php echo $foto_siswa ?>">
      </div>  -->
      <div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <textarea class="form-control" name="alamat" id="alamat" rows="3"><?php echo htmlspecialchars($alamat); ?></textarea>
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
            <a class="btn btn-danger" href="index.php">batal </a>
        </div>
        </form>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>