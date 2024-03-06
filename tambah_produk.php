<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <!-- Link to Bootstrap CSS (you can replace it with your own styling or framework) -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 600px;
            margin-top: 50px;
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .mb-3 {
            margin-bottom: 15px;
        }

        button {
            background-color: #28a745;
            color: #fff;
        }
    </style>
</head>

<body>

    <h2 class="text-center">Tambah Produk</h2>

    <div class="container">
        <form action="proses_tambah_produk.php" method="post">
            <div class="mb-3">
                <label for="nama_produk" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" id="nama_produk" name="nama_produk" required>
            </div>
            <div class="mb-3">
                <label for="stok" class="form-label">Stok</label>
                <input type="number" class="form-control" id="stok" name="stok" required>
            </div>
            <div class="mb-3">
                <label for="harga_produk" class="form-label">Harga Produk</label>
                <input type="number" class="form-control" id="harga_produk" name="harga_produk" required>
            </div>
            <!-- Add more fields as needed -->

            <!-- Use a hidden input field to store the supplier_id -->
            <input type="hidden" name="supplier_id" value="<?php echo $_GET['id']; ?>">

            <button type="submit" class="btn btn-success">Tambah Produk</button>
        </form>
    </div>

    <!-- Link to Bootstrap JS and jQuery (you can replace it with your own scripts or framework) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
