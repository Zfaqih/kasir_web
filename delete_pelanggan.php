<?php
// Include your database connection file (e.g., koneksi.php)
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // Check if pelanggan_id is set in the URL
    if (isset($_GET['pelanggan_id'])) {
        // Get the pelanggan_id from the URL
        $pelanggan_id = $_GET['pelanggan_id'];

        try {
            $pdo = new PDO("mysql:host=localhost;dbname=db_kasir", "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Prepare and execute the SQL statement to delete the pelanggan record
            $stmt = $pdo->prepare("DELETE FROM pelanggan WHERE pelanggan_id = :pelanggan_id");
            $stmt->bindParam(':pelanggan_id', $pelanggan_id);
            $stmt->execute();

            // Redirect to the pelanggan list page after deleting the pelanggan record
            header("Location: pelanggan.php");
            exit();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    } else {
        echo "Pelanggan ID is not set.";
    }
}

// Close the database connection
$pdo = null;
?>
