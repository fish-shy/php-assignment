<?php
session_start();

$logged_out = false;

if (isset($_SESSION["user"])) {
    session_unset();
    session_destroy();
    $logged_out = true;
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
    <?php if ($logged_out): ?>
        <h2>You have been logged out.</h2>
    <?php else: ?>
        <h2>You are not logged in.</h2>
    <?php endif; ?>
    <a href="login.php" class="btn">Go to Login Page</a>
</body>
</html>
<style>
        body {
            background: #111;
            color: #fff;
            font-family: 'Roboto', sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 28px;
            background: #e50914;
            color: #fff;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            font-size: 1rem;
            font-weight: 500;
            transition: background 0.2s;
        }
        .btn:hover {
            background: #c40812;
        }
</style>