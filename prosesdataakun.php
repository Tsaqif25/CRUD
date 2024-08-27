<?php
session_start();
include 'koneksi.php';

if(isset($_POST['aksi'])){
    if($_POST['aksi'] == 'add'){
        //keloladataguru
        $idregister = $_POST['idregister'];
        // $nama = $_POST['nama'];
        $email= $_POST['email'];
        $password = $_POST['password'];
        // phpmyadin
        $query = "INSERT INTO `registersiswa` VALUES ( '$email','$password','$idregister')";
        $sql = mysqli_query($conn, $query);

        if ($sql){
            header("location:dashboard-akun.php");
        } else {
            echo $query;
        }
    } else if ($_POST['aksi'] == 'edit') {
        echo "edit data";
        $idregister= $_POST['idregister'];
        // $nama = $_POST['nama'];
        $email= $_POST['email'];
        $password = $_POST['password'];
       // Assume this is the unique identifier for the record
    
        // Update query using id_guru as the WHERE clause
        $query = "UPDATE `registersiswa` SET  email = '$email', password = '$password' WHERE idregister= '$idregister';";
        $sql = mysqli_query($conn, $query);
    
        if ($sql) {
         
            header('Location: dashboard-akun.php');
            $_SESSION['message'] = 'Data berhasil diedit!';
            exit();
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }
    
         
    }


if(isset($_GET['hapus'])){  // Corrected the missing closing parenthesis
    $idregister= $_GET['hapus'];  // Assuming you want to get the 'email' from the URL
    $query = "DELETE FROM `registersiswa` WHERE idregister= '$idregister';";  // Added backticks for the table name
    $sql = mysqli_query($conn, $query);
    if($sql){
        header('location:dashboard-akun.php');
    } else {
        echo $query;
    }
}

?>
