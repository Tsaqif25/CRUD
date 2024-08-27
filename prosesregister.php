<?php
require('koneksi.php');
session_start();

$email = $_POST['email'];
$password = $_POST['password'];
$idregister = $_POST['idregister'];
$idsiswa = $_POST['idsiswa'];
$level = $_POST['level']; // Added level input

// Check if idsiswa exists in the tabel-siswa
$checkIdsiswaInTabelSiswa = "SELECT * FROM `tabel-siswa` WHERE idsiswa = '$idsiswa';";
$resultInTabelSiswa = mysqli_query($conn, $checkIdsiswaInTabelSiswa);

if (mysqli_num_rows($resultInTabelSiswa) == 0) {
    echo "
    <script>
    alert('ID Siswa tidak ditemukan dalam database. Silakan masukkan ID Siswa yang valid.');
    window.history.back(); // Kembali ke halaman sebelumnya
    </script>
    ";
    exit();
}

// Check if idsiswa is already registered in registersiswa
$checkIdsiswaInRegisterSiswa = "SELECT * FROM `registersiswa` WHERE idsiswa = '$idsiswa';";
$resultInRegisterSiswa = mysqli_query($conn, $checkIdsiswaInRegisterSiswa);

if (mysqli_num_rows($resultInRegisterSiswa) > 0) {
    echo "
    <script>
    alert('ID Siswa sudah terdaftar. Silakan gunakan ID Siswa lain.');
    window.history.back(); // Kembali ke halaman sebelumnya
    </script>
    ";
    exit();
}

// Check if email is already registered in registersiswa
$checkEmail = "SELECT * FROM `registersiswa` WHERE email = '$email';";
$resultEmail = mysqli_query($conn, $checkEmail);

if (mysqli_num_rows($resultEmail) > 0) {
    echo "
    <script>
    alert('Email sudah terdaftar. Silakan gunakan email lain.');
    window.history.back(); // Kembali ke halaman sebelumnya
    </script>
    ";
    exit();
}

// If everything is clear, insert the new registration
$sql = "INSERT INTO `registersiswa` (email, password, idregister, idsiswa, level) VALUES ('$email', '$password', '$idregister', '$idsiswa', '$level')";

if (mysqli_query($conn, $sql)) {
    // Check the level and redirect accordingly
    if ($level == 'admin') {
        echo "
        <script>
        alert('Akun berhasil didaftarkan sebagai Admin');
    
         window.location.href = 'http://localhost/0.CRUDPHP/dashboard-akun.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Akun berhasil didaftarkan sebagai User');
        window.location.href = 'http://localhost/0.CRUDPHP/dashboard-akun.php';
        </script>
        ";
    }
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$conn->close();
?>
