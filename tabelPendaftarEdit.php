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
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Data TKI</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Negara Tujuan:</h6>
                        <a class="collapse-item" href="tabelDataTKIHong.php">Hongkong</a>
                        <a class="collapse-item" href="tabelDataTKITaiw.php">Taiwan</a>
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

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-user-edit"></i>
                    <span>Test TKI</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Test TKI:</h6>
                        <a class="collapse-item" href="tabelSoal.php">Soal Test TKI</a>
                        <a class="collapse-item" href="tabelTest.php">Hasil Test TKI</a>
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
                        <h1 class="h3 mb-2 text-gray-800">Pendaftar</h1>
                    </div>
                    <p class="mb-4"><a href="#">Ingat!</a> Cek ulang seluruh isian form dengan benar dan sesuai setelah mengedit.
                    Pastikan berkas dengan format nama_umur_medicalcheck.jpg.
                    <p> Tekan <a href="tabelPendaftar.php"> BACK</a> untuk kembali ke halaman sebelumnya.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Form Edit Data Pendaftar</h6>
                        </div>
                        <div class="card-body">
                                <?php
                                    include 'config.php';
                                    $konektor = mysqli_connect("localhost","root","", "tki");
                                    $id_dft = $_GET['id_dft'];
                                    $data = mysqli_query($konektor,"SELECT * FROM pendaftaran INNER JOIN user ON pendaftaran.id = user.id WHERE id_dft='$id_dft'");
                                    while($d = mysqli_fetch_array($data)){
                                ?>
                                        <form method="post" action="tabelPendaftarEditProses.php" enctype="multipart/form-data">
                                            <fieldset>
                                                <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Tanggal Pendaftaran</label>
                                                    <div class="col-sm-10">
                                                    <input type="date" class="form-control" name="tgl_daftar" value="<?php echo $d['tgl_daftar']; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">No Telp / WA</label>
                                                    <div class="col-sm-10">
                                                        <input type="hidden" name="id_dft" value="<?php echo $d['id_dft']; ?>">
                                                        <input type="text" class="form-control" name="no_telp" value="<?php echo $d['no_telp']; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">NIK</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="nik" value="<?php echo $d['nik']; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Nama Lengkap TKI</label>
                                                    <div class="col-sm-10">
                                                
                                                        <td><input class="form-control" type="text" name="id" value="<?php echo $d['nama_lengkap']; ?>" readonly></td>
                                                        <td><input type="hidden" name="id_lama" class="form-control" value="<?php echo $d['id']; ?>"/></td>
                                                   
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Negara Tujuan</label>
                                                    <div class="col-sm-10">
                                                    <div class="input-group mb-3">
                                                            <select class="custom-select" id="inputGroupSelect02" name="id_negara">
                                                                <option value='1' <?php if($d['id_negara']== '1') echo "selected"?>>Hongkong</option>
                                                                <option value='2' <?php if($d['id_negara']== '2') echo "selected"?>>Taiwan</option>
                                                            </select>
                                                            <div class="input-group-append">
                                                                <label class="input-group-text" for="inputGroupSelect02">Options</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                                                    <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $d['tempat_lahir']; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                                    <div class="col-sm-10">
                                                    <input type="date" class="form-control" name="tanggal_lahir" value="<?php echo $d['tanggal_lahir']; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Umur</label>
                                                    <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="umur" value="<?php echo $d['umur']; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Alamat Lengkap</label>
                                                    <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="alamat_lengkap" value="<?php echo $d['alamat_lengkap']; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                                    <div class="col-sm-10">
                                                    <div class="input-group mb-3">
                                                            <select class="custom-select" id="inputGroupSelect02" name="jenis_kelamin">
                                                                <option value='Pria'<?php if($d['jenis_kelamin']== 'Pria') echo "selected"?>>Pria</option>
                                                                <option value='Wanita'<?php if($d['jenis_kelamin']== 'Wanita') echo "selected"?>>Wanita</option>
                                                            </select>
                                                            <div class="input-group-append">
                                                                <label class="input-group-text" for="inputGroupSelect02">Options</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">TB</label>
                                                    <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="tb" value="<?php echo $d['tb']; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">BB</label>
                                                    <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="bb" value="<?php echo $d['bb']; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
                                                    <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="pendidikan_terakhir" value="<?php echo $d['pendidikan_terakhir']; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Status</label>
                                                    <div class="col-sm-10">
                                                        <div class="input-group mb-3">
                                                            <select class="custom-select" id="inputGroupSelect02"  name="status">
                                                                <option value='Menikah' <?php if($d['status']== 'Menikah') echo "selected"?>>Menikah</option>
                                                                <option value='Belum Menikah' <?php if($d['status']== 'Belum Menikah') echo "selected"?>>Belum Menikah</option>
                                                                <option value='Cerai Hidup' <?php if($d['status']== 'Cerai Hidup') echo "selected"?>>Cerai Hidup</option>
                                                                <option value='Cerai Mati' <?php if($d['status']== 'Cerai Mati') echo "selected"?>>Cerai Mati</option>
                                                            </select>
                                                            <div class="input-group-append">
                                                                <label class="input-group-text" for="inputGroupSelect02">Options</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Agama</label>
                                                    <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="agama" value="<?php echo $d['agama']; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Pengalaman Kerja Ex/Non (Ex : Jika pernah bekerja di Luar Negeri | Non : Jika belum ada pengalaman kerja di Luar Negeri)</label>
                                                    <div class="col-sm-10">
                                                        <div class="input-group mb-3">
                                                            <select class="custom-select" id="inputGroupSelect02" name="pengalaman_kerja">
                                                                <option value="Ex"<?php if($d['pengalaman_kerja']== 'Ex') echo "selected"?>>Ex</option>
                                                                <option value="Non"<?php if($d['pengalaman_kerja']== 'Non') echo "selected"?>>Non</option>
                                                            </select>
                                                            <div class="input-group-append">
                                                                <label class="input-group-text" for="inputGroupSelect02">Options</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Nama Ayah</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="nama_ayah" value="<?php echo $d['nama_ayah']; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Pekerjaan Ayah</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="pekerjaan_ayah" value="<?php echo $d['pekerjaan_ayah']; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Nama Ibu</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="nama_ibu" value="<?php echo $d['nama_ibu']; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Pekerjaan Ibu</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="pekerjaan_ibu" value="<?php echo $d['pekerjaan_ibu']; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Jumlah Saudara Laki-laki</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="jml_brother" value="<?php echo $d['jml_brother']; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Jumlah Saudara Perempuan</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="jml_sister" value="<?php echo $d['jml_sister']; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Anak Nomor</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="anak_no" value="<?php echo $d['anak_no']; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Nama Pasangan</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="nama_pasangan" value="<?php echo $d['nama_pasangan']; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Pekerjaan Pasangan</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="pekerjaan_pasangan" value="<?php echo $d['pekerjaan_pasangan']; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Jumlah Anak</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="jml_anak" value="<?php echo $d['jml_anak']; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Umur Anak</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="umur_anak" value="<?php echo $d['umur_anak']; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Medical Check</label>
                                                    <div class="col-sm-10">
                                                    <img src="berkas/Medical/<?php echo $d['medical_check']; ?>" style="width: 150px;float: left;margin-bottom: 5px;">
                                                    <input type="file" name="medical_check">
                                                    <input type="hidden" name="medical_check_lama" value="<?php echo $d['medical_check']; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Pas Foto</label>
                                                    <div class="col-sm-10">
                                                    <img src="berkas/PasFoto/<?php echo $d['pas_foto']; ?>" style="width: 150px;float: left;margin-bottom: 5px;">
                                                    <input type="file" name="pas_foto">
                                                    <input type="hidden" name="pas_foto_lama" value="<?php echo $d['pas_foto']; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Status Proses</label>
                                                    <div class="col-sm-10">
                                                        <div class="input-group mb-3">
                                                            <select class="custom-select" id="inputGroupSelect02" name="id_tahapsatu">
                                                                <option value='1'<?php if($d['id_tahapsatu']== '1') echo "selected"?>>Diajukan</option>
                                                                <option value='2'<?php if($d['id_tahapsatu']== '2') echo "selected"?>>Diverifikasi</option>
                                                                <option value='3'<?php if($d['id_tahapsatu']== '3') echo "selected"?>>Diterima</option>
                                                                <option value='4'<?php if($d['id_tahapsatu']== '4') echo "selected"?>>Ditolak</option>
                                                            </select>
                                                            <div class="input-group-append">
                                                                <label class="input-group-text" for="inputGroupSelect02">Options</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>
                                                    <td></td>
                                                    <td><button type="submit" class="btn btn-primary btn-lg">Simpan</button></td>
                                                </p>		
                                            </fieldset>
                                        </form>
                                        <?php 
                                    }
                                ?>
                                <td><button type="cancel" class="btn btn-secondary btn-lg" onclick="javascript:window.location='tabelPendaftar.php';">Cancel</button></td>
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
                        <span>Copyright &copy; SIPTKI dibuat oleh Mahasiswa Polinema <i class="fas fa-graduation-cap"></i></span>
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
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>