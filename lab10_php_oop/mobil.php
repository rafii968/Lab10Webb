<?php
class Mobil 
{
    private $warna;
    private $merk;
    private $harga;

    public function __construct()
    {
        $this->warna = "Biru";
        $this->merk = "BMW";
        $this->harga = "10000000";
    }

    public function gantiWarna($warnaBaru)
    {
        $this->warna = $warnaBaru;
    }

    public function tampilWarna()
    {
        return $this->warna;
    }
}

$a = new Mobil();
$b = new Mobil();

$warnaAwalA = $a->tampilWarna();
$a->gantiWarna("Merah");
$warnaAkhirA = $a->tampilWarna();

$b->gantiWarna("Hijau");
$warnaB = $b->tampilWarna();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Output Mobil OOP</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            padding: 30px;
        }
        .card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            width: 400px;
            margin-bottom: 20px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        .title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 15px;
            color: #444;
        }
        .line {
            margin: 5px 0;
            color: #333;
        }
    </style>
</head>
<body>

<div class="card">
    <div class="title">Mobil Pertama</div>
    <div class="line">Warna awal : <?= $warnaAwalA ?></div>
    <div class="line">Warna setelah diganti : <?= $warnaAkhirA ?></div>
</div>

<div class="card">
    <div class="title">Mobil Kedua</div>
    <div class="line">Warna mobil : <?= $warnaB ?></div>
</div>

</body>
</html>
