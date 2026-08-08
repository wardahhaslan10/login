<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<?php
if (isset($_SESSION['ralat'])) {
    echo '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">';
    echo $_SESSION['ralat'];
    echo '<button type="button" class="btn-close" data-bs-dismiss="alert"></button>';
    echo '</div>';

    unset($_SESSION['ralat']);
}
?>

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-5">

            <div class="card shadow">

                <div class="card-header text-center">
                    <h3>Login Pengguna</h3>
                </div>

                <div class="card-body">

                    <form action="login.php" method="POST">

                        <div class="mb-3">
                            <label class="form-label">ID Pengguna</label>

                            <input type="text"
                                   name="id_pengguna"
                                   class="form-control"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Kata Laluan</label>

                            <input type="password"
                                   name="kata_laluan"
                                   class="form-control"
                                   required>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">
                            Log Masuk
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>