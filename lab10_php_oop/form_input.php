<?php
include "form.php";

$form = new Form("", "Kirim Data");
$form->addField("nim", "NIM");
$form->addField("nama", "Nama");
$form->addField("alamat", "Alamat");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Mahasiswa</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #eef2f7;
            padding: 40px;
        }
        .container {
            background: white;
            width: 400px;
            padding: 25px;
            border-radius: 12px;
            margin: auto;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        h3 {
            text-align: center;
            color: #444;
            margin-bottom: 20px;
        }
        table input[type=text] {
            width: 100%;
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
        }
        input[type=submit] {
            background: #0d6efd;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            margin-top: 15px;
            width: 100%;
        }
        input[type=submit]:hover {
            background: #0a58ca;
        }
    </style>
</head>
<body>

<div class="container">
    <h3>Silahkan isi form berikut:</h3>
    <?php
        $form->displayForm();
    ?>
</div>

</body>
</html>
