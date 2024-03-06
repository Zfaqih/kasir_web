<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Handle the form submission and insert the customer into the database
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];

    try {
        // Use your database connection details
        $pdo = new PDO("mysql:host=localhost;dbname=db_kasir", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $pdo->prepare("INSERT INTO pelanggan (nama_pelanggan, alamat, no_hp) VALUES (:nama_pelanggan, :alamat, :no_hp)");
        $stmt->bindParam(':nama_pelanggan', $nama_pelanggan);
        $stmt->bindParam(':alamat', $alamat);
        $stmt->bindParam(':no_hp', $no_hp);
        $stmt->execute();

        // Redirect to the customer list page after adding the customer
        header("Location: pelanggan.php");
        exit();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
