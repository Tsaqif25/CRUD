<?php
include('../koneksi.php');
session_start(); 
if (!isset($_SESSION['email'])) {
    echo "
    <script>
        alert('Silakan login dulu');
        document.location.href = '../formlogin.php'; 
    </script>
    ";
    exit; // Pastikan kode berikutnya tidak dieksekusi jika pengguna belum login
}

$query = "
SELECT jadwalbelajar.idjadwal, jadwalbelajar.ruangan, jadwalbelajar.hari, jadwalbelajar.jammulai, jadwalbelajar.jamselesai, `tabel-guru`.nama, `tabel-guru`.matapelajaran
FROM jadwalbelajar
JOIN `tabel-guru` ON jadwalbelajar.idguru = `tabel-guru`.idguru
";
$sql = mysqli_query($conn, $query);

if (!$sql) {
    die("Query Error: " . mysqli_error($conn));
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
    <link rel="stylesheet" type="text/css" href="../datatables/datatables.css">
    <script type="text/javascript" src="../datatables/datatables.js"></script>

    <!-- jQuery dan DataTables -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRmsW7pmo4LXx7EIlQaE2TvjKwIcxkhJdPgy0x5cr" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>Jadwal</title>
    <style>
        .table-container {
            margin: 0 auto; /* Center the table */
            width: 90%; /* Adjust the width as needed */
        }
    </style>
</head>
<body>

<?php include 'navbar.php'; ?> 

    <div class="col-md-10 p-5 pt-10 mt-5 table-container">
        <h3 class="mt-5 ">Jadwal</h3>
        <hr>
       
        <table class="table table-striped table-bordered" id="example">
            <thead>
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">Ruangan</th>
                    <th scope="col">Hari</th>
                    <th scope="col">Jam Mulai</th>
                    <th scope="col">Jam Selesai</th>
                    <th scope="col">Nama Guru</th>
                    <th scope="col">Mata Pelajaran</th>
                </tr>
            </thead>
            <tbody>
                <?php  
                $no = 1;
                while($result = mysqli_fetch_assoc($sql)) {
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $result['ruangan']; ?></td>
                    <td><?php echo $result['hari']; ?></td>
                    <td><?php echo $result['jammulai']; ?></td>
                    <td><?php echo $result['jamselesai']; ?></td>
                    <td><?php echo $result['nama']; ?></td>
                    <td><?php echo $result['matapelajaran']; ?></td>
                </tr>
                <?php 
                }
                ?>
            </tbody>
        </table>
    </div>

    <?php include 'footer.php'; ?> 

    <script>
        $(document).ready(function(){
            $('#example').DataTable();
            $('[data-toggle="tooltip"]').tooltip(); 
        });
    </script>
</body>
</html>
