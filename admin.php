<?php
session_start();

if (!isset($_SESSION['id_pengguna'])) {

    header("Location: index.php");
    exit();

}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="alert alert-success">
        <h3>Selamat Datang Admin</h3>
        <p>Anda berjaya log masuk.</p>
        <a href="logout.php" class="btn btn-danger">Log Keluar</a>
    </div>
</div>
</body>
</html>
