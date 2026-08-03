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
</head>
<body>
<h2>Selamat Datang Admin</h2>
<p>ID Pengguna:
<?php echo $_SESSION['id_pengguna']; ?>
</p>
</body>
</html>