<?php

include 'koneksi.php';
$sql="SELECT * FROM produk";
$result=mysqli_query($conn,$sql);

$result1=mysqli_query($conn,$sql);
$sql="SELECT * FROM penjualan";
$result2=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="sbadmin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet"><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

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
            <div class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-icon rotate-n-15">
                
                </div>
                <div class="sidebar-brand-text mx-2 ">ADMIN<sup></sup></div>
            </div>

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

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
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

                    <!-- Topbar Search -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
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
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Pembelian</title>
    <link rel="stylesheet" href="style.css"> <!-- Menghubungkan ke file CSS -->
</head>

<body>

    <div class="container">
        <h2>Data Pembelian</h2>

        <!-- Informasi Pembelian -->
        <div class="purchase-info">
            <label for="pembelian_id">ID Pembelian:</label>
            <input type="text" id="pembelian_id" name="pembelian_id" readonly>

            <label for="no_faktur">No. Faktur:</label>
            <input type="text" id="no_faktur" name="no_faktur" required>

            <label for="tanggal_pembelian">Tanggal Pembelian:</label>
            <input type="date" id="tanggal_pembelian" name="tanggal_pembelian" required>

            <label for="suplier_id">Supplier ID:</label>
            <input type="text" id="suplier_id" name="suplier_id" required>

            <label for="total">Total Harga:</label>
            <input type="text" id="total" name="total" readonly>

            <label for="bayar">Jumlah Bayar:</label>
            <input type="text" id="bayar" name="bayar" required>

            <label for="sisa">Sisa Pembayaran:</label>
            <input type="text" id="sisa" name="sisa" readonly>

            <label for="keterangan">Keterangan:</label>
            <textarea id="keterangan" name="keterangan"></textarea>
        </div>

        <!-- Daftar Produk -->
        <table class="product-table">
            <thead>
                <tr>
                    <th>Nama Produk</th>
                    <th>Harga Satuan</th>
                    <th>Jumlah</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <!-- Daftar produk akan ditampilkan di sini -->
            </tbody>
        </table>

        <!-- Tombol dan Fungsionalitas -->
        <div class="buttons">
            <button type="button" onclick="cetakNota()">Cetak Nota</button>
            <button type="button" onclick="selesai()">Selesai</button>
            <button type="button" onclick="batal()">Batal</button>
        </div>
    </div>

    <script src="script.js"></script> <!-- Menghubungkan ke file JavaScript -->

</body>

</html>


    <!-- Add your JavaScript code here -->
    
</body>

</html>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pembelian</title>

    <!-- Add your CSS link or include styles here -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fc;
        }

        h2 {
            text-align: center;
            margin-top: 20px;
            color: #007bff;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-top: 20px;
        }

        form {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        input,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>

<body>
    <!-- Rest of your HTML content -->
</body>

</html>


                        <!-- Earnings (Monthly) Card Example -->
                        
                       

                        <!-- Pending Requests Card Example -->
                     

    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

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

    <!-- Page level plugins -->
    <script src="sbadmin/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="sbadmin/js/demo/chart-area-demo.js"></script>
    <script src="sbadmin/js/demo/chart-pie-demo.js"></script>

</body>

</html>
    <!-- Custom styles for this template-->
    <link href="sbadmin/css/sb-admin-2.min.css" rel="stylesheet">
</head>

    