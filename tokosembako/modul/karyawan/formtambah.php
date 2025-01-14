<div class="p-4 border rounded" style="background-color: #f9f9f9;">
    <h5 class="text-theme">Form Input Karyawan</h5>
    <hr>
    <form action="modul/karyawan/proses.php?action=insert" method="post">
        <!-- Nama Input -->
        <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label text-theme text-start">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" placeholder="Masukkan nama" required />
            </div>
        </div>

        <!-- Jabatan Input -->
        <div class="row mb-3">
            <label for="alamat" class="col-sm-2 col-form-label text-theme text-start">Alamat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="alamat" placeholder="Masukkan alamat" required />
            </div>
        </div>

        <!-- Telepon Input -->
        <div class="row mb-3">
            <label for="telepon" class="col-sm-2 col-form-label text-theme text-start">Telepon</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="telepon" placeholder="Masukkan telepon" required />
            </div>
        </div>

        <!-- Email Input -->
        <div class="row mb-3">
            <label for="posisi" class="col-sm-2 col-form-label text-theme text-start">posisi</label>
            <div class="col-sm-10">
                <input type="posisi" class="form-control" name="posisi" placeholder="Masukkan posisi" required />
            </div>
        </div>

        <!-- Submit Button -->
        <div class="row">
            <div class="col text-center">
                <button type="submit" class="btn btn-theme">Simpan</button>
            </div>
        </div>
    </form>
</div>

<style>
    /* Text color and weight */
.text-theme {
    color: #4fa3d1; /* Soft blue color */
    font-weight: bold;
}

/* Button theme */
.btn-theme {
    background-color: #4fa3d1; /* Soft blue background */
    border-color: #4fa3d1;
    color: white;
    padding: 10px 20px;
    border-radius: 8px;
    font-size: 1.1rem;
    transition: background-color 0.3s ease, border-color 0.3s ease;
}

/* Button hover effect */
.btn-theme:hover {
    background-color: #3a8bb8; /* Darker blue on hover */
    border-color: #3a8bb8;
}

/* Form input field styles */
.form-control, .form-select {
    font-size: 1rem;
    border-radius: 8px;
    border: 1px solid #ddd;
    box-shadow: none;
    transition: border 0.3s, box-shadow 0.3s;
}

/* Focus effect for inputs */
.form-control:focus, .form-select:focus {
    border-color: #4fa3d1; /* Soft blue border */
    box-shadow: 0 0 8px rgba(79, 163, 209, 0.5); /* Soft blue shadow */
}

/* Spacing between form rows */
.row {
    margin-bottom: 15px;
}

</style>
