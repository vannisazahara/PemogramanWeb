<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Link Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <!-- Card -->
            <div class="card shadow">
                <div class="card-header text-center bg-primary text-white">
                    <h3>Form Registrasi</h3>
                </div>
                <div class="card-body">
                    <form action="proses-register.php" method="POST">
                        <!-- Input Username -->
                        <div class="mb-3">
                            <label for="username" class="form-label">Username:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-person"></i></span>
                                <input type="text" id="username" name="username" required class="form-control" placeholder="Masukkan username">
                            </div>
                        </div>
                        <!-- Input nama lengkap -->
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Lengkap:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-person-badge"></i></span>
                                <input type="text" id="nama" name="nama" required class="form-control" placeholder="Masukkan Nama Lengkap">
                            </div>
                        </div>
                        <!-- Input Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Password:</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                <input type="password" id="password" name="password" required class="form-control" placeholder="Masukkan password">
                            </div>
                        </div>
                        <div class="mb-3">
                                <label for="level" class="form-label">Level:</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-layers"></i></span>
                                    <select id="level" name="level" required class="form-select">
                                      <option value="" disabled selected>Pilih level</option>
                                      <option value="admin">Admin</option>
                                      <option value="user">User</option>
                                      <option value="guest">Guest</option>
                                    </select>
                                </div>
                        </div>
                        <!-- Tombol Submit -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Daftar</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <small>Sudah punya akun? <a href="index.php" class="text-primary">Login di sini</a></small>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
