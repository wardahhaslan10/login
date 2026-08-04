<?php
session_start();

if (!isset($_SESSION['id_pengguna'])) {

    header("Location: index.php");
    exit();

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff</title>
</head>
<body>

     <h2>Selamat Datang Staf</h2>

    <p>
        ID Pengguna:
        <?php echo $_SESSION['id_pengguna']; ?>
    </p>    
</body>
</html>