<?php
session_start();

$_SESSION["login"] = true;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST["user"];
    $password = $_POST["password"];
    if ($user == "etmin" && $password == "etmin") {
        $_SESSION["user"] = $user;
        header("Location: member.php");
        exit();
    } else {
        $_SESSION["login"] = false;
        unset($_SESSION["user"]);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form action="login.php" method="POST">
        <label for="user"> User : </label>
        <input type="text" name="user">
        <br>
        <label for="pass">Password : </label>
        <input type="password" name="password">
        <br>
        <?php
        if ($_SESSION["login"] == false) {
            echo "<p>Login Gagal</p>";
        }
        ?>
        <button type="submit">Login</button>
    </form>
</body>

</html>