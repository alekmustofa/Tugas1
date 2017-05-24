<html>
    <head>
        <title>Insert PHP</title>
    </head>
    <body>
        <table border="0">
            <form action="insert_proses.php" method="post">
                <tr>
                    <td>ID Matakuliah</td> <td>:</td> <td><input type="text" name="id_matkul" /></td>
                </tr>
                <tr>
                    <td>Matakuliah</td> <td>:</td> <td><input type="text" name="nama_matkul" /></td>
                </tr>
                <tr>
                    <td>Dosen Matakuliah</td> <td>:</td> <td><textarea name="dosen_matkul"></textarea></td>
                </tr>
                <tr>
                    <td colspan="3" align="center"><input type="submit" value="Tambah" /></td>
                </tr>
            </form>
        </table>
    </body>
</html>