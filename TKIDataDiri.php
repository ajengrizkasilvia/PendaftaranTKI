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
                        <a class="collapse-item" href="TKISertifikasiHongkong.php">Sertifikasi PMI Hongkong</a>
                        <a class="collapse-item" href="TKISertifikasiTaiwan.php">Sertifikasi PMI Taiwan</a>
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
                        <h1 class="h3 mb-2 text-gray-800">Halaman Data Diri</h1>
                    </div>
                    <p>Berikut merupakan data diri anda. Apabila ada data yang tidak sesuai silahkan konfirmasi ke Admin. 
                        Cek status proses untuk mengetahui proses anda.</p>
                    <ul class="breadcrumb">
                        <li><a href="indextki.php">Beranda</a> <span class="divider">/</span></li>
                        <li class="active"> Data Diri</li>
                    </ul>
                    <?php
                        $konektor = mysqli_connect("localhost","root","", "tki");
                        $username = $_SESSION['username'];
                            $data = mysqli_query($konektor,"SELECT * FROM pendaftaran 
                                                            INNER JOIN tahapsatu ON pendaftaran.id_tahapsatu = tahapsatu.id_tahapsatu
                                                            INNER JOIN user ON pendaftaran.id = user.id WHERE username='$username'");
                            while($d = mysqli_fetch_array($data)){
                            
                            if($d['keterangan'] == 'diajukan'){ 
                        ?>
                            <div class="alert alert-warning">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                Status <strong>"Diajukan!"</strong> periksa kembali data anda dengan benar.
                            </div>
                        <?php
                        } else if($d['keterangan'] == 'diverifikasi'){ 
                        ?>   
                             <div class="alert alert-info">
                                 <button type="button" class="close" data-dismiss="alert">&times;</button>
                                 Status <strong>"Diverifikasi!"</strong> harap tunggu data anda diperiksa.
                             </div>
                        <?php
                         } else if ($d['keterangan'] == 'diterima'){
                        ?>
                             <div class="alert alert-success">
                                 <button type="button" class="close" data-dismiss="alert">&times;</button>
                                 Status <strong>"Diterima!"</strong> Selamat anda telah memenuhi persyaratan pendaftaran.
                             </div>
                        <?php
                         } else if($d['keterangan'] == 'ditolak'){
                        ?>
                             <div class="alert alert-danger">
                                 <button type="button" class="close" data-dismiss="alert">&times;</button>
                                 Status <strong>"Ditolak!"</strong> mohon maaf anda belum memenuhi persyaratan pendaftaran.
                             </div>
                        <?php
                         }
                        }
                        ?>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Diri PMI</h6><br>
                        </div>
                        <div class="card-body">
                        <?php 
                            include 'config.php';
                            $konektor = mysqli_connect("localhost","root","", "tki");
                            $no = 1;
                            $username = $_SESSION['username'];
                            $data = mysqli_query($konektor,"SELECT * FROM pendaftaran
                                                            INNER JOIN negara ON pendaftaran.id_negara = negara.id_negara
                                                            INNER JOIN tahapsatu ON pendaftaran.id_tahapsatu = tahapsatu.id_tahapsatu
                                                            INNER JOIN user ON pendaftaran.id = user.id WHERE username='$username'");
                            while($d = mysqli_fetch_array($data)){
                        ?>
                        <table class="table table-bordered">
                            
                            <tbody>
                                <tr>    
                                    <th>Tanggal Pendaftaran</th>
                                        <td><?php echo $d['tgl_daftar']; ?></td>
                                </tr>
                                <tr>
                                    <th>No Telp</th>
                                        <td><?php echo $d['no_telp']; ?></td>
                                </tr>
                                <tr>    
                                    <th >NIK</th>
                                        <td><?php echo $d['nik']; ?></td>
                                </tr>
                                <tr>
                                    <th>Nama Lengkap</th>
                                        <td><?php echo $d['nama_lengkap']; ?></td>
                                </tr> 
                                <tr>   
                                    <th>Negara Tujuan</th>
                                        <td><?php echo $d['negara_tujuan']; ?></td>
                                </tr>
                                <tr>    
                                    <th>Tempat Lahir</th>
                                        <td><?php echo $d['tempat_lahir']; ?></td>
                                </tr>
                                <tr>    
                                    <th>Tanggal Lahir</th>
                                        <td><?php echo $d['tanggal_lahir']; ?></td>
                                </tr>
                                <tr>
                                    <th>Umur</th>
                                        <td><?php echo $d['umur']; ?></td>
                                </tr>
                                <tr>
                                    <th>Alamat Lengkap</th>
                                        <td><?php echo $d['alamat_lengkap']; ?></td>
                                </tr>
                                <tr>
                                    <th>Jenis Kelamin</th>
                                        <td><?php echo $d['jenis_kelamin']; ?></td>
                                </tr>
                                <tr>
                                    <th>Tinggi Badan</th>
                                        <td><?php echo $d['tb']; ?></td>
                                </tr>
                                <tr>
                                    <th>Berat Badan</th>
                                        <td><?php echo $d['bb']; ?></td>
                                </tr>
                                <tr>
                                    <th>Pendidikan Terakhir</th>
                                        <td><?php echo $d['pendidikan_terakhir']; ?></td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                        <td><?php echo $d['status']; ?></td>
                                </tr>
                                <tr>
                                    <th>Agama</th>
                                        <td><?php echo $d['agama']; ?></td>
                                </tr>
                                <tr>
                                    <th>Pengalaman Kerja</th>
                                        <td><?php echo $d['pengalaman_kerja']; ?></td>
                                </tr>
                                <tr>
                                    <th>Nama Ayah</th>
                                    <td><?php echo $d['nama_ayah']; ?></td>
                                </tr>
                                <tr>
                                    <th>Pekerjaan Ayah</th>
                                    <td><?php echo $d['pekerjaan_ayah']; ?></td>
                                </tr>
                                <tr>
                                    <th>Nama Ibu</th>
                                    <td><?php echo $d['nama_ibu']; ?></td>
                                </tr>
                                <tr>
                                    <th>Pekerjaan Ibu</th>
                                    <td><?php echo $d['pekerjaan_ibu']; ?></td>
                                </tr>
                                <tr>
                                    <th>Jumlah Saudara Laki-laki</th>
                                    <td><?php echo $d['jml_brother']; ?></td>
                                </tr>
                                <tr>
                                    <th>Jumlah Saudara Perempuan</th>
                                    <td><?php echo $d['jml_sister']; ?></td>
                                </tr>
                                <tr>
                                    <th>Anak Nomor</th>
                                    <td><?php echo $d['anak_no']; ?></td>
                                </tr>
                                <tr>
                                    <th>Nama Pasangan</th>
                                    <td><?php echo $d['nama_pasangan']; ?></td>
                                </tr>
                                <tr>
                                    <th>Pekerjaan Pasangan</th>
                                    <td><?php echo $d['pekerjaan_pasangan']; ?></td>
                                </tr>
                                <tr>
                                    <th>Jumlah Anak</th>
                                    <td><?php echo $d['jml_anak']; ?></td>
                                </tr>
                                <tr>
                                    <th>Umur Anak</th>
                                    <td><?php echo $d['umur_anak']; ?> tahun</td>
                                </tr>
                                <tr>
                                    <th>Medical Check</th>
                                        <td><img src="berkas/Medical/<?php echo $d['medical_check']; ?>" style="width: 150px;"></td>
                                </tr>
                                <tr>
                                    <th>Pas Foto</th>
                                        <td><img src="berkas/PasFoto/<?php echo $d['pas_foto']; ?>" style="width: 150px;"></td>
                                </tr>
                                <tr>
                                    <th>Status Proses</th>
                                    <td> 
                                        <?php
                                            {
                                                if($d['keterangan'] == 'diajukan'){ 
                                            ?>
                                                <span class="badge badge-pill badge-warning">Diajukan</span>
                                            <?php
                                                } else if($d['keterangan'] == 'diverifikasi'){ 
                                            ?>   
                                                <span class="badge badge-pill badge-info">Diverifikasi</span>
                                            <?php
                                                } else if ($d['keterangan'] == 'diterima'){
                                            ?>
                                                <span class="badge badge-pill badge-success">Diterima</span>
                                            <?php
                                                } else if($d['keterangan'] == 'ditolak'){
                                            ?>
                                                <span class="badge badge-pill badge-danger">Ditolak</span>
                                            <?php
                                                }
                                            }
                                        ?>
                                    </td>
                                </tr>
                            <tbody>
                            </table>
                        <?php 
                            }
                        ?>
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
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>