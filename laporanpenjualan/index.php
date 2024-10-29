<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Laporan Penjualan</h1>
    <a href='form_tambah.php'>tambah laporan baru</a>
    <table border='1'>
        <tr>
            <td>id</td>
            <td>tanggal penjualan</td>
            <td>nama produk</td>
            <td>harga</td>
            <td>jumlah terjual</td>
            <td>total penjualan</td>
            <td>aksi</td>

        </tr>
        <?php include 'mysqli.php';
        $query = "SELECT * FROM penjualan";
        $result = $mysqli -> query($query);
        While ($row = mysqli_fetch_assoc($result)){
            echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['tanggal_penjualan']}</td>
            <td>{$row['nama_produk']}</td>
            <td>{$row['harga']}</td>
            <td>{$row['jumlah_terjual']}</td>
            <td>{$row['total_penjualan']}</td>

            <td>
              <a href='edit_laporan.php?id={$row['id']}'>Edit</a>
              <a href='hapus.php?id={$row['id']}'>Hapus</a>
            </td>

            </tr>";}
        ?>

    </table>
</body>
</html>