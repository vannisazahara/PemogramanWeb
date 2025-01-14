<?php
session_start(); // Memulai sesi untuk pengguna

// Mengecek apakah sudah login
if (isset($_SESSION['username'])) {
    header('Location: index.php'); // Jika sudah login, redirect ke index.php
    exit;
}

// Menangani login
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verifikasi username dan password
    if ($username == 'admin' && $password == '123') {
        // Menyimpan data login ke sesi
        $_SESSION['username'] = $username;
        header('Location: index.php'); // Redirect ke halaman utama setelah login
        exit;
    } else {
        $error = "Username atau Password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Aplikasi Toko Sembako</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Added Poppins font for a modern look -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
    background-color: #e9f1fb; /* Soft light blue background */
    color: #495057; /* Dark gray text */
    font-family: 'Poppins', sans-serif;
}

.container {
    max-width: 450px;
    margin-top: 120px;
    padding: 30px;
    background-color: #ffffff;
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
}

.header {
    text-align: center;
    font-size: 2.2rem;
    font-weight: 600;
    color: #4fa3d1; /* Soft blue */
    margin-bottom: 30px;
}

.btn-theme {
    background-color: #4fa3d1; /* Soft blue */
    border-color: #4fa3d1;
    color: white;
    font-size: 1.1rem;
}

.btn-theme:hover {
    background-color: #3a8bb8; /* Slightly darker blue */
    border-color: #3a8bb8;
}

.alert-danger {
    background-color: #e5f7fd; /* Very light blue background */
    color: #2196f3; /* Blue text for danger */
    font-size: 0.9rem;
}

.form-label {
    font-size: 1.1rem;
    color: #555;
}

.form-control {
    font-size: 1rem;
    border-radius: 10px;
    border: 1px solid #ddd;
    box-shadow: none;
    transition: border 0.3s;
}

.form-control:focus {
    border-color: #4fa3d1; /* Matching the soft blue */
    box-shadow: 0 0 5px rgba(79, 163, 209, 0.5);
}

.footer {
    text-align: center;
    margin-top: 30px;
    color: #999;
    font-size: 0.9rem;
}

    </style>
</head>
<body>
    <div class="container">
        <div class="header">
             Login
        </div>
        <?php if (isset($error)) { echo "<div class='alert alert-danger'>$error</div>"; } ?>
        <form method="POST" action="login.php">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-theme w-100">Login</button>
        </form>
    </div>
    <div class="footer">
        © 2024 Toko Sembako. All Rights Reserved.
    </div>
</body>
</html>
