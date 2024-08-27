<?php



include 'fungsi.php' ;
session_start();
if(isset($_POST['aksi'])) {
    if($_POST['aksi'] == 'add') {
        echo "tambah data <a href='index.php'>Kembali ke Index</a><br>";
     $berhasil =  tambah_data($_POST);
        if($berhasil) {
            $_SESSION['eksekusi'] = 'Data Berhasil Ditambahkan' ;
            header('location:index.php');
        }
        else {
            echo $berhasil ;
        }
    }
    else if($_POST['aksi'] == 'edit') {
        $berhasil = edit_data($_POST);
        if($berhasil) {
            header('location:index.php');
        }
        else {
            echo $berhasil ;
        }     
    }
}
if(isset($_GET['hapus'])){
    $berhasil = hapus_data($_GET);
    if($berhasil ) {
        header('location:index.php');
    }
    else {
        echo $berhasil  ;
    }
}
?>
