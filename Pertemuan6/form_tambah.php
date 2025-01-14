<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<form action="insert.php" method="POST">
    NPM  : <input type="number" name="npm" placeholder="Masukan NPM" aria-label="Disabled input example" disabled><br><br>
    Nama : <input type="text" name="nama" placeholder="Nama" aria-label="Disabled input example" disabled><br><br>
    Prodi: <input type="text" name="prodi" placeholder="Prodi" aria-label="Disabled input example" disabled><br><br>
    <input type="submit" value="Simpan" class="btn btn-primary">
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>



