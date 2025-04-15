<?php
session_start();
if (isset($_SESSION["user"])) {
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>

<body>
    <p>Kamu belum login, silakan login dulu.</p>
    <a href="login.php" class="btn">Login page</a>
</body>

</html>