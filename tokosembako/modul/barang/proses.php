<?php
include '../../koneksi.php';

if($_GET['action'] == 'insert') {
    // Validate and sanitize inputs
    $tanggalpenjualan = isset($_POST['tanggalpenjualan']) ? $_POST['tanggalpenjualan'] : '';
    $namabarang = isset($_POST['namabarang']) ? $_POST['namabarang'] : '';
    $harga = isset($_POST['harga']) ? $_POST['harga'] : '';
    $jumlahterjual = isset($_POST['jumlahterjual']) ? $_POST['jumlahterjual'] : 0; // Default to 0 if not set

    // Ensure jumlahterjual is an integer
    $jumlahterjual = (int) $jumlahterjual;

    // Prepare the query to prevent SQL injection
    $query = "INSERT INTO barang (tanggalpenjualan, namabarang, harga, jumlahterjual) 
              VALUES ('$tanggalpenjualan', '$namabarang', '$harga', '$jumlahterjual')";
    
    if ($mysqli->query($query)) {
        header("Location: ../../index.php?modul=barang");
    } else {
        echo "Error: " . $mysqli->error;
    }
    
} elseif ($_GET['action'] == 'update') {
    $id = $_GET['id'];
    // Validate and sanitize inputs
    $tanggalpenjualan = isset($_POST['tanggalpenjualan']) ? $_POST['tanggalpenjualan'] : '';
    $namabarang = isset($_POST['namabarang']) ? $_POST['namabarang'] : '';
    $harga = isset($_POST['harga']) ? $_POST['harga'] : '';
    $jumlahterjual = isset($_POST['jumlahterjual']) ? $_POST['jumlahterjual'] : 0; // Default to 0 if not set

    // Ensure jumlahterjual is an integer
    $jumlahterjual = (int) $jumlahterjual;

    // Prepare the query to prevent SQL injection
    $query = "UPDATE barang SET 
              tanggalpenjualan = '$tanggalpenjualan',
              namabarang = '$namabarang',
              harga = '$harga',
              jumlahterjual = '$jumlahterjual'
              WHERE id = '$id'";

    if ($mysqli->query($query)) {
        header("Location: ../../index.php?modul=barang");
    } else {
        echo "Error: " . $mysqli->error;
    }

} elseif ($_GET['action'] == 'delete') {
    $id = $_GET['id'];
    $query = "DELETE FROM barang WHERE id = $id";

    if ($mysqli->query($query)) {
        header("Location: ../../index.php?modul=barang");
    } else {
        echo "Error: " . $mysqli->error;
    }

} else {
    header("Location:../../index.php");
}
?>
