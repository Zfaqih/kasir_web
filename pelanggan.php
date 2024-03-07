<?php
include 'koneksi.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>KASIR</title>

    <!-- Custom fonts for this template-->
    <link href="sbadmin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="sbadmin/css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-icon rotate-n-15">
                
                </div>
                <div class="sidebar-brand-text mx-3">ADMIN<sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <div class="text-center" >
                <a class="nav-link" href="dashboard.php">
                    <span class="dashboard" style="font-size: 20px; color: white; font-weight: bold;">Dashboard</span>
                </a>
            </div>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <div id="collapseTwo" class="text-center" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-blue py-1 collapse-inner rounded">
                    <p style="display: block;"><a class="collapse-item" href="produk.php" style="color: white; font-weight: bold; font-size: 20px;">Barang</a></p>
                    <hr class="sidebar-divider">
                   
                    <p style="display: block;"><a class="collapse-item" href="pelanggan.php" style="color: white; font-weight: bold; font-size: 20px;">Pelanggan</a></p>
                    <hr class="sidebar-divider">
                    <p style="display: block;"><a class="collapse-item" href="supplier.php" style="color: white; font-weight: bold; font-size: 20px;">Suplier</a></p>                
                    <hr class="sidebar-divider">        
                    <p style="display: block;"><a class="collapse-item" href="pembelian.php" style="color: white; font-weight: bold; font-size: 20px;">pembelian</a></p>                
                    <hr class="sidebar-divider">   
                   
                    <p style="display: block;"><a class="collapse-item" href="penjualan.php" style="color: white; font-weight: bold; font-size: 20px;">penjualan</a></p>                
                    <hr class="sidebar-divider">        
                    <p style="display: block;"><a class="collapse-item" href="penjualan_detail.php" style="color: white; font-weight: bold; font-size: 20px;">penjualan detail</a></p>                
                    <hr class="sidebar-divider">  
                </div>
            </div>
            <!-- Nav Item - Utilities Collapse Menu -->
           
            <li class="nav-item text-center">
                <a class="nav-link collapsed text-center" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>DATA USER</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">USER</h6>
                        <a class="collapse-item" href="user.php" style="font-weight: bold; font-size: 15px;">Data User</a>
                    </div>
                </div>
            </li>
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->

        
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto"> <!-- Menggunakan kelas ml-auto untuk menjaga elemen di sebelah kanan -->

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                <i class="fas fa-user"></i>
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="userDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>

    </ul>

</nav>
            <!-- content -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pelanggan</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <h2 class="text-center">Data Pelanggan</h2>

    <div class="container">
        <!-- Add a link or button to navigate to the tambah_pelanggan.php page -->
        <a href="tambah_pelanggan.php" class="btn btn-success mb-2">Tambah Pelanggan</a>

        <table class="table table-bordered table-sm">
            <thead>
                <tr class="text-center">
                    <th>ID Pelanggan</th>
                    <th>Nama Pelanggan</th>
                    <th>Alamat</th>
                    <th>No. HP</th>
                    <th>Tanggal Pembuatan</th>
                    <th>Aksi</th> <!-- Add this column for actions -->
                </tr>
            </thead>
            <tbody>

                <?php
                try {
                    // Use your database connection details
                    $pdo = new PDO("mysql:host=localhost;dbname=db_kasir", "root", "");
                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    $stmt = $pdo->prepare("SELECT * FROM pelanggan");
                    $stmt->execute();
                    $pelangganData = $stmt->fetchAll(PDO::FETCH_ASSOC);

                    foreach ($pelangganData as $pelanggan) {
                        echo "<tr>";
                        echo "<td>{$pelanggan['pelanggan_id']}</td>";
                        echo "<td>{$pelanggan['nama_pelanggan']}</td>";
                        echo "<td>{$pelanggan['alamat']}</td>";
                        echo "<td>{$pelanggan['no_hp']}</td>";
                        echo "<td>{$pelanggan['created_at']}</td>";
                        // Add action buttons (Edit and Delete for example)
                        echo "<td>
                                <a href='edit_pelanggan.php?id={$pelanggan['pelanggan_id']}' class='btn btn-warning btn-sm'>Edit</a>
                               
                                <a href='delete/hapus_pelanggan.php?id={$pelanggan['pelanggan_id']}' class='btn btn-danger btn-sm'>Hapus</a>
                              </td>";
                             
                        echo "</tr>";
                    }
                } catch (PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }

                // Close the database connection
                $pdo = null;
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>



 <!-- Bootstrap JS (optional, jika diperlukan) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<!-- Begin Page Content -->


</body>
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Anda Yakin Ingin Keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Jika logout anda harus login kembali!</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="sbadmin/vendor/jquery/jquery.min.js"></script>
    <script src="sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="sbadmin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="sbadmin/js/sb-admin-2.min.js"></script>

</body>

</html>