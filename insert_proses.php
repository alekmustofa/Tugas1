<?php
    include('connect.php');
    
    $id_matkul = $_POST['id_matkul'];
    $nama_matkul = $_POST['nama_matkul'];
    $dosen_matkul = $_POST['dosen_matkul'];
    
    $queri = "INSERT INTO matakuliah VALUES('$id_matkul', '$nama_matkul', '$dosen_matkul')";
    $lakukan = mysql_query ($queri);
    
    if ($lakukan) {
        echo 'Berhasil';
        header ('location:index.php');
    } else {
        echo 'Gagal !!!';
        header ('location:insert.php');
    }
?>