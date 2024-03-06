<?php
$servername = "localhost";  // Ganti dengan nama server database Anda
$username = "root";      // Ganti dengan username database Anda
$password = "";      // Ganti dengan password database Anda
$dbname = "db_kasir";   // Ganti dengan nama database Anda

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Kode PHP lainnya dapat ditambahkan di sini untuk berinteraksi dengan database


?>
<?php
$host = "localhost";
$dbname = "db_kasir";
$username = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
}
?>
