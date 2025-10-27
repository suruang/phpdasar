<?php
$mahasiswa = ["Muh. Faqi Mario", "181011450168", "Teknik Informatika", "smknlabuang1998@gmail.com"];
$daftarMahasiswa = [
    ["Moh. Haikal", "181011450244", "Akuntansi", "Dedehpertiwi@gmail.com"],
    ["Muh. Risman", "181011450172", "Teknik Arsitektur", "Ciciawalia@gmail.com"],
    ["Muliawan", "181011450475", "Design Komunikasi Visual", "Zahradevita@gmail.com"]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Mahasiswa</h1>
    <!-- memanggil 1 array dengan cara biasa -->
    <ul>
        <li>Nama : <?= $mahasiswa[0] ?></li>
        <li>NIM : <?= $mahasiswa[1] ?></li>
        <li>Jurusan : <?= $mahasiswa[2] ?></li>
        <li>Email : <?= $mahasiswa[3] ?></li>
    </ul>

    <!-- memanggil 1 array dengan looping -->
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li><?= $mhs ?></li>
        <?php endforeach; ?>
    </ul>

    <h1>Daftar Mahasiswa</h1>
    <!-- memanggil beberapa array (array multidimensi) dengan looping -->
    <?php foreach ($daftarMahasiswa as $msw) : ?>
        <ul>
            <li>Nama : <?= $msw[0] ?></li>
            <li>NIM : <?= $msw[1] ?></li>
            <li>Jurusan : <?= $msw[2] ?></li>
            <li>Email : <?= $msw[3] ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>