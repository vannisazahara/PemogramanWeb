<?php
include 'mysqli.php';

$npm = $_POST['npm'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];

$query = "INSERT INTO  biodata (npm, nama, prodi)
        VALUES ('$npm', '$nama', '$prodi')";
$mysqli->query($query);

header("Location: index.php");
?>
