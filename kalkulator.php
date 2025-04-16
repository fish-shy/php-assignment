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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="calc-container">
        <h2 class="title">Kalkulator Penjumlahan</h2>
        <form action="kalkulator.php" method="POST">
            <label for="bil1">Bilangan 1</label>
            <input type="text" name="bil1" id="bil1" autocomplete="off">
            <label for="bil2">Bilangan 2</label>
            <input type="text" name="bil2" id="bil2" autocomplete="off">
            <label>Hasil</label>
            <input type="text" name="result" value="<?= htmlspecialchars($result) ?>" readonly>
            <button type="submit">Tambah</button>
        </form>
    </div>
</body>

</html>
<style>
    body {
        min-height: 100vh;
        margin: 0;
        background: url('https://media1.tenor.com/m/RImUVQLi-ugAAAAd/alya-hides-her-feelings-in-russian.gif') no-repeat center center fixed;
        background-size: cover;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'Poppins', sans-serif;
    }

    .calc-container {
        background: rgba(255, 255, 255, 0.92);
        border-radius: 18px;
        padding: 32px;
        max-width: 350px;
        width: 100%;
        text-align: center;
        position: relative;
    }

    h2 { 
        color: #6366f1;   
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 24px;
    }

    form label {
        display: block;
        text-align: left;
        margin-bottom: 6px;
        color: #6366f1;
        font-weight: 500;
    }

    form input[type="text"] {
        width: 93%;
        padding: 10px 12px;
        margin-bottom: 18px;
        border: 1.5px solid #c7d2fe;
        border-radius: 6px;
        font-size: 1rem;
        background: #f1f5f9;
        color: #22223b;
        transition: border 0.2s;
    }

    form input[type="text"]:focus {
        border: 1.5px solid #6366f1;
        outline: none;
    }

    form input[readonly] {
        background: #e0e7ff;
        color: #6366f1;
        font-weight: 600;
    }

    button {
        width: 100%;
        padding: 12px 0;
        background: linear-gradient(90deg, #6366f1 0%, #22d3ee 100%);
        color: #fff;
        border: none;
        border-radius: 6px;
        font-size: 1rem;
        font-weight: 600;
        cursor: pointer;
        box-shadow: 0 2px 8px rgba(99, 102, 241, 0.08);
    }

    button:hover {
        background: linear-gradient(90deg, #4338ca 0%, #0891b2 100%);
        transform: translateY(-2px) scale(1.03);
    }

    @media (max-width: 500px) {
        .calc-container {
            padding: 24px 8px 18px 8px;
        }
    }
</style>