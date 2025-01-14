<?php
include '../../koneksi.php';
if($_GET['action'] == 'insert') {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $posisi = $_POST['posisi'];
    $query = "INSERT INTO karyawan (nama, alamat, telepon, posisi) VALUES ('$nama', '$alamat', '$telepon', '$posisi')";
    $mysqli->query($query);
    header("Location: ../../index.php?modul=karyawan");
}elseif($_GET['action'] == 'update') {
    $id = $_GET['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $posisi = $_POST['posisi'];
    $query = "UPDATE karyawan SET  nama = '$nama', alamat = '$alamat', telepon = '$telepon', posisi = '$posisi' WHERE id = $id";
    $mysqli->query($query);
    header("Location: ../../index.php?modul=karyawan");
}elseif($_GET['action'] == 'delete') {
    $id = $_GET['id'];
    $query = "DELETE FROM karyawan WHERE id = $id";
    $mysqli->query($query);
    header("Location: ../../index.php?modul=karyawan");
}else{
    header("Location:../../ index.php");
}
?>