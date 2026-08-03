<?php
session_start();

$ralat = "";
if (isset($_SESSION['ralat'])) {
    $ralat = $_SESSION['ralat'];
    unset($_SESSION['ralat']);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="col-md-4 mx-auto border p-4 rounded">
            <h3 class="text-center mb-4">Log Masuk</h3>
            <form action="login.php" method="POST">
                <div class="mb-3">
                    <label class="form-label">ID Pengguna</label>
                    <input
                        type="text"
                        name="id_pengguna"
                        class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Kata Laluan</label>
                    <input
                        type="password"
                        name="kata_laluan"
                        class="form-control">
                </div>
                <p class="text-danger">
                    <?= $ralat ?></p>
                <button
                    type="submit"
                    class="btn btn-primary w-100">
                    Log Masuk
                </button>
            </form>
        </div>
    </div>
</body>
</html>