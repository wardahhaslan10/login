<?php
session_start();

$id_pengguna = $_POST['id_pengguna'];
$kata_laluan = $_POST['kata_laluan'];
if ($id_pengguna == "admin" && $kata_laluan == "admin") {
    $_SESSION['id_pengguna'] = $id_pengguna;
    header("Location: admin.php");
    exit();
} else {
    $_SESSION['ralat'] = "ID Pengguna atau Kata Laluan salah.";
    header("Location: index.php");
    exit();
}
?>
