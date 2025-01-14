<?php
include 'mysqli.php';

$id = $_GET['id'];
$query = "SELECT * FROM biodata WHERE id = $id";
$result = $mysqli->query($query);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
</head>
<body>
<form action="proses_edit.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <label>npm :</label>:<input type="number" name="npm" value="<?php echo $row['npm']; ?>"><br>
    <label>Nama:</label><input type="text" name="nama" value="<?php echo $row['nama']; ?>"><br>
    <label>prodi:</label><input type="text" name="prodi" value="<?php echo $row['prodi']; ?>"><br>
    <button type="submit">Update</button>
</form>
</body>
</html>
