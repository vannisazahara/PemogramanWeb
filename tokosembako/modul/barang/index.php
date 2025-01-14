<div class="row mb-3">
    <div class="col">
        <h5 class="text-theme">Data Produk</h5>
    </div>
    <div class="col text-end">
        <a class="btn btn-theme" href="?modul=form-tambah">Tambah Produk</a>
    </div>
</div>

<table class="table table-bordered table-hover">
    <thead class="bg-theme text-white">
        <tr>
            <th>ID</th>
            <th>Tanngal Penjualan</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Jumlah Terjual</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query = "SELECT * FROM barang";
        $result = $mysqli->query($query);
        $cek_data = $result->num_rows;
        $id = 0;
        if ($cek_data == 0) {
        ?> 
        <tr>
            <td colspan="7" class="text-center text-danger">Tidak Ada Data</td>
        </tr>
        <?php
        } else {
            while ($row = $result->fetch_assoc()) {
                $id++;
                ?> 
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $row['tanggalpenjualan']; ?></td>
                    <td><?php echo $row['namabarang']; ?></td>
                    <td>Rp <?php echo number_format($row['harga'], 0, ',', '.'); ?></td>
                    <td><?php echo $row['jumlahterjual']; ?></td>
                    <td>
                        <a class="btn btn-sm btn-theme" href="<?= '?modul=form-edit&id=' . $row['id']; ?>">Edit</a>
                        <a class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#hapusModal<?= $row['id']; ?>" href="#">Hapus</a>

                        <!-- Modal -->
                        <div class="modal fade" id="hapusModal<?= $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header bg-theme text-white">
                                        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Apakah Anda yakin ingin menghapus data ini? <strong><?= $row['namabarang']; ?></strong>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                        <a class="btn btn-theme" href="<?= 'modul/barang/proses.php?action=delete&id=' . $row['id']; ?>">Yakin</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr> 
                <?php    
            }
        }
        ?>
    </tbody>
</table>

<style>
    .text-theme {
    color: #4fa3d1; /* Soft blue text */
}

.btn-theme {
    background-color: #4fa3d1; /* Soft blue */
    border-color: #4fa3d1;
    color: white;
}

.btn-theme:hover {
    background-color: #3a8bb8; /* Slightly darker blue on hover */
    border-color: #3a8bb8;
}

.bg-theme {
    background-color: #80c8f4; /* Soft pastel blue background for header */
}

.table thead th {
    background-color: #4fa3d1; /* Soft blue header for table */
    color: white;
}

.modal-header.bg-theme {
    background-color: #4fa3d1; /* Soft blue header for modal */
}

</style>
