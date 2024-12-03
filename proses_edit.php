<?php
session_start(); 
include("config.php");


if (isset($_POST['simpan'])) {
    
    $game_id = $_POST['game_id'];
    $nama_game = $_POST['nama_game'];
    $gendre = $_POST['status'];
    $harga = $_POST['harga'];

    
    $sql = "UPDATE games SET
            game_id='$game_id',
            nama_game='$nama_game',
            gendre='$gendre',
            harga='$harga'
            WHERE game_id=$game_id";

    $query = mysqli_query($db, $sql);
   
    if ($query) {
        $_SESSION['notifikasi'] = "Data game berhasil diperbarui!";
    } else {
        $_SESSION['notifikasi'] = "Data game gagal diperbarui!";
    }

 
    header('Location: index.php');
} else {
  
    die("Akses ditolak...");
}
?>