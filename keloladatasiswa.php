<?php
session_start();
include 'koneksi.php';

$idsiswa = '';
$namasiswa = '';
$nis = '';
$kelas = '';
$alamat = '';

if (isset($_GET['ubah'])) {
    $idsiswa = $_GET['ubah'];
    $query = "SELECT * FROM `tabel-siswa` WHERE idsiswa = '$idsiswa';";
    $sql = mysqli_query($conn, $query);
    $result = mysqli_fetch_assoc($sql);
    $nis = $result['nis'];
    $namasiswa = $result['namasiswa'];
    $kelas = $result['kelas'];
    $alamat = $result['alamat'];
}
?>
<!doctype html>
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
            Tambah Data Siswa
        </a>
    </div>
</nav>

<div class="container mt-4">
    <form method="post" action="prosesdatasiswa.php">
      
        <div class="mb-3">
            <label for="idsiswa" class="form-label">id siswa</label>
            <input type="text" name="idsiswa" class="form-control" id="idsiswa" placeholder="Masukkan Nama Siswa" value="<?php echo $idsiswa; ?>" required>
        </div>
        <div class="mb-3">
            <label for="namasiswa" class="form-label">Nama Siswa</label>
            <input type="text" name="namasiswa" class="form-control" id="namasiswa" placeholder="Masukkan Nama Siswa" value="<?php echo $namasiswa; ?>" required>
        </div>

        <div class="mb-3">
            <label for="nis" class="form-label">NIS</label>
            <input type="text" name="nis" class="form-control" id="nis" placeholder="Masukkan NIS Siswa" value="<?php echo $nis; ?>" required>
        </div>

        <div class="mb-3">
            <label for="kelas" class="form-label">Kelas</label>
            <input type="text" name="kelas" class="form-control" id="kelas" placeholder="Masukkan Kelas Siswa" value="<?php echo $kelas; ?>" required>
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea name="alamat" class="form-control" id="alamat" placeholder="Masukkan Alamat Siswa" rows="4" required><?php echo $alamat; ?></textarea>
        </div>


        <div class="mb-3 row mt-4">
            <div class="col">
                <?php if (isset($_GET['ubah'])) { ?>
                    <button type="submit" name="aksi" value="edit" class="btn btn-primary">Simpan Perubahan</button>
                <?php } else { ?>
                    <button type="submit" name="aksi" value="add" class="btn btn-primary">Tambahkan</button>
                <?php } ?>
            </div>
        </div>

        <a class="btn btn-danger" href="dashboard-admin-siswa.php">Batal</a>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
