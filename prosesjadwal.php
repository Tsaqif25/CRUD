<?php
include 'koneksi.php';

if(isset($_POST['aksi'])){
    // Ambil data dari POST
    $idjadwal = $_POST['idjadwal'];
    $ruangan = $_POST['ruangan'];
    $hari = $_POST['hari'];
    $jammulai = $_POST['jammulai'];
    $jamselesai = $_POST['jamselesai'];
    $idguru = $_POST['idguru'];

    // Periksa apakah idguru ada di tabel-guru
    $queryCheckGuru = "SELECT * FROM `tabel-guru` WHERE idguru = '$idguru'";
    $sqlCheckGuru = mysqli_query($conn, $queryCheckGuru);

    if(mysqli_num_rows($sqlCheckGuru) > 0) {
        if($_POST['aksi'] == 'add'){
            // Periksa apakah idjadwal sudah ada di tabel jadwalbelajar
            $queryCheckIdjadwal = "SELECT * FROM `jadwalbelajar` WHERE idjadwal = '$idjadwal'";
            $sqlCheckIdjadwal = mysqli_query($conn, $queryCheckIdjadwal);

            if(mysqli_num_rows($sqlCheckIdjadwal) > 0) {
                // Jika idjadwal sudah ada, tampilkan pesan kesalahan
                echo "<script>
                        alert('Maaf, ID Jadwal sudah ada. Silakan masukkan ID Jadwal yang berbeda.');
                        window.history.back();
                      </script>";
            } else {
                // Jika idjadwal belum ada, lanjutkan dengan proses INSERT
                $query = "INSERT INTO `jadwalbelajar` (idjadwal, ruangan, hari, jammulai, jamselesai, idguru) VALUES ('$idjadwal', '$ruangan', '$hari', '$jammulai', '$jamselesai', '$idguru')";
                $sql = mysqli_query($conn, $query);

                if($sql){
                    // Pesan keberhasilan setelah data berhasil ditambahkan
                    echo "<script>
                            alert('Data berhasil ditambahkan.');
                            window.location.href = 'dashboard-jadwal.php';
                          </script>";
                } else {
                    echo "Error: " . mysqli_error($conn);
                }
            }
        } else if ($_POST['aksi'] == 'edit') {
            // Proses UPDATE
            $query = "UPDATE `jadwalbelajar` SET ruangan = '$ruangan', hari = '$hari', jammulai = '$jammulai', jamselesai = '$jamselesai', idguru = '$idguru' WHERE idjadwal = '$idjadwal'";
            $sql = mysqli_query($conn, $query);

            if($sql){
                echo "<script>
                alert('Data berhasil diedit.');
                window.location.href = 'dashboard-jadwal.php';
              </script>";
             
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        }
    } else {
        // Jika idguru tidak ditemukan, tampilkan pesan kesalahan
        echo "<script>
                alert('Maaf, ID Guru tidak ditemukan. Silakan masukkan ID Guru yang valid.');
                window.history.back();
              </script>";
    }
}

if(isset($_GET['hapus'])){
    $idjadwal = $_GET['hapus'];
    $query = "DELETE FROM `jadwalbelajar` WHERE idjadwal = '$idjadwal'";
    $sql = mysqli_query($conn, $query);
    if($sql){
        header("location:dashboard-jadwal.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
