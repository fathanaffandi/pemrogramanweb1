<?php
include("config.php");

$game_id = $_GET['game_id'];

$query = $db->query("SELECT * FROM games WHERE game_id = '$game_id'");
$games = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data game </title>
</head>
<body>
    <h3>Edit Data game</h3>
    <form action="proses_edit.php" method="POST">
        <tr>
            <td>id game</td>
            <input type="INT" name="game_id" value="<?php echo $games['game_id']; ?>">
        </tr>
        <table border="0">       
            <tr>
                <td>nama game</td>
                <td>
                    <input type="VARCHAR" name="nama_game" value="<?php echo $games['nama_game']; ?>">
                </td>
            </tr>
            <tr>
                <td>gendre</td>
                <td>
                    <select name="status" style="width: 100%" required>
                        <option value="" disabled>-- Pilih Salah Satu --</option>
                        <option value="Action" <?php echo ($games['gendre'] == 'Action') ? 'Action' : ''; ?>>Action</option>
                        <option value="Advanture" <?php echo ($games['gendre'] == 'Advanture') ? 'Advanture' : ''; ?>>Advanture</option>
                        <option value="Horor" <?php echo ($games['gendre'] == 'Horor') ? 'Horor' : ''; ?>>horor</option>
                        <option value="Rpg" <?php echo ($games['gendre'] == 'Rpg') ? 'Rpg' : ''; ?>>Rpg</option>
                        <option value="Shooter" <?php echo ($games['gendre'] == 'Shooter') ? 'Shooter' : ''; ?>>Shooter</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>harga</td>
                <td>
                    <input type="INT" name="harga" value="<?php echo $games['harga']; ?>">
                </td>
            </tr>
            </tr>
        </table>
        <button type="submit" name="simpan">Simpan</button>
    </form>
</body>
</html>