<?php 
session_start();
if(!isset($_SESSION['login'])){
    header('location:index.php');
}else{
    ?>
    <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Retail - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="bg-secondary-subtle">
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#" >Retail Application</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                <a class="nav-link active" aria-current="page" href="?modul=home">Home</a>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"aria-expanded="false">Barang</a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="?modul=barang">Data Barang</a></li>
                            <a class="dropdown-item" href="?modul=persediaan">Persediaan Barang</a>
                    </ul>
                </li>
                <a class="nav-link" href="?modul=penjualan">Penjualan</a>
                <a class="nav-link" href="?modul=pengguna">Pengguna</a>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-circle"></i>
                        <?=$_SESSION['user'];?>
                    </a>
                    <ul class="dropdown-menu">
                        <li> 
                            <a class="dropdown-item" href="?modul=profile">Profile</a>
                            <a class="dropdown-item" href="?modul=Logout">Logout</a>
                        </li>
                    </ul>
                </li>
            </div>
            </div>
        </div>
    </nav>
    <main class="bg-white py-4 shadow-sm">
        <div class="container">
            <?php
            if(!isset($_GET['modul'])){
            }else{
                $modul = $_GET['modul'];
                if($modul=="home.php"){
                    include "home.php";
                }elseif($modul=="barang"){
                    include "modul/barang/index.php";
                }elseif($modul=="persediaan"){
                    include "modul/persediaan/index.php";
                }elseif($modul=="penjualan"){
                    include "modul/penjualan/index.php";
                }elseif($modul=="pengguna"){
                    include "modul/pengguna/index.php";
                }elseif($modul=="profile"){
                    include "modul/profile/index.php";
                }else{
                    include "login.php";
                }
            }
            ?>
        </div>
    </main>
    <div class="container py-3 text-center">
        <span> Copyright &copy2024 | Retail Application</span>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
<?php
}
?>