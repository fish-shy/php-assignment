<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
</head>

<?php

session_start();

$result = "-";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $bil1 = $_POST["bil1"];
    $bil2 = $_POST["bil2"];
    if (is_numeric($bil1) && is_numeric($bil2)) {
        $result = $bil1 + $bil2;
        $_SESSION["result"] = $result;
    } else {
        $result = "INVALID";
    }
}
?>

<body>
    <form action="kalkulator.php" method="POST">
        <label for="bil1">Bilangan 1 : </label>
        <input type="text" name="bil1">
        <br>
        <label for="bil2">Bilangan 2 : </label>
        <input type="text" name="bil2">
        <br>
        <label>Hasil : </label>
        <input type="text" name="result" value="<?= htmlspecialchars($result) ?>" readonly>
        <br>
        <button type="submit">Tambah</button>
    </form>
</body>

</html>