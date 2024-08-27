<?php
include 'koneksi.php';
session_start();
$_SESSION['eksekusi'] = 'halo semua' ;
echo $_SESSION['eksekusi'];
// Menjalankan query dan menyimpan hasilnya
$query = 'SELECT * FROM tb_siswa;';
$sql = mysqli_query($conn, $query);
?>

<script>
   
    new DataTable('#example');
</script>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="datatables/datatables.css">
    <script type="text" src="datatables/datatables.js"></script>
</head>
<script>
new DataTable('#example');
</script>
<body>
<nav class="navbar bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="#">
            CRUD BS-5
        </a>
    </div>
</nav>

<div class="container-fluid">
    <h1 class="mt-5">Data Siswa</h1>
    <figure>
        <blockquote class="blockquote">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat explicabo, et animi dicta dolor suscipit ducimus ex cumque? Voluptatum aut iste quidem illum facilis recusandae porro nulla, asperiores earum? Maiores?</p>
        </blockquote>
        <figcaption class="blockquote-footer">
            Someone famous in <cite title="Source Title">Source Title</cite>
        </figcaption>
    </figure>
    <a type="button" href="kelola.php" class="btn btn-primary">Tambah Data</a>
    <?php
        if(isset($_SESSION['eksekusi']))
    ?>

    <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>
<?php
echo $_SESSION['eksekusi'];
?>
    </strong> 
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <div class="table-responsive">
        <table class="table align-middle table-hover" id="example">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>NISN</th>
                    <th>Nama Siswa</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                while ($result = mysqli_fetch_assoc($sql)) {
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $result['nisn']; ?></td>
                    <td><?php echo $result['nama_siswa']; ?></td>
                    <td><?php echo $result['jenis_kelamin']; ?></td>
                   
                    <td><?php echo $result['alamat']; ?></td>
                    <td>
                        <a type="button" href="kelola.php?ubah=<?php echo $result['id_siswa']; ?>" class="btn btn-success btn-sm">Edit</a>
                        <a type="button" href="proses.php?hapus=<?php echo $result['id_siswa']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('hapus data ?')">Hapus</a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
