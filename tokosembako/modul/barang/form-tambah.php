<div class="p-4 border rounded" style="background-color: #f9f9f9;">
    <h5 class="text-theme">Form Input Produk</h5>
    <hr>
    <form action="modul/barang/proses.php?action=insert" method="post">
    <div class="row mb-3">
            <label for="tanggalpenjualan" class="col-sm-2 col-form-label text-theme text-start">Tanggal Penjualan</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="tanggalpenjualan" placeholder="Masukkan tanggal penjualan" required />
            </div>
        </div>
        <div class="row mb-3">
            <label for="namabarang" class="col-sm-2 col-form-label text-theme text-start">Nama Barang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="namabarang" placeholder="Masukkan nama barang" required />
            </div>
        </div>
        <div class="row mb-3">
            <label for="harga" class="col-sm-2 col-form-label text-theme text-start">Harga</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="harga" placeholder="Masukkan harga" required />
            </div>
        </div>
        <div class="row mb-3">
            <label for="jumlahterjual" class="col-sm-2 col-form-label text-theme text-start">Jumlah Terjual</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="stok" placeholder="Masukkan jumlah terjual" required />
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
