<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pelanggan</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <div class="container">
        <h2 class="text-center">Edit Pelanggan</h2>

        <?php
        // Assuming you have received the customer ID through a GET parameter
        $pelanggan_id = isset($_GET['id']) ? $_GET['id'] : null;

        if (!$pelanggan_id) {
            echo "<p>No customer ID provided.</p>";
        } else {
            try {
                // Use your database connection details
                $pdo = new PDO("mysql:host=localhost;dbname=db_kasir", "root", "");
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $stmt = $pdo->prepare("SELECT * FROM pelanggan WHERE pelanggan_id = :pelanggan_id");
                $stmt->bindParam(':pelanggan_id', $pelanggan_id);
                $stmt->execute();
                $pelanggan = $stmt->fetch(PDO::FETCH_ASSOC);

                if (!$pelanggan) {
                    echo "<p>Customer not found.</p>";
                } else {
        ?>
                    <form action="proses_edit_pelanggan.php" method="post">
                        <input type="hidden" name="pelanggan_id" value="<?php echo $pelanggan['pelanggan_id']; ?>">

                        <label for="nama_pelanggan">Nama Pelanggan:</label>
                        <input type="text" id="nama_pelanggan" name="nama_pelanggan" value="<?php echo $pelanggan['nama_pelanggan']; ?>" required>

                        <label for="alamat">Alamat:</label>
                        <textarea id="alamat" name="alamat" required><?php echo $pelanggan['alamat']; ?></textarea>

                        <label for="no_hp">No. HP:</label>
                        <input type="text" id="no_hp" name="no_hp" value="<?php echo $pelanggan['no_hp']; ?>" required>

                        <button type="submit">Update Pelanggan</button>
                    </form>
        <?php
                }
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }

            // Close the database connection
            $pdo = null;
        }
        ?>

    </div>

</body>

</html>
<style>body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 800px;
    margin: 20px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    color: #333;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-top: 10px;
    font-weight: bold;
}

input,
textarea {
    width: 100%;
    padding: 8px;
    margin-top: 5px;
    margin-bottom: 10px;
    box-sizing: border-box;
}

button {
    background-color: #4caf50;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}
</style>