<?php
include '../../koneksi.php';
if($_GET['action'] == 'insert') {
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $query = "INSERT INTO biodata (npm, nama, prodi) VALUES ('$npm', '$nama', '$prodi')";
    $mysqli->query($query);
    header("Location: ../../index.php?modul=biodata");
}elseif($_GET['action'] == 'update') {
    $id = $_GET['id'];
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $query = "UPDATE biodata SET npm = '$npm', nama = '$nama' WHERE id = $id";
    $mysqli->query($query);
    header("Location: ../../index.php?modul=biodata");
}elseif($_GET['action'] == 'delete') {
    $id = $_GET['id'];
    $query = "DELETE FROM biodata WHERE id = $id";
    $mysqli->query($query);
    header("Location: ../../index.php?modul=biodata");
}else{
    header("Location:../../ index.php");
}
?>