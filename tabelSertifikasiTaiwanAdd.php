<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PT Hendrarta Argaraya - ADMIN</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="img\favicon.ico" />
    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

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
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="indexadmin.php">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-house-user"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SIP<sub>Admin</sub></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="indexadmin.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Pengaturan
            </div>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tabelManageUser.php">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Manage User</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Tenaga Kerja
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Data PMI</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Negara Tujuan:</h6>
                        <a class="collapse-item" href="tabelDataTKIHong.php">Hongkong</a>
                        <a class="collapse-item" href="tabelDataTKITaiw.php">Taiwan</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="tabelNegaraTujuan.php">
                    <i class="fas fa-fw fa-globe"></i>
                    <span>Negara Tujuan</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tabelPendaftar.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Pendaftar</span></a>
            </li>
            
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-certificate"></i>
                    <span>Sertifikasi PMI</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Sertifikasi PMI:</h6>
                        <a class="collapse-item" href="tabelSertifikasiHongkong.php">Sertifikasi PMI Hongkong</a>
                        <a class="collapse-item" href="tabelSertifikasiTaiwan.php">Sertifikasi PMI Taiwan</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-user-edit"></i>
                    <span>Test PMI</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Test PMI:</h6>
                        <a class="collapse-item" href="tabelSoal.php">Soal Test PMI</a>
                        <a class="collapse-item" href="tabelTest.php">Hasil Test PMI</a>
                    </div>
                </div>
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
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

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
                        <h1 class="h3 mb-2 text-gray-800">Sertifikasi Uji Kompetensi</h1>
                    </div>
                    <p class="mb-4"><a href="#">Wajib!</a> Isi seluruh form dengan benar dan sesuai. 
                    Upload berkas sertifikasi yang sesuai dengan format JPG/PNG (nama file: namaPMI_Sertifikasi.jpg). </p>
                    <p> Tekan <a href="tabelSertifikasiTaiwan.php">BACK</a> untuk kembali ke halaman sebelumnya.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Data Sertifikasi PMI</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <form method="post" action="tabelSertifikasiTaiwanAddProses.php" enctype="multipart/form-data">
                                <fieldset>
                                    <div class="form-group">			
                                        <label>Nama PMI</label>
                                        <select class="custom-select" id="inputGroupSelect02" name="id">
                                            <option selected>pilih nama lengkap...</option>
                                                <?php
                                                    include 'config.php';
                                                    $konektor = mysqli_connect("localhost","root","", "tki");
                                                    $no = 1;
                                                    $data = mysqli_query($konektor, "SELECT * FROM user");
                                                        while ($d = mysqli_fetch_array($data)) {
                                                ?>
                                                
                                                    <option value="<?=$d['id'];?>">
                                                        <?php echo $d['nama_lengkap']; ?>
                                                    </option>
                                                <?php
                                                    }
                                                ?>
                                            </select>
                                            <input type="hidden" name="id_sertif_taiw" value="<?php echo $d['id_sertif_taiw']; ?>">
                                    </div>
                                    <div class="form-group">			
                                        <label>Id Daftar</label>
                                        <select class="custom-select" id="inputGroupSelect02" name="id_dft">
                                            <option selected>pilih nama lengkap...</option>
                                                <?php
                                                    include 'config.php';
                                                    $konektor = mysqli_connect("localhost","root","", "tki");
                                                    $no = 1;
                                                    $data = mysqli_query($konektor, "SELECT * FROM pendaftaran INNER JOIN user ON pendaftaran.id = user.id");
                                                        while ($d = mysqli_fetch_array($data)) {
                                                ?>
                                                
                                                    <option value="<?=$d['id_dft'];?>">
                                                        <?php echo $d['nama_lengkap']; ?>
                                                    </option>
                                                <?php
                                                    }
                                                ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold">Perawatan Bayi</label>
                                        <p>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="pb1" name="perawatanbayi_taiw" value="rata-rata" class="custom-control-input">
                                            <label class="custom-control-label" for="pb1">Rata-rata</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="pb2" name="perawatanbayi_taiw" value="baik" class="custom-control-input">
                                            <label class="custom-control-label" for="pb2">Baik</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="pb3" name="perawatanbayi_taiw" value="baik sekali" class="custom-control-input">
                                            <label class="custom-control-label" for="pb3">Baik Sekali</label>
                                        </div>
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold">Peduli Anak-anak</label>
                                        <p>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="pa1" name="pedulianak_taiw" value="rata-rata" class="custom-control-input">
                                            <label class="custom-control-label" for="pa1">Rata-rata</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="pa2" name="pedulianak_taiw" value="baik" class="custom-control-input">
                                            <label class="custom-control-label" for="pa2">Baik</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="pa3" name="pedulianak_taiw" value="baik sekali" class="custom-control-input">
                                            <label class="custom-control-label" for="pa3">Baik Sekali</label>
                                        </div>
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold">Pekerjaan Rumah Tangga</label>
                                        <p>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="prt1" name="pekerjaanrt_taiw" value="rata-rata" class="custom-control-input">
                                            <label class="custom-control-label" for="prt1">Rata-rata</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="prt2" name="pekerjaanrt_taiw" value="baik" class="custom-control-input">
                                            <label class="custom-control-label" for="prt2">Baik</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="prt3" name="pekerjaanrt_taiw" value="baik sekali" class="custom-control-input">
                                            <label class="custom-control-label" for="prt3">Baik Sekali</label>
                                        </div>
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold">Perawatan Orangtua / Cacat</label>
                                        <p>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="poc1" name="perawatanortu_taiw" value="rata-rata" class="custom-control-input">
                                            <label class="custom-control-label" for="poc1">Rata-rata</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="poc2" name="perawatanortu_taiw" value="baik" class="custom-control-input">
                                            <label class="custom-control-label" for="poc2">Baik</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="poc3" name="perawatanortu_taiw" value="baik sekali" class="custom-control-input">
                                            <label class="custom-control-label" for="poc3">Baik Sekali</label>
                                        </div>
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold">Memasak</label>
                                        <p>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="memasak1" name="memasak_taiw" value="rata-rata" class="custom-control-input">
                                            <label class="custom-control-label" for="memasak1">Rata-rata</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="memasak2" name="memasak_taiw" value="baik" class="custom-control-input">
                                            <label class="custom-control-label" for="memasak2">Baik</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="memasak3" name="memasak_taiw" value="baik sekali" class="custom-control-input">
                                            <label class="custom-control-label" for="memasak3">Baik Sekali</label>
                                        </div>
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold">Berbicara Bahasa Inggris</label>
                                        <p>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="i1" name="inggris_taiw" value="rata-rata" class="custom-control-input">
                                            <label class="custom-control-label" for="i1">Rata-rata</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="i2" name="inggris_taiw" value="baik" class="custom-control-input">
                                            <label class="custom-control-label" for="i2">Baik</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="i3" name="inggris_taiw" value="baik sekali" class="custom-control-input">
                                            <label class="custom-control-label" for="i3">Baik Sekali</label>
                                        </div>
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold">Berbicara Bahasa Kantonis</label>
                                        <p>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="k1" name="kantonis_taiw" value="rata-rata" class="custom-control-input">
                                            <label class="custom-control-label" for="k1">Rata-rata</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="k2" name="kantonis_taiw" value="baik" class="custom-control-input">
                                            <label class="custom-control-label" for="k2">Baik</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="k3" name="kantonis_taiw" value="baik sekali" class="custom-control-input">
                                            <label class="custom-control-label" for="k3">Baik Sekali</label>
                                        </div>
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold">Berbicara Bahasa Mandarin</label>
                                        <p>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="m1" name="mandarin_taiw" value="rata-rata" class="custom-control-input">
                                            <label class="custom-control-label" for="m1">Rata-rata</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="m2" name="mandarin_taiw" value="baik" class="custom-control-input">
                                            <label class="custom-control-label" for="m2">Baik</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="m3" name="mandarin_taiw" value="baik sekali" class="custom-control-input">
                                            <label class="custom-control-label" for="m3">Baik Sekali</label>
                                        </div>
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <label>Sertifikasi Uji Kompetensi</label>
                                        <td><input type="file" name="keahlian_taiw" class="form-control"/></td>
                                        <input type="hidden" name="keahlian_taiw_lama" class="form-control"/>
                                    </div>
                                    <div class="form-group">
                                        <td>Keterangan</td>
                                        <td><input type="text" class="form-control" name="note_taiw"></td>
                                    </div>
                                    <p>
                                        <td></td>
                                        <td><button type="submit" class="btn btn-primary btn-lg">Simpan</button></td>
                                        <td><button type="button" class="btn btn-secondary btn-lg" onclick="javascript:window.location='tabelSertifikasiTaiwan.php';">Cancel</button></td>
                                    </p>		
                                    </fieldset>
                                </form>
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
                        <span aria-hidden="true">??</span>
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
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>