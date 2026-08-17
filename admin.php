<?php

session_start();

if (!isset($_SESSION['jenis']) || $_SESSION['jenis'] != "admin") {

    header("Location: ../login.php");
    exit();

}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-primary text-white">

            <h3>Admin Dashboard</h3>

        </div>

        <div class="card-body">

            <h5>
                Welcome, <?php echo $_SESSION['username']; ?>
            </h5>

            <p>
                You have successfully logged in as Admin.
            </p>

            <a
                href="../logout.php"
                class="btn btn-danger"
            >
                Logout
            </a>

        </div>

    </div>

</div>

</body>
</html>