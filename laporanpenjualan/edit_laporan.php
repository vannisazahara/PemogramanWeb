<?php include 'mysqli.php';

$id = $_GET ['id'];
$query = "SELECT * FROM penjualan where id = $id";
$result = $mysqli->query($query);
$row = $result ->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="proses_edit.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

    tanggal penjualan: <input type="date" name="tanggal_penjualan" value="<?php echo $row['tanggal_penjualan']; ?>"><br>
    nama produk      : <input type="text" name="nama_produk" value="<?php echo $row['nama_produk']; ?>"><br>
    harga            : <input type="number" name="harga"value="<?php echo $row['harga']; ?>"><br>
    jumlah terjual   : <input type="number" name="jumlah_terjual" value="<?php echo $row['jumlah_terjual']; ?>"><br>

<button type="submit">Update Laporan</button>
</form>
</body>
</html>