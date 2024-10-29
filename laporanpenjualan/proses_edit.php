<?php include 'mysqli.php';

$id = $_POST ['id'];
$tanggal_penjualan = $_POST ['tanggal_penjualan'];
$nama_produk = $_POST ['nama_produk'];
$harga = $_POST ['harga'];
$jumlah_terjual = $_POST ['jumlah_terjual'];
$total_penjualan = $harga * $jumlah_terjual;

$query = "UPDATE laporanpenjualan SET 
    tanggal_penjualan = '$tanggal_penjualan', 
    nama_produk = '$nama_produk', 
    harga = '$harga', 
    jumlah_terjual = '$jumlah_terjual', 
    total_penjualan = '$total_penjualan' 
    WHERE id = $id";

$mysqli->query($query);

header("Location: index.php");

?>