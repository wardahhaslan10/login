<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "sistem_login"
);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

?>




