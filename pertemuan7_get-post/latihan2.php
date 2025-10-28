<?php
// cek apakah tidak ada data di $_GET
if (
    !isset($_GET["gambar"]) ||
    !isset($_GET["nama"]) ||
    !isset($_GET["harga"]) ||
    !isset($_GET["storage"]) ||
    !isset($_GET["kamera"])
) {
    // redirect
    // cara untuk mengembalikan ke url latihan1.php
    // karena kalau menuju lokasi url latihan2.php tanpa ada proses GET atau mengambil data dari latihan1.php hasil nya akan error
    header("Location: latihan1.php");
    exit; //-> berfungsi supaya script di bawah nya tidak di eksekusi
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>Detail Handphone</title>
</head>

<body>
    <!-- penggunaan $_GET (URL) yang mengambil data dari latihan2.php -->
    <ul>
        <li><img src="img/<?= $_GET["gambar"]; ?>" alt=""></li>
        <li>Nama : <?= $_GET["nama"]; ?></li>
        <li>Harga : <?= $_GET["harga"]; ?></li>
        <li>Storage : <?= $_GET["storage"]; ?></li>
        <li>Kamera : <?= $_GET["kamera"]; ?></li>
    </ul>
    <a href="latihan1.php">KEMBALI KE DAFTAR HANDHPONE</a>
</body>

</html>