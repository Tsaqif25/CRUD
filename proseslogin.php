<?php
session_start();
include 'koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];

$query_sql = "SELECT * FROM registersiswa WHERE email = '$email' AND password = '$password';";
$result = mysqli_query($conn, $query_sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['email'] = $email;

    // Check the level of the user
    if ($row['level'] == 'admin') {
        echo "
        <script>
        alert('Anda login sebagai Admin.');
        window.location.href = 'http://localhost/0.CRUDPHP/dashboard-admin.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Anda login sebagai Member.');
        window.location.href = 'http://localhost/0.CRUDPHP/user/homepage.php';
        </script>
        ";
    }
} else {
    echo "
    <script>
    alert('Silakan cek email dan password Anda lagi.');
    window.location.href = 'formlogin.php';
    </script>
    ";
}
?>
