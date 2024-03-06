<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        // Connect to your database
        $pdo = new PDO("mysql:host=localhost;dbname=db_kasir", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Get values from the form
        $no_faktur = $_POST['no_faktur'];
        $tanggal_pembelian = $_POST['tanggal_pembelian'];
        $suplier_id = $_POST['suplier_id'];
        $total = $_POST['total'];
        $bayar = $_POST['bayar'];
        $sisa = $_POST['sisa'];
        $keterangan = $_POST['keterangan'];

        // Prepare SQL statement for inserting data
        $stmt = $pdo->prepare("INSERT INTO pembelian (no_faktur, tanggal_pembelian, suplier_id, total, bayar, sisa, keterangan) 
                               VALUES (:no_faktur, :tanggal_pembelian, :suplier_id, :total, :bayar, :sisa, :keterangan)");

        // Bind parameters
        $stmt->bindParam(':no_faktur', $no_faktur);
        $stmt->bindParam(':tanggal_pembelian', $tanggal_pembelian);
        $stmt->bindParam(':suplier_id', $suplier_id);
        $stmt->bindParam(':total', $total);
        $stmt->bindParam(':bayar', $bayar);
        $stmt->bindParam(':sisa', $sisa);
        $stmt->bindParam(':keterangan', $keterangan);

        // Execute the statement
        $stmt->execute();

        // Redirect back to the pembelian.php page after successful addition
        header("Location: pembelian.php");
        exit();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    // Close the database connection
    $pdo = null;
}

// Get the product ID and quantity from the form
$produk_id = $_POST['produk_id'];
$quantity = $_POST['quantity'];

// Calculate the total based on the product price and quantity (adjust according to your database structure)
$total = $quantity * $harga_jual; // Replace $produkPrice with the actual price fetched from the database

// Perform the purchase and update the stock
try {
    $pdo->beginTransaction();

    // Insert into pembelian table
    $stmt = $pdo->prepare("INSERT INTO pembelian (no_faktur, tanggal_pembelian, suplier_id, produk_id, total, bayar, sisa, stok, keterangan)
                           VALUES (:no_faktur, :tanggal_pembelian, :suplier_id, :produk_id, :total, :bayar, :sisa, :stok, :keterangan)");
    $stmt->bindParam(':no_faktur', $uniqueNoFaktur);
    $stmt->bindParam(':tanggal_pembelian', $_POST['tanggal_pembelian']);
    $stmt->bindParam(':suplier_id', $_POST['suplier_id']);
    $stmt->bindParam(':produk_id', $produk_id);
    $stmt->bindParam(':total', $total);
    $stmt->bindParam(':bayar', $_POST['bayar']);
    $stmt->bindParam(':sisa', $_POST['sisa']);
    $stmt->bindParam(':stok', $quantity); // Set the purchased quantity as stock
    $stmt->bindParam(':keterangan', $_POST['keterangan']);
    $stmt->execute();

    // Update the product stock in the produk table
    $stmt = $pdo->prepare("UPDATE produk SET stok = stok + :quantity WHERE produk_id = :produk_id");
    $stmt->bindParam(':quantity', $quantity);
    $stmt->bindParam(':produk_id', $produk_id);
    $stmt->execute();

    $pdo->commit();
} catch (PDOException $e) {
    $pdo->rollBack();
    echo "Error: " . $e->getMessage();
}

?>