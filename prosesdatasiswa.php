<?php
session_start();
include 'koneksi.php';

if (isset($_POST['aksi'])) {
    $idsiswa = $_POST['idsiswa'];
    $nis = $_POST['nis'];
    $namasiswa = $_POST['namasiswa'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];

    if ($_POST['aksi'] == 'add') {
        $query = "INSERT INTO `tabel-siswa` (idsiswa, nis, namasiswa, kelas, alamat) VALUES ('$idsiswa', '$nis', '$namasiswa', '$kelas', '$alamat')";
        $sql = mysqli_query($conn, $query);

        if ($sql) {
            echo "<script>
                    alert('Data berhasil ditambahkan!');
                    window.location.href='dashboard-admin-siswa.php';
                  </script>";
        } else {
            echo "Error inserting record: " . mysqli_error($conn);
        }
    } elseif ($_POST['aksi'] == 'edit') {
        $query = "UPDATE `tabel-siswa` SET nis = '$nis', namasiswa = '$namasiswa', kelas = '$kelas', alamat = '$alamat' WHERE idsiswa = '$idsiswa'";
        $sql = mysqli_query($conn, $query);

        if ($sql) {
            echo "<script>
                    alert('Data berhasil diedit!');
                    window.location.href='dashboard-admin-siswa.php';
                  </script>";
            exit();
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }
}

if (isset($_GET['hapus'])) {
    $idsiswa = $_GET['hapus'];
    $query = "DELETE FROM `tabel-siswa` WHERE idsiswa = '$idsiswa'";
    $sql = mysqli_query($conn, $query);

    if ($sql) {
        echo "<script>
                alert('Data berhasil dihapus!');
                window.location.href='dashboard-admin-siswa.php';
              </script>";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
?>
