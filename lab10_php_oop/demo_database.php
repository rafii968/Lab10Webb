<?php
include "database.php";

$db = new Database();

$db->insert("mahasiswa", [
    "nim" => "999000",
    "nama" => "Tes Nama",
    "alamat" => "Tes Alamat"
]);

$data = $db->get("mahasiswa", "nim='999000'");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f3f7;
            padding: 40px;
        }
        .card {
            background: #fff;
            width: 400px;
            padding: 20px;
            border-radius: 12px;
            margin: auto;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        .label { color: #666; }
        .value { font-weight: bold; color: #222; }
    </style>
</head>
<body>

<div class="card">
    <h2>Data Mahasiswa</h2>

    <p><span class="label">NIM:</span> <span class="value"><?= $data['nim'] ?></span></p>
    <p><span class="label">Nama:</span> <span class="value"><?= $data['nama'] ?></span></p>
    <p><span class="label">Alamat:</span> <span class="value"><?= $data['alamat'] ?></span></p>
</div>

</body>
</html>
