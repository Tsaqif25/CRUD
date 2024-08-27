<?php
include 'koneksi.php';

if (isset($_POST['aksi'])) {
    if ($_POST['aksi'] == 'add') {
        //keloladataguru
        $idguru = $_POST['idguru'];
        $namaguru = $_POST['namaguru'];
        $nip = $_POST['nip'];
        $matapelajaran = $_POST['matapelajaran'];

        // Insert query
        $query = "INSERT INTO `tabel-guru` VALUES ('$namaguru','$nip','$matapelajaran','$idguru')";
        $sql = mysqli_query($conn, $query);

        if ($sql) {
            echo "<script>
                    alert('Data berhasil ditambahkan!');
                    window.location.href = 'dashboard-admin-guru.php';
                  </script>";
        } else {
            echo $query;
        }
    } elseif ($_POST['aksi'] == 'edit') {
        $idguru = $_POST['idguru'];
        $namaguru = $_POST['namaguru'];
        $nip = $_POST['nip'];
        $matapelajaran = $_POST['matapelajaran'];

        // Update query
        $query = "UPDATE `tabel-guru` SET nama = '$namaguru', nip = '$nip', matapelajaran = '$matapelajaran' WHERE idguru = '$idguru';";
        $sql = mysqli_query($conn, $query);

        if ($sql) {
            echo "<script>
                    alert('Data berhasil diedit!');
                    window.location.href = 'dashboard-admin-guru.php';
                  </script>";
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }
}

if (isset($_GET['hapus'])) {
    $idguru = $_GET['hapus'];

    // Delete query
    $query = "DELETE FROM `tabel-guru` WHERE idguru = '$idguru';";
    $sql = mysqli_query($conn, $query);

    if ($sql) {
        echo "<script>
                alert('Data berhasil dihapus!');
                window.location.href = 'dashboard-admin-guru.php';
              </script>";
    } else {
        echo $query;
    }
}
?>
