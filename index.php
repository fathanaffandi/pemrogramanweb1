<?php
include("config.php");
session_start(); 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Data game</title>
        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
                padding: 10px;
            }
        </style>
    </head>
    <body>
        <h2>Data Siswa</h2>
        <?php if (isset($_SESSION['notifikasi'])): ?>
        <p><?php echo $_SESSION['notifikasi']; ?></p>
        <?php unset($_SESSION['notifikasi']); ?>
        <?php endif; ?>
        <table>
            <thead>
                <tr align="center">
                  <th>#</th>  
                  <th>id game</th>  
                  <th>nama</th>  
                  <th>gendre</th>  
                  <th>harga</th>  
                  <th><a href="tambah.php">Tambah Data</a></th>
                </tr>
            </thead>
    <tbody>
    <?php
    $no = 1; 
    $query = $db->query("Select * FROM games");
    while ($games = $query->fetch_assoc()){
    ?>
    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $games['game_id'] ?></td>
        <td><?php echo $games['nama_game'] ?></td>
        <td><?php echo $games['gendre'] ?></td>
        <td><?php echo $games['harga'] ?></td>
        <td align="center">
            <a href="hapus.php?game_id=<?php echo $games['game_id']?>">hapus </a>
           <a href="edit.php?game_id=<?php echo $games['game_id']?>">Edit </a>
        </td>
    </tr>
    <?php
    } 
    ?>
    </tbody>
    </table>
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
    </body>
</html>