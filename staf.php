<<<<<<< HEAD
<?php
session_start();

if (!isset($_SESSION['id_pengguna']) || $_SESSION['id_pengguna'] != "staf") {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staf</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">

    <div class="alert alert-info text-center">

        <h2>Selamat Datang Staf</h2>

        <p>
            Anda berjaya login sebagai Staf.
        </p>

    </div>

</div>

</body>
=======
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

     <h2>Selamat Datang Staf</h2>
    <p>
        ID Pengguna:
        <?php echo $_SESSION['id_pengguna']; ?>
    </p>    
</body>
>>>>>>> 69174441c72b3d861e157e454a150dd934c13b86
</html>