<?php
session_start();

if (!isset($_SESSION['id_pengguna']) || $_SESSION['id_pengguna'] != "admin") {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">

    <div class="alert alert-success text-center">

        <h2>Selamat Datang Admin</h2>

        <p>
            Anda berjaya login sebagai Admin.
        </p>

    </div>

</div>

</body>
</html>