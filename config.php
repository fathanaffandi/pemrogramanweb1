<?php
$server = "localhost";
$user = "root";
$password ="";
$games = "game_platform";
$db = mysqli_connect($server, $user, $password, $games);
if (!$db){
    die("gagal: " . mysqli_connect_error());
}
?>
