<?php include 'mysqli.php';

$id = $_GET ['id'];
$query = "DELETE FROM penjualan where id = $id";
$result = $mysqli->query($query);
header("Location: index.php");

?>