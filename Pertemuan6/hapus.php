<?php
include 'mysqli.php';

$id = $_GET['id'];

$query = "DELETE FROM biodata WHERE id = $id";
$mysqli->query($query);

header("Location: index.php");
?>
