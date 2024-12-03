<?php
include("config.php");
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data hotel tanjung pinang</title>
</head>
<body>
    <h3>Tambah Data GAME</h3>
    <form action="proses_tambah.php" method="POST">
        <table border="0">
            <tr>
                <td>id games</td>
                <td><input type="id_game" name="game_id" required></td>
            </tr>
            <tr>
                <td>nama game</td>
                <td><input type="nama_game" name="nama_game" required></td>
            </tr>
            <tr>
                <td> gendre</td>
                <td>
                    <select name="gendre" style="width: 100%" required>
                        <option value="" selected disabled>-- PILIH GENDRE --</option>
                        <option value="Action">Action</option>
                        <option value="advandture">Advanture</option>
                        <option value="Horor">Horor</option>
                        <option value="Rpg">Rpg</option>
                        <option value="Shooter">Shooter</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>harga</td>
                <td><input type="INT" name="harga" style="width: 100%"></td>
            </tr>
        </table>
        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
    </form>
</body>
</html>