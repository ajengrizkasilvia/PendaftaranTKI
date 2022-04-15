<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>PT Hendrarta Argaraya</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="index.php">PT. Hendrarta Argaraya</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home Page</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php">Negara Tujuan</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php">Tentang Kami</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="#formdaftar">Daftar Disini!</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome To PT Hendrarta Argaraya !</div>
                <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="login.php">Sign In</a>
            </div>
        </header>
        <!-- Form Daftar-->
        <section class="page-section" id="formdaftar">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">FORM PENDAFTARAN TKI</h2>
                    <h3 class="section-subheading text-muted">Silahkan isi data disini</h3>
                </div>
                
                    <form method="post" action="TKIFormDaftarProses.php">
                        <fieldset>
                            <div class="form-group">			
                                <label>NIK</label>
                                <td>
                                <input type="hidden" name="id_dft" value="<?php echo $d['id_dft']; ?>">
                                <input type="text" name="nik" class="form-control" placeholder="Masukkan NIK"/>
                                </td>
                            </div>
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <td><input type="text" name="nama_lengkap" class="form-control" placeholder="Masukkan nama lengkap"/></td>
                            </div>
                            <div class="form-group">
                                <label>Negara Tujuan</label>
                                <td>
                                <select class="form-control" name="id_negara">
                                <option>--pilih negara tujuan--</option>
                                <option value='1'>Hongkong</option>
                                <option value='2'>Taiwan</option>
                                <option value='3'>Singapore</option>
                                <option value='4'>Malaysia</option>
                                </select>   
                                </td>
                            </div>
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <td><input type="text" name="tempat_lahir" class="form-control" class="form-control" placeholder="Masukkan tempat lahir"/></td>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <td><input type="text" name="tanggal_lahir" class="form-control" placeholder="Masukkan tanggal lahir yy/mm/dd"/></td>
                            </div>
                            <div class="form-group">
                                <label>Umur</label>
                                <td><input type="text" name="umur" class="form-control"  placeholder="Masukkan umur"/></td>
                            </div>
                            <div class="form-group">
                                <label>Alamat Lengkap</label>
                                <td><input type="text" name="alamat_lengkap" class="form-control" placeholder="Masukkan alamat lengkap"/></td>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <td>
                                    <select class="form-control" name="jenis_kelamin">
                                    <option>--pilih jenis kelamin--</option>
                                    <option>Pria</option>
                                    <option>Wanita</option>
                                    </select>   
                                </td>
                            </div>
                            <div class="form-group">
                                <label>TB</label>
                                <td><input type="text" name="tb" class="form-control" placeholder="Masukkan tinggi badan"/></td>
                            </div>
                            <div class="form-group">
                                <label>BB</label>
                                <td><input type="text" name="bb" class="form-control" placeholder="Masukkan berat badan"/></td>
                            </div>
                            <div class="form-group">
                                <label>Pendidikan Terakhir</label>
                                <td><input type="text" name="pendidikan_terakhir" class="form-control" placeholder="Masukkan pendidikan terakhir"/></td>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <td>
                                    <select class="form-control" name="status">
                                    <option>--pilih status--</option>
                                    <option>Menikah</option>
                                    <option>Belum Menikah</option>
                                    <option>Cerai Hidup</option>
                                    <option>Cerai Mati</option>
                                    </select>   
                                </td>
                            </div>
                            <div class="form-group">
                                <label>Agama</label>
                                <td><input type="text" name="agama" class="form-control" placeholder="Masukkan agama"/></td>
                            </div>
                            <div class="form-group">
                                <label>Pengalaman Kerja</label>
                                <td><input type="text" name="pengalaman_kerja" class="form-control" placeholder="Masukkan pengalaman kerja"/></td>
                            </div>
                            <div>
                                <br>
                                <td><input type="submit" value="Kirim"></td>
                            </div>		
                        </fieldset>
                    </form>
            </div>
        </section>
        
        
       <!-- Contact-->
       <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <h5 class="section-heading text-uppercase">Alamat</h5>
                                <p class="section-heading text-uppercase">Jl. Papa Hijau No.21, Tulusrejo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141</p>
                            </div>
                            <div class="form-group">
                                <!-- Name input-->
                                <h5 class="section-heading text-uppercase">No. Telp</h5>
                                <p class="section-heading text-uppercase">(0341) 470411</p>
                            </div>
                            <div class="form-group">
                                <!-- Name input-->
                                <h5 class="section-heading text-uppercase">Buka</h5>
                                <p class="section-heading text-uppercase">Monday 9AM–4PM</p>
                                <p class="section-heading text-uppercase">Tuesday 9AM–4PM</p>
                                <p class="section-heading text-uppercase">Thursday 9AM–4PM</p>
                                <p class="section-heading text-uppercase">Wednesday 9AM–4PM</p>
                                <p class="section-heading text-uppercase">Friday 9AM–4PM</p>
                                <p class="section-heading text-uppercase">Saturday 9AM–4PM</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                            <p>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.5285256472375!2d112.62433531477909!3d-7.944206494277823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629dc485b4d4b%3A0x1cff56dd621f9e2f!2sPT%20Hendrarta%20Argaraya!5e0!3m2!1sen!2sid!4v1635342494124!5m2!1sen!2sid" width="620" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </p>
                            </div>
                        </div>
                    </div>
                    </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Pt Hendrarta Argaraya 2021</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
            <!-- Core theme JS-->
            <script src="js/scripts.js"></script>
            <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
            <!-- * *                               SB Forms JS                               * *-->
            <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
            <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>