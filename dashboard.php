<?php

session_start();

if (!isset($_SESSION['jenis']) || $_SESSION['jenis'] != "staf") {
    header("Location: ../login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Staff Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">

    <div class="card">

        <div class="card-header"><h3>Staf Dashboard</h3></div>

        <div class="card-body">

            <h5>Selamat datang, <?php echo $_SESSION['nama_staf']; ?></h5>

            <p>Anda telah login sebagai Staf.</p>

            <a href="../logout.php" class="btn btn-danger">Logout</a>

        </div>

    </div>

</div>

</body>
</html>