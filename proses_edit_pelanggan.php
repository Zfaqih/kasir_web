<?php
// Include your database connection file (e.g., koneksi.php)
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Handle the form submission and update the pelanggan data in the database
    $pelanggan_id = $_POST['pelanggan_id'];
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];

    try {
        $pdo = new PDO("mysql:host=localhost;dbname=db_kasir", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $pdo->prepare("UPDATE pelanggan SET nama_pelanggan = :nama_pelanggan, alamat = :alamat, no_hp = :no_hp WHERE pelanggan_id = :pelanggan_id");
        $stmt->bindParam(':pelanggan_id', $pelanggan_id);
        $stmt->bindParam(':nama_pelanggan', $nama_pelanggan);
        $stmt->bindParam(':alamat', $alamat);
        $stmt->bindParam(':no_hp', $no_hp);
        $stmt->execute();

        // Redirect to the pelanggan list page after updating the pelanggan data
        header("Location: pelanggan.php");
        exit();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

// Close the database connection
$pdo = null;
?>
