<?php
session_start();

if (!isset($_SESSION['login'])) {

    if(isset($_GET['modul'])) {
    header("Location: dashboard.php");
    }
    else {
    header("Location: index.php");
    }
}

?>