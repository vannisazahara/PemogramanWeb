<!DOCTYPE html>
<html>
<head>
    <title>Laporan Penjualan</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px 12px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        caption {
            margin-bottom: 10px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    
<h2>Sistem Pencatatan Data Penjualan</h2>
<p>[Form Input untuk Data Penjualan]</p>

    <table>
        <caption>Laporan Penjualan:</caption>
        <tr>
            <th>Nama</th>
            <th>Harga Per Produk</th>
            <th>Jumlah Terjual</th>
            <th>Total</th>
        </tr>

        <?php
        // Data penjualan
        $products = [
            ['name' => 'Produk A', 'price' => 10000, 'sold' => 5],
            ['name' => 'Produk B', 'price' => 7500, 'sold' => 10],
            ['name' => 'Produk C', 'price' => 12000, 'sold' => 8]
        ];

        $totalSold = 0;
        $totalRevenue = 0;

        // Looping data produk untuk menampilkan baris tabel
        foreach ($products as $product) {
            $total = $product['price'] * $product['sold'];
            $totalSold += $product['sold'];
            $totalRevenue += $total;
            echo "<tr>
                    <td>{$product['name']}</td>
                    <td>" . number_format($product['price'], 0, ',', '.') . "</td>
                    <td>{$product['sold']}</td>
                    <td>" . number_format($total, 0, ',', '.') . "</td>
                  </tr>";
        }
        ?>

        <tr>
            <th colspan="2">Total Penjualan</th>
            <th><?= $totalSold ?></th>
            <th><?= number_format($totalRevenue, 0, ',', '.') ?></th>
        </tr>
    </table>

</body>
</html>