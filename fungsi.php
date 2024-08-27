<?php
include 'koneksi.php' ;
function tambah_data ($data){  
    include 'koneksi.php' ;
    // $idsiswa = $data['id_siswa'];
    $nisn = $data['nisn'];
    $nama_siswa = $data['nama_siswa'];
    $jenis_kelamin = $data['jenis_kelamin'];
    $alamat = $data['alamat'];
    $query = "INSERT INTO tb_siswa (nisn, nama_siswa, jenis_kelamin, alamat) 
          VALUES ('$nisn', '$nama_siswa', '$jenis_kelamin', '$alamat')";

    $sql = mysqli_query( $GLOBALS['conn'],$query);
    if ($sql) {
        echo "Data berhasil ditambahkan.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
    return true ;
}

function edit_data ($data) {
    $idsiswa = $data['id_siswa'];
    $nisn = $data['nisn'];
    $nama_siswa = $data['nama_siswa'];
    $jenis_kelamin = $data['jenis_kelamin'];
    $alamat = $data['alamat'];
    $query = "UPDATE tb_siswa SET nisn='$nisn', nama_siswa='$nama_siswa', jenis_kelamin='$jenis_kelamin', alamat='$alamat'WHERE id_siswa='$idsiswa'";
    $sql = mysqli_query($GLOBALS['conn'],$query);
    if ($sql) {
        echo "Data Berhasil Diedit" ;
    }
    else {
        echo "Erorr" ;
    }
    return true ;
}

function hapus_data($data) {
    $id_siswa = $data['hapus'];
    $query = "DELETE FROM tb_siswa WHERE id_siswa ='$id_siswa';" ;
    $sql = mysqli_query($GLOBALS['conn'],$query);

    if($sql) {
        echo "Berhasil Dihapus" ;
    }
    else {
        echo "erorr" ;
    }
    return true ;
}

?>
