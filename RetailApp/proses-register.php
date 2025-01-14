<?php
// Sertakan file koneksi
include 'koneksi.php';

// Ambil data dari form
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST['username']);
    $nama_lengkap = trim($_POST['nama']);
    $level = trim($_POST['level']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Enkripsi password

    // Validasi input (jika diperlukan)
    if (empty($username) || empty($nama_lengkap) || empty($level) || empty($_POST['password'])) {
        echo "Semua field wajib diisi! <a href='register.php'>Kembali</a>";
        exit;
    }

    // Simpan data ke database
    $sql = "INSERT INTO users (username, nama_lengkap, level, password) VALUES (?, ?, ?, ?)";
    $stmt = $mysqli->prepare($sql); // Gunakan $mysqli sesuai dengan koneksi
    if (!$stmt) {
        die("Terjadi kesalahan pada query: " . $mysqli->error);
    }

    $stmt->bind_param("ssss", $username, $nama_lengkap, $level, $password);

    if ($stmt->execute()) {
        header('location: index.php');
    } else {
        echo "Terjadi kesalahan: " . $stmt->error;
    }

    // Tutup statement
    $stmt->close();
} else {
    echo "Akses tidak valid!";
}

// Tutup koneksi
$mysqli->close();
?>
