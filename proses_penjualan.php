<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Tangkap data dari form penjualan
    $toko_id = $_POST['toko_id'];
    $user_id = $_POST['user_id'];
    $tanggal_penjualan = $_POST['tanggal_penjualan'];
    $pelanggan_id = $_POST['pelanggan_id'];
    $total = $_POST['total'];
    $bayar = $_POST['bayar'];
    $sisa = $_POST['sisa'];
    $keterangan = $_POST['keterangan'];
    $stok = $_POST['stok'];

    // Query untuk menyimpan data penjualan ke database
    $query_penjualan = "INSERT INTO penjualan (toko_id, user_id, tanggal_penjualan, pelanggan_id, total, bayar, sisa, keterangan, stok) 
                        VALUES ('$toko_id', '$user_id', '$tanggal_penjualan', '$pelanggan_id', '$total', '$bayar', '$sisa', '$keterangan', '$stok')";

    if ($conn->query($query_penjualan) === TRUE) {
        // Dapatkan ID penjualan yang baru saja dimasukkan
        $last_penjualan_id = $conn->insert_id;

        // Tangkap data dari form penjualan_detail
        $produk_id = $_POST['produk_id'];
        $jumlah = $_POST['jumlah'];
        $harga = $_POST['harga'];
        $subtotal = $jumlah * $harga;

        // Query untuk menyimpan data penjualan_detail ke database
        $query_penjualan_detail = "INSERT INTO penjualan_detail (penjualan_id, produk_id, jumlah, harga, subtotal) 
                                   VALUES ('$last_penjualan_id', '$produk_id', '$jumlah', '$harga', '$subtotal')";

        if ($conn->query($query_penjualan_detail) === TRUE) {
            echo "Data penjualan dan penjualan_detail berhasil disimpan";
        } else {
            echo "Error: " . $query_penjualan_detail . "<br>" . $conn->error;
        }
    } else {
        echo "Error: " . $query_penjualan . "<br>" . $conn->error;
    }
}

// Tutup koneksi
$conn->close();
?>
