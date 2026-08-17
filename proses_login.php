<?php

session_start();

include "db.php";

$username = $_POST['username'];
$password = $_POST['password'];

// Semak table admin dahulu
$sql_admin = "SELECT * FROM admin WHERE username = '$username'";

$result_admin = mysqli_query($conn, $sql_admin);

if (mysqli_num_rows($result_admin) > 0) {

    $admin = mysqli_fetch_assoc($result_admin);

    if ($password == $admin['password']) {

        $_SESSION['id'] = $admin['id'];
        $_SESSION['username'] = $admin['username'];
        $_SESSION['jenis'] = "admin";

        header("Location: admin/dashboard.php");
        exit();

    } else {

        $_SESSION['ralat'] = "Username atau password salah.";

        header("Location: login.php");
        exit();
    }
}


// Kalau bukan admin, semak table staf
$sql_staf = "SELECT * FROM staf WHERE username = '$username'";

$result_staf = mysqli_query($conn, $sql_staf);

if (mysqli_num_rows($result_staf) > 0) {

    $staf = mysqli_fetch_assoc($result_staf);

    if ($password == $staf['password']) {

        $_SESSION['id'] = $staf['id'];
        $_SESSION['username'] = $staf['username'];
        $_SESSION['nama_staf'] = $staf['nama_staf'];
        $_SESSION['jenis'] = "staf";

        header("Location: staf/dashboard.php");
        exit();

    } else {

        $_SESSION['ralat'] = "Username atau password salah.";

        header("Location: login.php");
        exit();
    }
}


// Username tak jumpa dalam kedua-dua table
$_SESSION['ralat'] = "Username atau password salah.";

header("Location: login.php");
exit();

?>





















