<?php
    include('connect.php');
    
    $id = $_GET['id'];
    $queri = "DELETE FROM matakuliah WHERE id_matkul = '$id'";
    $lakukan = mysql_query($queri);
    
    if ($lakukan) {
        echo 'Berhasil';
        header ('location:index.php');
    } else {
        echo 'Gagal !!';
        header ('location:index.php');
    }
?>