<?php
$mysqli = new mysqli("localhost", "root", "", "tokosembako");
if ($mysqli->connect_error) {
die("Koneksi gagal: " . $mysqli->connect_error);
} else {
} 
?>