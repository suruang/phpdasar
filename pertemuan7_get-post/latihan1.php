<?php
// variabel superglobals
// variabel global milik PHP
// merupakan array associative
// $_GET, $_POST, $_REQUEST, $_SESSION, $_COOKIE, $_SERVER, $_ENV
// varibel superglobals yang dibahas pada playlist ini $_GET, $_POST, $_SESSION, $_COOKIE
// varibel superglobals yang dibahas pada pertemuan ini $_GET, $_POST
// $_GET = berada di url
// $_POST = berada di form | tidak berada di url
// pada form, key untuk POST itu name yang ada pada tag input/button
// jangan pernah pakai GET untuk buat sistem login


$daftarHandphone = [
    [
        "gambar" => "fotohp1.webp",
        "nama" => "Vivo V25e",
        "harga" => 3779000,
        "storage" => "8/128 GB",
        "kamera" => "64/32 MP",
    ],
    [
        "gambar" => "fotohp2.webp",
        "nama" => "Samsung Galaxy A23 5G",
        "harga" => 3999000,
        "storage" => "6/128 GB",
        "kamera" => "50/8 MP",
    ],
    
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
   
    <title>GET</title>
</head>

<body>
    <!-- penggunaan $_GET (URL) yang terhubung pada latihan2.php -->
    <h1>Daftar Handphone</h1>
    <?php foreach ($daftarHandphone as $handphone) : ?>
        <ul>
            <li>
                <a href="latihan2.php?gambar=<?= $handphone["gambar"]; ?>
                                    &nama=<?= $handphone["nama"]; ?>
                                    &harga=<?= $handphone["harga"]; ?>
                                    &storage=<?= $handphone["storage"]; ?>
                                    &kamera=<?= $handphone["kamera"]; ?>">
                <?= $handphone["nama"]; ?></a>
            </li>
        </ul>
    <?php endforeach; ?>
</body>

</html>