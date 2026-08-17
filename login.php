<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">

        <div class="row justify-content-center">

            <div class="col-md-5">

                <div class="card">

                    <div class="card-header text-center">
                        <h3>Login</h3>
                    </div>

                    <div class="card-body">

                        <form action="proses_login.php" method="POST">

                            <div class="mb-3">
                                <label class="form-label">Username</label>

                                <input
                                    type="text"
                                    name="username"
                                    class="form-control"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Password</label>

                                <input
                                    type="password"
                                    name="password"
                                    class="form-control"
                                    required>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">
                                Login
                            </button>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</body>

</html>
=======
<?php
session_start();

$id_pengguna = $_POST['id_pengguna'];
$kata_laluan = $_POST['kata_laluan'];


// KEDUA-DUA RUANG KOSONG
if ($id_pengguna == "" && $kata_laluan == "") {
    $_SESSION['ralat'] = "Sila isi ID Pengguna dan Kata Laluan.";
    header("Location: index.php");
    exit();
}

// ID PENGGUNA KOSONG
elseif ($id_pengguna == "") {
    $_SESSION['ralat'] = "Sila isi ID Pengguna.";
    header("Location: index.php");
    exit();
}

// KATA LALUAN KOSONG
elseif ($kata_laluan == "") {
    $_SESSION['ralat'] = "Sila isi Kata Laluan.";
    header("Location: index.php");
    exit();
}

// LOGIN ADMIN
elseif ($id_pengguna == "admin" && $kata_laluan == "admin") {
    $_SESSION['id_pengguna'] = "admin";
    header("Location: admin.php");
    exit();
}

// LOGIN STAF
elseif ($id_pengguna == "staf" && $kata_laluan == "staf") {
    $_SESSION['id_pengguna'] = "staf";
    header("Location: staf.php");
    exit();
}

// ID SALAH
elseif ($id_pengguna != "admin" && $id_pengguna != "staf") {
    $_SESSION['ralat'] = "ID Pengguna salah.";
    header("Location: index.php");
    exit();
}

// PASSWORD SALAH
else {
    $_SESSION['ralat'] = "Kata Laluan salah.";
    header("Location: index.php");
    exit();
}
?>




>>>>>>> f5fa95cb452d963ad2d0651452766b52825cf81f
