<?php
$query = "SELECT * FROM karyawan WHERE id=$_GET[id]";
$result = $mysqli->query($query);
$row = $result->fetch_assoc();
?>
<div class="p-4 border rounded" style="background-color: #f9f9f9;">
    <h5 class="text-theme">Edit Karyawan</h5>
    <hr>
    <form action="<?= 'modul/karyawan/proses.php?action=update&id=' . $_GET['id']; ?>" method="post">
        <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label text-theme text-start">Nama Karyawan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" value="<?= $row['nama']; ?>" required />
            </div>
        </div>
        <div class="row mb-3">
            <label for="alamat" class="col-sm-2 col-form-label text-theme text-start">Alamat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="alamat" value="<?= $row['alamat']; ?>" required />
            </div>
        </div>
        <div class="row mb-3">
            <label for="telepon" class="col-sm-2 col-form-label text-theme text-start">telepon</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="telepon" value="<?= $row['telepon']; ?>" required />
            </div>
        </div>
        <div class="row mb-3">
            <label for="posisi" class="col-sm-2 col-form-label text-theme text-start">Posisi</label>
            <div class="col-sm-10">
                <input type="posisi" class="form-control" name="posisi" value="<?= $row['posisi']; ?>" required />
            </div>
        </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <button type="submit" class="btn btn-theme">Update</button>
            </div>
        </div>
    </form>
</div>

<style>
    .text-theme {
    color: #4fa3d1; /* Soft blue */
    font-weight: bold;
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

.form-control, .form-select {
    font-size: 1rem;
    border-radius: 10px;
    border: 1px solid #ddd;
    box-shadow: none;
    transition: border 0.3s;
}

.form-control:focus, .form-select:focus {
    border-color: #4fa3d1; /* Soft blue border */
    box-shadow: 0 0 5px rgba(79, 163, 209, 0.5); /* Soft blue shadow */
}

</style>
