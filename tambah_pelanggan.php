<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pelanggan</title>
    <link rel="stylesheet" href="styles.css"> <!-- Include your CSS file if needed -->
</head>

<body>

    <h2 class="text-center">Tambah Pelanggan</h2>

    <div class="container">
        <form action="proses_tambah_pelanggan.php" method="post">
            <div class="mb-3">
                <label for="nama_pelanggan" class="form-label">Nama Pelanggan</label>
                <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" required>
            </div>
            <div class="mb-3">
                <label for="no_hp" class="form-label">No. HP</label>
                <input type="text" class="form-control" id="no_hp" name="no_hp" required>
            </div>
            <button type="submit" class="btn btn-success">Tambah Pelanggan</button>
        </form>
    </div>

</body>
<style>
</html>
/* Add your custom styles here */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
}

.container {
    max-width: 600px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    color: #333;
}

form {
    margin-top: 20px;
}

form label {
    display: block;
    margin-bottom: 5px;
}

form input {
    width: 100%;
    padding: 8px;
    margin-bottom: 15px;
    box-sizing: border-box;
}

button {
    background-color: #28a745;
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #218838;
}
</style>