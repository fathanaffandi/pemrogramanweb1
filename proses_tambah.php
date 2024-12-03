    <?php
session_start(); 
include("config.php");

if (isset($_POST['simpan'])) {
    $game_id = $_POST['game_id'];
    $nama_game = $_POST['nama_game'];
    $gendre = $_POST['gendre'];
    $harga = $_POST['harga'];

    $sql = "INSERT INTO games
            (game_id, nama_game, gendre, harga)
            VALUES ('$game_id', '$nama_game', '$gendre','$harga')";

    $query = mysqli_query($db, $sql);

    if ($query) {
        $_SESSION['notifikasi'] = "Data game berhasil ditambahkan!";
    } else {
        $_SESSION['notifikasi'] = "Data gagal game ditambahkan!";
    }

    header('Location: index.php');
} else {
    die("akses berhasil ditolak...");
}
?>