<?php
// Include your database connection file (koneksi.php or similar)
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Handle the form submission and insert the product into the database
    $nama_produk = $_POST['nama_produk'];
    $stok = $_POST['stok'];
    $harga_produk = $_POST['harga_produk'];
    $supplier_id = $_POST['supplier_id'];

    try {
        // Use your database connection details
        $pdo = new PDO("mysql:host=localhost;dbname=db_kasir", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $pdo->prepare("INSERT INTO produk (nama_produk, stok, harga_produk, supplier_id) VALUES (:nama_produk, :stok, :harga_produk, :supplier_id)");
        $stmt->bindParam(':nama_produk', $nama_produk);
        $stmt->bindParam(':stok', $stok);
        $stmt->bindParam(':harga_produk', $harga_produk);
        $stmt->bindParam(':supplier_id', $supplier_id);
        $stmt->execute();

        // Redirect to the product list page after adding the product
        header("Location: produk.php");
        exit();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
