<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
 <h2>Login Pengguna</h2>

    <form action="login.php" method="POST">

        <label for="id_pengguna">ID Pengguna:</label>
        <input type="text" id="id_pengguna" name="id_pengguna">

        <br><br>

        <label for="kata_laluan">Kata Laluan:</label>
        <input type="password" id="kata_laluan" name="kata_laluan">

        <br><br>

        <button type="submit">Log Masuk</button>

    </form>

</body>
</html>