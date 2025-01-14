<?php
session_start(); 

// Cek apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    // Jika tidak login, arahkan ke halaman login
    header('Location: login.php'); 
    exit;
}

// Logout jika ada parameter logout
if (isset($_GET['logout'])) {
    session_destroy(); 
    header('Location: login.php'); 
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Toko Sembako</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Added Poppins font for a modern look -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        /* CSS style tetap sama */
        body {
    background-color: #e9f1fb; /* Soft light blue background */
    color: #495057; /* Dark gray text */
    font-family: 'Poppins', sans-serif;
    padding-bottom: 60px; /* To prevent content from being hidden behind the fixed footer */
}

.header {
    background-color: #80c8f4; /* Soft pastel blue */
    color: white;
    text-align: center;
    padding: 30px 20px;
    font-size: 2.5rem;
    font-weight: 600;
    border-bottom: 5px solid #4fa3d1; /* Slightly darker blue */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.btn-theme {
    background-color: #4fa3d1; /* Soft blue */
    border-color: #4fa3d1;
    color: white;
}

.btn-theme:hover {
    background-color: #3a8bb8; /* Slightly darker blue */
    border-color: #3a8bb8;
}

.container {
    margin-top: 30px;
    padding: 30px;
    border-radius: 10px;
    background-color: white;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.nav-buttons {
    margin-bottom: 30px;
}

.nav-buttons .btn {
    margin-right: 15px;
}

footer {
    background-color: #80c8f4; /* Soft pastel blue */
    color: white;
    text-align: center;
    padding: 20px 0;
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    box-shadow: 0 -4px 6px rgba(0, 0, 0, 0.1);
}

.logout-btn {
    position: absolute;
    right: 20px;
    top: 20px;
    background-color: #3a8bb8; /* Slightly darker blue */
    border-color: #3a8bb8;
}

.logout-btn:hover {
    background-color: #2f7aa4; /* Even darker blue */
    border-color: #2f7aa4;
}

    </style>
</head>
<body>
    <div class="header">
        Toko Sembako
        <a href="index.php?logout=true" class="btn btn-danger logout-btn">Logout</a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col text-center nav-buttons">
                <?php
                    include "koneksi.php";
                    // jika modul tidak ada
                    if (!isset($_GET['modul'])) {
                        ?>
                        <a class="btn btn-theme" href="index.php?modul=barang">Produk</a>
                        <a class="btn btn-theme" href="index.php?modul=karyawan">Karyawan</a>
                        <?php
                    }
                    elseif($_GET['modul'] == 'barang') {
                        include "modul/barang/index.php";
                    }elseif($_GET['modul'] == 'form-tambah') {  
                        include "modul/barang/form-tambah.php";
                    }elseif($_GET['modul'] == 'form-edit') {  
                        include "modul/barang/form-edit.php";
                    }elseif($_GET['modul'] == 'karyawan') {
                        include "modul/karyawan/index.php"; 
                    }elseif($_GET['modul'] == 'formtambah') {
                        include "modul/karyawan/formtambah.php";
                    }elseif($_GET['modul'] == 'formedit') {
                        include "modul/karyawan/formedit.php";
                    }elseif($_GET['modul'] == 'nilai') {
                        include "modul/penjualan/index.php";
                    }else{
                        echo "Modul Tidak Ditemukan";
                    }
                ?>
            </div>
        </div>
    </div>
    <footer>
        © 2024 Toko Sembako - All Rights Reserved
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
