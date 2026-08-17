<?php
<<<<<<< HEAD

header("Location: login.php");
exit();

?>
=======
session_start();

$ralat = "";

if (isset($_SESSION['ralat'])) {
    $ralat = $_SESSION['ralat'];
    unset($_SESSION['ralat']);
}
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
                                <label>ID Pengguna</label>
                                <input type="text"
                                    name="id_pengguna"
                                    class="form-control">

                            </div>
                            <div class="mb-3">
                                <label>Kata Laluan</label>
                                <input type="password"
                                    name="kata_laluan"
                                    class="form-control">
                            </div>
                            <button type="submit"
                                class="btn btn-primary w-100">
                                Log Masuk
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MESSAGE POPUP -->
    <div class="modal fade" id="modalRalat">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title">
                        Login Gagal
                    </h5>
                    <button type="button"
                        class="btn-close btn-close-white"
                        data-bs-dismiss="modal">
                    </button>
                </div>
                <div class="modal-body">
                    <p class="text-center fs-5">
                        ❌ <?php echo $ralat; ?>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal">
                        Tutup
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <?php if ($ralat != "") { ?>
        <script>
            window.onload = function() {
                var popup = new bootstrap.Modal(
                    document.getElementById('modalRalat')
                );
                popup.show();
            };
        </script>
    <?php } ?>
</body>

</html>
>>>>>>> f5fa95cb452d963ad2d0651452766b52825cf81f
