<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
    $siswa = array("nama" => "Vannisa","umur" => "19","kota" => "Binjai","agama"=> "Islam", "jurusan" => "Sistem Informasi");

?>

<h3>Biodata Mahasiswa</h3>
<table border="1">
<tr>
    <th>Nama</th>
    <th>Umur</th>
    <th>Kota</th>
    <th>Agama</th>
    <th>Jurusan</th>
</tr>

<tr>
     <td><?= $siswa["nama"]; ?></td>
     <td><?= $siswa["umur"]; ?></td>
     <td><?= $siswa["kota"]; ?></td>
     <td><?= $siswa["agama"]; ?></td>
     <td><?= $siswa["jurusan"]; ?></td>
</tr>
</table>
</body>
</html>