$(document).ready(function () {
    $('#tabelDataPenjualan').DataTable();
    updateTablePenjualan();
})
function pilihBarang(){
    var select = document.getElementById("Barang");
    var selectedOption = select.options[select.selectedIndex];

    var barang = selectedOption.value;
    var stok = selectedOption.getAttribute("data-stok");
    var harga = selectedOption.getAttribute("data-harga");

    document.getElementById("Stok").value = stok;
    document.getElementById("Harga").value = harga;
}

function hitungtotalharga(){
    var jumlah = document.getElementById("Jumlah").value;
    var harga = document.getElementById("Harga").value;

    var totalharga = jumlah * harga;
    document.getElementById("TotalHarga").value = totalharga;
}
function tambahItem(){
    var barang = document.getElementById("Barang").value;
    var idbarang = barang.value;
    var namabarang = barang.options[barang.selectedIndex].getAttribute('nama-barang');
    var jumlah = document.getElementById("Jumlah").value;
    var harga = document.getElementById("Harga").value;
    var totalharga = document.getElementById("TotalHarga").value;

    //Simpan ke local storage
    var penjualan = JSON.parse(localStorage.getItem('penjualan')) || [];
    penjualan.push({
        idbarang: idbarang,
        namabarang: namabarang,
        jumlah: jumlah,
        harga: harga,
        totalharga: totalharga,
    });
    localStorage.setItem('penjualan', JSON.stringify(penjualan));

    //Update table penjualan
    updateTablePenjualan();

    //kosongkan form
    kosongkanForm();
}

function kosongkanForm(){
    document.getElementById('barang').value = '';
    document.getElementById('stok').value = '';
    document.getElementById('jumlah').value = '';
    document.getElementById('harga').value = '';
    document.getElementById('totalharga').value = '';
}

function resetPenjualan(){
    //hapus semua data di local storage
    localStorage.removeItem('penjualan');
    localStorage.removeItem('totalharga');
    //reload halaman
    location.reload();
}

function updateTablePenjualan(){
    var penjualan = JSON.parse(localStorage.getItem('penjualan')) || [];
    var totalharga = 0;
    for(var i = 0; i < penjualan.length; i++){
        totalBayar += parseFloat(penjualan[i].totalharga);
    }
    //simpan total bayar ke local storage
    localStorage.setItem('totalbayar', totalBayar);
    //konversi ke format rupiah dengan tidak ada digit di belakang koma
    totalBayarIDR = totalBayar.toLocaleString('id-ID', {style: 'currency', currency: 'IDR', minimumFractionDigits: 0});
    document.getElementById('totalbayar').textContent = totalBayarIDR;
    document.getElementById('modaltotalbayar').value = totalBayar;
}
function updateTablePenjualan(){
    var penjualan = JSON.parse(localStorage.getItem('penjualan')) || [];
    var tabelPenjualan = $('#tabelPenjualan').DataTable();
    tabelPenjualan.clear();
    for(var i = 0; i < penjualan.length; i++){
        tabelPenjualan.row.add([
            i + 1,
            penjualan[i].namabarang,
            penjualan[i].jumlah,
            penjualan[i].harga,
            penjualan[i].totalharga
        ]).draw(false);
    }
    hitungTotalBayar();
}

function simpanPenjualan(){
    //simpan ke database
    var penjualan = JSON.parse(localStorage.getItem('penjualan')) || [];
    var totalbayar = localStorage.getItem('totalbayar');
    var bayar = localStorage.getItem('bayar');
    var kembalian = localStorage.getItem('kembalian');
    $.ajax({
        url: 'modul/penjualan/proses.php',
        method: 'POST',
        data: {
            penjualan:JSON.stringify(penjualan),
            totalbayar:totalbayar,
            bayar:bayar,
            kembalian:kembalian
        },
        success: function(response){
            resetPenjualan();
            location.reload();
        }
    });
}

function hitungKembalian(){
    var bayar = document.getElementById("Bayar").value;
    var totalbayar = localStorage.getItem('totalbayar');
    var kembalian = bayar - totalbayar;
    //simpan ke local storage
    localStorage.setItem('bayar', bayar);
    localStorage.setItem('kembalian', kembalian);
    document.getElementById("Kembalian").value = kembalian;
}
    