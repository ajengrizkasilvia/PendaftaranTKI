<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PT Hendrarta Argaraya - TKI</title>
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
                <div class="sidebar-brand-text mx-3">SIP<sub>TKI</sub></div>
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
                        <h6 class="collapse-header">Data TKI</h6>
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
                        <h6 class="collapse-header">Sertifikasi TKI:</h6>
                        <a class="collapse-item" href="tabelSertifikasiHongkong.php">Sertifikasi TKI Hongkong</a>
                        <a class="collapse-item" href="tabelSertifikasiTaiwan.php">Sertifikasi TKI Taiwan</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="TKITest.php">
                    <i class="fas fa-fw fa-user-edit"></i>
                    <span>Test TKI</span></a>
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
            <!-- Begin Page Content -->
            <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-2 text-gray-800">TKI Hongkong</h1>
            </div>
            <p class="mb-4"><a href="#">Ingat!</a> Cek ulang seluruh isian form dengan berkas-berkas yang benar dan sesuai.
            Pastikan berkas dengan format namaBerkas_negaraTujuan. 
            <p> Tekan <a href="TKIUploadBerkasHongkong.php">BACK</a> untuk kembali ke halaman sebelumnya.</p>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Form Edit Berkas TKI Hongkong</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <?php
                            include 'config.php';
                            $konektor = mysqli_connect("localhost","root","", "tki");
                            $id_hongkong = $_GET['id_hongkong'];
                            $data = mysqli_query($konektor,"SELECT * FROM hongkong INNER JOIN user ON hongkong.id = user.id WHERE id_hongkong='$id_hongkong'");
                            while($d = mysqli_fetch_array($data)){
                        ?>
                                <form method="post" action="TKIUploadBerkasHongkongEditProses.php" enctype="multipart/form-data">
                                <table>
                                        <tr>			
                                            <td>Nama TKI</td>
                                            <td class="form-control">
                                                <?php echo $d['nama_lengkap']; ?>
                                            </td>
                                            <input type="hidden" name="id_hongkong" value="<?php echo $d['id_hongkong']; ?>">
                                            <td><input type="hidden" name="id" class="form-control" value="<?php echo $d['nama_lengkap']; ?>"/></td>
                                            <td><input type="hidden" name="id_lama" class="form-control" value="<?php echo $d['id']; ?>"/></td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Sektor</td>
                                            <td><input type="text" class="form-control" name="sektor_hk" value="<?php echo $d['sektor_hk']; ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>E-KTP</td>
                                            <td>
                                                <img src="berkas/Hongkong/<?php echo $d['ektp_hk']; ?>" style="width: 120px;float: left;margin-bottom: 5px;">
                                                <input type="file" name="ektp_hk"></td>
                                                <input type="hidden" name="ektp_hk_lama" value="<?php echo $d['ektp_hk']; ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Kartu Keluarga</td>
                                            <td>
                                                <img src="berkas/Hongkong/<?php echo $d['kk_hk']; ?>" style="width: 120px;float: left;margin-bottom: 5px;">
                                                <input type="file" name="kk_hk"></td>
                                                <input type="hidden" name="kk_hk_lama" value="<?php echo $d['kk_hk']; ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Akta Kelahiran</td>
                                            <td>
                                                <img src="berkas/Hongkong/<?php echo $d['akte_hk']; ?>" style="width: 120px;float: left;margin-bottom: 5px;">
                                                <input type="file" name="akte_hk"/></td>
                                                <input type="hidden" name="akte_hk_lama" value="<?php echo $d['akte_hk']; ?>"/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Surat Menikah</td>
                                            <td>
                                                <img src="berkas/Hongkong/<?php echo $d['suratnikah_hk']; ?>" style="width: 120px;float: left;margin-bottom: 5px;">
                                                <input type="file" name="suratnikah_hk"/></td>
                                                <input type="hidden" name="suratnikah_hk_lama" value="<?php echo $d['suratnikah_hk']; ?>"/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Surat Ijin Ortu/Suami</td>
                                            <td>
                                                <img src="berkas/Hongkong/<?php echo $d['suratijin_hk']; ?>" style="width: 120px;float: left;margin-bottom: 5px;">
                                                <input type="file" name="suratijin_hk"/></td>
                                                <input type="hidden" name="suratijin_hk_lama" value="<?php echo $d['suratijin_hk']; ?>" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ex Paspor</td>
                                            <td>
                                                <img src="berkas/Hongkong/<?php echo $d['expaspor_hk']; ?>" style="width: 120px;float: left;margin-bottom: 5px;">
                                                <input type="file" name="expaspor_hk"/></td>
                                                <input type="hidden" name="expaspor_hk_lama" value="<?php echo $d['expaspor_hk']; ?>"/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>SKCK</td>
                                            <td>
                                                <img src="berkas/Hongkong/<?php echo $d['skck_hk']; ?>" style="width: 120px;float: left;margin-bottom: 5px;">
                                                <input type="file" name="skck_hk"/></td>
                                                <input type="hidden" name="skck_hk_lama" value="<?php echo $d['skck_hk']; ?>"/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Rekom Id</td>
                                            <td>
                                                <img src="berkas/Hongkong/<?php echo $d['kartukuning_hk']; ?>" style="width: 120px;float: left;margin-bottom: 5px;">
                                                <input type="file" name="kartukuning_hk"/></td>
                                                <input type="hidden" name="kartukuning_hk_lama" value="<?php echo $d['kartukuning_hk']; ?>"/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Biometri</td>
                                            <td>
                                                <img src="berkas/Hongkong/<?php echo $d['biometri_hk']; ?>" style="width: 120px;float: left;margin-bottom: 5px;">
                                                <input type="file" name="biometri_hk"/></td>
                                                <input type="hidden" name="biometri_hk_lama" value="<?php echo $d['biometri_hk']; ?>"/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Status Proses</td>
                                            <td>
                                                <select class="form-control" name="id_tahapdua">
                                                <option>--Atur ulang klik ajukan status proses--</option>
                                                <option value='1'>Diajukan</option>
                                                </select>  
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Keterangan</td>
                                            <td><input type="text" class="form-control" name="keterangan_hk" value="<?php echo $d['keterangan_hk']; ?>"></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><input type="submit" value="SIMPAN"></td>
                                        </tr>		
                                    </table>
                                </form>
                                <?php 
                            }
                        ?>
                    </div>
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
                        <span>Copyright &copy; PT Hendrarta Argaraya 2021</span>
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