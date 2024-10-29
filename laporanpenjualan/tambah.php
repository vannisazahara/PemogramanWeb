<?php include 'mysqli.php';

$tanggal_penjualan = $_POST ['tanggal_penjualan'];
$nama_produk = $_POST ['nama_produk'];
$harga = $_POST ['harga'];
$jumlah_terjual = $_POST ['jumlah_terjual'];
$total_penjualan = $harga * $jumlah_terjual;

$query = "INSERT INTO penjualan (id, tanggal_penjualan, nama_produk, harga, jumlah_terjual, total_penjualan)
VALUES (NULL, '$tanggal_penjualan', '$nama_produk', '$harga', '$jumlah_terjual', '$total_penjualan')";

$mysqli->query($query);
header("Location: index.php");

?>