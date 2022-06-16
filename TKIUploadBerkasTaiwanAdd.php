<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PT Hendrarta Argaraya - PMI</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="img\favicon.ico" />
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
    <?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['role']==""){
		header("location:login.php?pesan=gagal");
	}
 
	?>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="indextki.php">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-house-user"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SIP<sub>PMI</sub></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="indextki.php">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Beranda</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="TKIFormDaftar.php">
                    <i class="fas fa-fw fa-edit"></i>
                    <span>Form Pendaftaran</span></a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>General</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data PMI</h6>
                        <a class="collapse-item" href="TKIDataDiri.php">Data Diri</a>
                        <a class="collapse-item" href="TKIUploadBerkasHongkong.php">Lengkapi Hongkong</a>
                        <a class="collapse-item" href="TKIUploadBerkasTaiwan.php">Lengkapi Taiwan</a>
                    </div>
                </div>
            </li>

             <!-- Nav Item - Pages Collapse Menu -->
             <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-certificate"></i>
                    <span>Sertifikasi</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Sertifikasi PMI:</h6>
                        <a class="collapse-item" href="tabelSertifikasiHongkong.php">Sertifikasi PMI Hongkong</a>
                        <a class="collapse-item" href="tabelSertifikasiTaiwan.php">Sertifikasi PMI Taiwan</a>
                    </div>
                </div>
            </li>
            
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="TKITest.php">
                    <i class="fas fa-fw fa-user-edit"></i>
                    <span>Test PMI</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

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
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['username']; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                </a>
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

                <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-2 text-gray-800">Upload Berkas PMI Taiwan</h1>
                </div>
                <p class="mb-4"><a href="#">Harus!</a> Isi seluruh form dengan berkas-berkas yang sesuai. 
                    Upload berkas dengan format namaPMI_negaraTujuan_namaBerkas.jpg.
                <p> Tekan <a href="TKIUploadBerkasTaiwan.php">BACK</a> untuk kembali ke halaman sebelumnya.</p>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Berkas PMI</h6>
                    </div>
                    <div class="card-body">
                            <form method="post" action="TKIUploadBerkasTaiwanAddProses.php" enctype="multipart/form-data">
                                <fieldset>
                                    <div class="form-group">			
                                        <label>Nama PMI</label>
                                        <?php 
                                                    include 'config.php';
                                                    $konektor = mysqli_connect("localhost","root","", "tki");
                                                    $no = 1;
                                                    $username = $_SESSION['username'];
                                                    $data = mysqli_query($konektor,"SELECT * FROM user WHERE username='$username'");
                                                    while($d = mysqli_fetch_array($data)){
                                                ?>
                                                <td><input type="hidden" name="id_taiwan" value="<?php echo $d['id_taiwan']; ?>"></td>
                                                <td><input class="form-control" type="text" name="id" value="<?php echo $d['nama_lengkap']; ?>" readonly></td>
                                                <td><input type="hidden" name="id_lama" class="form-control" value="<?php echo $d['id']; ?>"/></td>
                                                <?php
                                                    }
                                                ?>
                                            
                                    </div>
                                    <div class="form-group">
                                        <label>Sektor</label>
                                        <td><input type="text" name="sektor_taiw" class="form-control" placeholder="Masukkan Sektor"/></td>
                                    </div>
                                    <div class="form-group">
                                        <label>E-KTP</label>
                                        <td><input type="file" name="ektp_taiw" class="form-control"/></td>
                                        <input type="hidden" name="ektp_taiw_lama">
                                    </div>
                                    <div class="form-group">
                                        <label>Kartu Keluarga</label>
                                        <td><input type="file" name="kk_taiw" class="form-control"/></td>
                                        <input type="hidden" name="kk_taiw_lama">
                                    </div>
                                    <div class="form-group">
                                        <label>Akta Kelahiran</label>
                                        <td><input type="file" name="akte_taiw" class="form-control"/></td>
                                        <input type="hidden" name="akte_taiw_lama">
                                    </div>
                                    <div class="form-group">
                                        <label>Surat Keterangan Status/Surat Menikah</label>
                                        <td><input type="file" name="suratnikah_taiw" class="form-control"/></td>
                                        <input type="hidden" name="suratnikah_taiw_lama">
                                    </div>
                                    <div class="form-group">
                                        <label>Surat Ijin Ortu/Suami</label>
                                        <td><input type="file" name="suratijin_taiw" class="form-control"/></td>
                                        <input type="hidden" name="suratijin_taiw_lama">
                                    </div>
                                    <div class="form-group">
                                        <label>Ijazah asli</label>
                                        <td><input type="file" name="ijazah_taiw" class="form-control"/></td>
                                        <input type="hidden" name="ijazah_taiw_lama">
                                    </div>
                                    <div class="form-group">
                                        <label>Ex Paspor</label>
                                        <td><input type="file" name="expaspor_taiw" class="form-control"/></td>
                                        <input type="hidden" name="expaspor_taiw_lama">
                                    </div>
                                    <div class="form-group">
                                        <td>SKCK</td>
                                        <td><input type="file" name="skck_taiw" class="form-control"/></td>
                                        <input type="hidden" name="skck_taiw_lama">
                                    </div>
                                    <div class="form-group">
                                        <td>Kartu Kuning</td>
                                        <td><input type="file" name="kartukuning_taiw" class="form-control"/></td>
                                        <input type="hidden" name="kartukuning_taiw_lama">
                                    </div>
                                    <div class="form-group">
                                        <td>Biometri</td>
                                        <td><input type="file" name="biometri_taiw" class="form-control"/></td>
                                        <input type="hidden" name="biometri_taiw_lama">
                                    </div>
                                    <div class="form-group">
                                        <label>Status Proses</label>
                                        <div class="input-group mb-3">
                                            <select class="custom-select" id="inputGroupSelect02" name="id_tahapdua">
                                                <option selected>pilih ajukan status proses...</option>
                                                <option value='1'>Diajukan</option>
                                            </select>
                                            <div class="input-group-append">
                                                <label class="input-group-text" for="inputGroupSelect02">Options</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <td>Keterangan</td>
                                        <td><input type="text" class="form-control" name="keterangan_taiw" readonly></td>
                                    </div>
                                    <p>
                                        <td></td>
                                        <td><button type="submit" class="btn btn-primary btn-lg">SIMPAN</button></td>
                                    </p>		
                                </fieldset>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; SIPPMI dibuat oleh Mahasiswa Polinema <i class="fas fa-graduation-cap"></i></span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
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
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>