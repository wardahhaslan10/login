<?php
session_start();

$id_pengguna = $_POST['id_pengguna'];
$kata_laluan = $_POST['kata_laluan'];

if ($id_pengguna == "admin" && $kata_laluan == "admin") {
    $_SESSION['id_pengguna'] = $id_pengguna;
    header("Location: admin.php");
    exit();

} elseif ($id_pengguna == "staf" && $kata_laluan == "staf") {

    $_SESSION['id_pengguna'] = $id_pengguna;
    header("Location: staf.php");
    exit();

} elseif ($id_pengguna != "admin" && $id_pengguna != "staf") {

    $_SESSION['ralat'] = "ID Pengguna salah.";
    header("Location: index.php");
    exit();

} else {
    $_SESSION['ralat'] = "Kata Laluan salah.";
    header("Location: index.php");
    exit();
}
?>