<html>
    <head>
        <title>Update PHP</title>
    </head>
    <body>
        <?php
            include ('connect.php');
            $id = $_GET['id'];
            $queri = "SELECT * FROM matakuliah WHERE id_matkul='$id'";
            $lakukan = mysql_query($queri);
            $tampilkan = mysql_fetch_array($lakukan);
        ?>
        <table border="0">
            <form action="update_proses.php" method="post">
                <tr>
                    <td>Id Matkul</td> <td>:</td> <td><input type="text" name="id_matkul" value="<?php echo $tampilkan['id_matkul']; ?>" /></td>
                </tr>
                <tr>
                    <td>Nama matakuliah</td> <td>:</td> <td><input type="text" name="nama_matkul" value="<?php echo $tampilkan['nama_matkul']; ?>" /></td>
                </tr>
                <tr>
                    <td>Nama Dosen</td> <td>:</td> <td><textarea name="dosen_matkul"><?php echo $tampilkan['dosen_matkul']; ?></textarea></td>
                </tr>
                <tr>
                    <td colspan="3" align="center"><input type="submit" value="Update" /></td>
                </tr>
            </form>
        </table>
    </body>
</html>