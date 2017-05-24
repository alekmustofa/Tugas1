<html>
    <head>
        <title>Select PHP</title>
    </head>
    <body>
        <?php
            include ('connect.php');
            
            $queri = "SELECT * FROM matakuliah";
            $lakukan = mysql_query($queri);
            $tampilkan = mysql_fetch_array($lakukan);
        ?>
        
        <a href="insert.php">Tambah Data</a>
        <table border="1">
            <tr align="center">
                <td>ID Matakuliah</td>
                <td>Matakuliah</td>
                <td>Dosen Matakuliah</td>
                <td align="center">Option</td>
            </tr>
            <?php do { ?>
            <tr>
                <td align="center"><?php echo $tampilkan['id_matkul']; ?> </td>
                <td><?php echo $tampilkan['nama_matkul']; ?> </td>
                <td><?php echo $tampilkan['dosen_matkul']; ?> </td>
                <td><a href="update.php?id=<?php echo $tampilkan['id_matkul']; ?>">Edit</a> | <a href="delete.php?id=<?php echo $tampilkan['id_matkul']; ?>">Hapus</a></td>
            </tr>
            <?php } while ($tampilkan = mysql_fetch_array($lakukan)); ?>
        </table>
    </body>
</html>