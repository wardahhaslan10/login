<?php
session_start();

$id_pengguna = $_POST['id_pengguna'];
$kata_laluan = $_POST['kata_laluan'];


// KEDUA-DUA RUANG KOSONG
if ($id_pengguna == "" && $kata_laluan == "") {
    $_SESSION['ralat'] = "Sila isi ID Pengguna dan Kata Laluan.";
    header("Location: index.php");
    exit();
}

// ID PENGGUNA KOSONG
elseif ($id_pengguna == "") {
    $_SESSION['ralat'] = "Sila isi ID Pengguna.";
    header("Location: index.php");
    exit();
}

// KATA LALUAN KOSONG
elseif ($kata_laluan == "") {
    $_SESSION['ralat'] = "Sila isi Kata Laluan.";
    header("Location: index.php");
    exit();
}

// LOGIN ADMIN
elseif ($id_pengguna == "admin" && $kata_laluan == "admin") {
    $_SESSION['id_pengguna'] = "admin";
    header("Location: admin.php");
    exit();
}

// LOGIN STAF
elseif ($id_pengguna == "staf" && $kata_laluan == "staf") {
    $_SESSION['id_pengguna'] = "staf";
    header("Location: staf.php");
    exit();
}

// ID SALAH
elseif ($id_pengguna != "admin" && $id_pengguna != "staf") {
    $_SESSION['ralat'] = "ID Pengguna salah.";
    header("Location: index.php");
    exit();
}

// PASSWORD SALAH
else {
    $_SESSION['ralat'] = "Kata Laluan salah.";
    header("Location: index.php");
    exit();
}
?>




