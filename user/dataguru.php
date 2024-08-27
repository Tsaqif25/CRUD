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

$query = "SELECT * FROM `tabel-guru`";
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
    <link rel="stylesheet" type="text/css" href="../datatables/datatables.css">
    <title>Daftar Guru</title>
    <style>
        .table-container {
            margin: 0 auto; /* Center the table */
            width: 80%; /* Adjust the width as needed */
        }
    </style>
</head>
<body>

<?php include 'navbar.php'; ?> 

    <div class="col-md-10 p-5 pt-10 mt-5 table-container">
        <h3 class="mt-5 ">Data Guru</h3>
        <hr>
       
        <table class="table table-striped table-bordered" id="example">
            <thead>
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">Nama Guru</th>
                    <th scope="col">NIP</th>
                    <th scope="col">Mata Pelajaran</th>
                </tr>
            </thead>
            <tbody>
                <?php  
                $no = 1;
                while($result = mysqli_fetch_assoc($sql)) {
                ?>
                <tr>
                    <th scope="row"><?php echo $no++; ?></th>
                    <td><?php echo $result['nama']; ?></td>
                    <td><?php echo $result['nip']; ?></td>
                    <td><?php echo $result['matapelajaran']; ?></td>
                </tr>
                <?php 
                }
                ?>
            </tbody>
        </table>
    </div>
    
    <?php include 'footer.php'; ?> 
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRmsW7pmo4LXx7EIlQaE2TvjKwIcxkhJdPgy0x5cr" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../datatables/datatables.js"></script>
    <script>
        $(document).ready(function(){
            $('#example').DataTable();
        });
    </script>
</body>
</html>
