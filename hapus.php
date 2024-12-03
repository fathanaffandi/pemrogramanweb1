<?php
session_start(); // Mulai sesi
include("config.php");

// Periksa apakah ada ID yang dikirim melalui URL
if (isset($_GET['game_id'])) {
    // Validasi dan sanitasi ID
    $id = intval($_GET['game_id']);

    // Periksa apakah data dengan ID tersebut ada
    $check_sql = "SELECT * FROM games WHERE game_id=$id";
    $check_query = mysqli_query($db, $check_sql);
    if (mysqli_num_rows($check_query) > 0) {
        // Lakukan penghapusan data
        $sql = "DELETE FROM games WHERE game_id=$id";
        $query = mysqli_query($db, $sql);

        // Simpan pesan notifikasi dalam sesi berdasarkan hasil query
        if ($query) {
            $_SESSION['notifikasi'] = "Data game berhasil dihapus!";
        } else {
            $_SESSION['notifikasi'] = "Data game gagal dihapus!";
        }
    } else {
        $_SESSION['notifikasi'] = "Data tidak ditemukan!";
    }

    // Alihkan ke halaman index.php
    header('Location: index.php');
    exit;
} else {
    // Jika akses langsung tanpa ID, tampilkan pesan error
    die("Akses ditolak...");
}
?>
