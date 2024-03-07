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
?>
