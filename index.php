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
                        <li class="nav-item"><a class="nav-link" href="#content">Home Page</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Negara Tujuan</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">Tentang Kami</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Kontak</a></li>
                        <li class="nav-item"><a class="nav-link" href="alurDaftar.php">Alur Pendaftaran</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome To PT Hendrarta Argaraya !</div>
                <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="login.php">LOGIN DISINI!</a>
            </div>
        </header>
        <!-- Content-->
        <section class="page-section" id="content">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Mitra untuk Sukses di Luar Negeri</h2>
                    <h3 class="section-subheading text-muted">Partners for Success Abroad</h3>
                    <h3 class="section-subheading text-muted">PT Hendrarta Argaraya merupakan Perusahaan Penempatan Pekerja Migran Indonesia Swasta (P3MIS)
                                                            yang telah mendapat ijin dan pengakuan resmi Pemerintah Indonesia untuk melakukan kegiatan 
                                                            perekrutan calon tenaga kerja, pendidikan dan pelatihan, dan penempatan kerja diluar negeri.</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-award fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Visi Misi</h4>
                        <p class="text-muted">Menjadi salah satu perusahaan jasa tenaga kerja yang terbaik di Indonesia.          
                        Menjalin kerjasama dengan Mitra Luar Negeri yang berkualitas.
                        Mengedepankan etos kerja, skill dan etika yang baik sebagai cerminan martabat Bangsa.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-clipboard-check fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Legalitas</h4>
                        <p class="text-muted">PT. Hendrarta Argaraya adalah Perusahaan Pelaksana Penempatan Pekerja Migran Indonesia Swasta (P3MIS) yang resmi sebagaimana tercantum 
                            dengan Nomor izin : 258 Tahun 2012, tanggal: 31 Mei 2012 yang telah mendapatkan ijin dan pengakuan resmi Pemerintah Indonesia untuk melakukan kegiatan perekrutan calon pekerja migran, pendidikan, pelatihan dan penempatan kerja di luar negeri.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-chalkboard-teacher fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Motto</h4>
                        <p class="text-muted">Memberikan sistem Pelayanan yang Cepat, Tepat dan Akurat untuk setiap Proses.
                            Menjamin Kepuasan Mitra Kerja di Dalam Negeri maupun Luar Negeri.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
                          
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Negara Tujuan</h2>
                    <h3 class="section-subheading text-muted">Country Of Destination.</h3>
                </div>
                        <?php
                        include 'config.php';
                        $konektor = mysqli_connect("localhost","root","", "tki");
		                $data = mysqli_query($konektor,"SELECT * FROM negara");
                        $no = 1;
		                while($d = mysqli_fetch_array($data)){
			            ?>
                <div class="row text-center">
                    <div class="row-md-4">
                        <a  href="indexNegara.php?id_negara=<?php echo $d['id_negara']; ?>">        
                        <img src="gambar/<?php echo $d['gambar_negara']; ?>" style="width: 500px;">
                            </a>
                        <h4 class="my-3"><?php echo $d['negara_tujuan']; ?></h4><br><br>
                        </div>
                        </div>
                    <?php 
		            }
		            ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Tentang Kami</h2>
                    <h3 class="section-subheading text-muted">About Us</h3>
                    <h3 class="section-subheading text-muted">Banyak kegiatan-kegiatan tambahan selama mengikuti proses penempatan
                        anda bekerja ke luar negeri, akan mendidik dan menghibur anda dengan baik dan nayaman.
                    </h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/gb1.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4></h4>
                                <h4 class="subheading">Pendidikan dan Pelatihan</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted"> Sarana da Prasarana BLK-LN terlengkap dan modern, kurikulum standart nasional orientasi luar negeri,
                                                                            pola belajar mengajar dan berlatih yang mudah cepat dan akurat. Tidak ada yang sulit dan semua menjadi mudah
                                                                            mempersiapkan diri di BLK-LN kami. Karena kami berpengalaman dan tahu cara mempersiapkan semua calon tenaga kerja untuk bisa meraih sukses.
                            </p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4></h4>
                                <h4 class="subheading">Pengajian dan Ceramah Agama</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Penyelenggaraan atau kegiatan belajar agama Islam yang dibimbing atau 
                                                                            diberikan oleh seorang guru ngaji (da'i) di lingkungan kami. </p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/gb2.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4></h4>
                                <h4 class="subheading">Asrama</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Asrama dengan berbagai fasilitas dan kemudahan untuk tenaga kerja.
                                                                            Semua fasilitas memberikan kenyamanan dan kesenangan berada dalam di lingkungan kami.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/gb4.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4></h4>
                                <h4 class="subheading">Olahraga dan Permainan</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Olahraga yg pada dasarnya adalah permainan yang dilakukan setiap hari minggu. Seperti kegiatan olahraga permainan bola, olahraga permainan voli.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Be Part
                                <br />
                                Of Our
                                <br />
                                Story!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Kontak Kami</h2>
                    <h3 class="section-subheading text-muted">Contact Us</h3>
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
                                <p class="section-heading text-uppercase">Monday 9AM???4PM</p>
                                <p class="section-heading text-uppercase">Tuesday 9AM???4PM</p>
                                <p class="section-heading text-uppercase">Thursday 9AM???4PM</p>
                                <p class="section-heading text-uppercase">Wednesday 9AM???4PM</p>
                                <p class="section-heading text-uppercase">Friday 9AM???4PM</p>
                                <p class="section-heading text-uppercase">Saturday 9AM???4PM</p>
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
                    <div class="col-lg-4 text-lg-start">Copyright &copy; SIPPMI dibuat oleh Mahasiswa Polinema <i class="fas fa-graduation-cap"></i></div>
                    <!-- <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div> -->
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Hong kong</h2>
                                    <p class="item-intro text-muted">Country Of Destination.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/hongkong2.jpg" alt="..." />
                                    <h5>Kriteria</h5>
                                    <ul>Tinggi badan minimal 165Cm (laki-laki) 150Cm (perempuan)</ul>
                                    <ul>Berat badan proporsional</ul>
                                    <ul>Usia minimal 20 s.d 35 tahun</ul>
                                    <ul>Sehat jasmani dan rohani</ul>
                                    <ul>Pendidikan minimal SLTA / Sederajat</ul>
                                    <ul>Bagi yang Ex. Taiwan harus membawa Paspor lama & ARC</ul>
                                    <br>
                                    <h5>Persyaratan & Ketentuan</h5>
                                    <ul>E-KTP (asli)</ul>
                                    <ul>Kartu Keluarga (asli)</ul>
                                    <ul>Akta Kelahiran (asli)</ul>
                                    <ul>Izin Orang Tua/ Suami (asli)</ul>
                                    <ul>Ijazah (asli)</ul>
                                    <ul>Surat Keterangan Status/ Surat Nikah (asli)</ul>
                                    <ul>SKCK dari Polda</ul>
                                    <br>
                                    <h5>Gaji</h5>
                                    <ul>?? Rp. xxx</ul>
                                    <br>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Singapore</h2>
                                    <p class="item-intro text-muted">Country Of Destination.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/singapore2.jpg" alt="..." />
                                    <h5>Kriteria</h5>
                                    <ul>Tinggi badan minimal 165Cm (laki-laki) 150Cm (perempuan)</ul>
                                    <ul>Berat badan proporsional</ul>
                                    <ul>Usia minimal 20 s.d 35 tahun</ul>
                                    <ul>Sehat jasmani dan rohani</ul>
                                    <ul>Pendidikan minimal SLTA / Sederajat</ul>
                                    <ul>Bagi yang Ex. Singapore harus membawa Paspor lama & ARC</ul>
                                    <br>
                                    <h5>Persyaratan & Ketentuan</h5>
                                    <ul>E-KTP (asli)</ul>
                                    <ul>Kartu Keluarga (asli)</ul>
                                    <ul>Akta Kelahiran (asli)</ul>
                                    <ul>Izin Orang Tua/ Suami (asli)</ul>
                                    <ul>Ijazah (asli)</ul>
                                    <ul>Surat Keterangan Status/ Surat Nikah (asli)</ul>
                                    <ul>SKCK dari Polda</ul>
                                    <br>
                                    <h5>Gaji</h5>
                                    <ul>?? Rp. xxx</ul>
                                    <br>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Malaysia</h2>
                                    <p class="item-intro text-muted">Country Of Destination.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/malaysia2.jpg" alt="..." />
                                    <h5>Kriteria</h5>
                                    <ul>Tinggi badan minimal 165Cm (laki-laki) 150Cm (perempuan)</ul>
                                    <ul>Berat badan proporsional</ul>
                                    <ul>Usia minimal 20 s.d 35 tahun</ul>
                                    <ul>Sehat jasmani dan rohani</ul>
                                    <ul>Pendidikan minimal SLTA / Sederajat</ul>
                                    <ul>Bagi yang Ex. Malaysia harus membawa Paspor lama & ARC</ul>
                                    <br>
                                    <h5>Persyaratan & Ketentuan</h5>
                                    <ul>E-KTP (asli)</ul>
                                    <ul>Kartu Keluarga (asli)</ul>
                                    <ul>Akta Kelahiran (asli)</ul>
                                    <ul>Izin Orang Tua/ Suami (asli)</ul>
                                    <ul>Ijazah (asli)</ul>
                                    <ul>Surat Keterangan Status/ Surat Nikah (asli)</ul>
                                    <ul>SKCK dari Polda</ul>
                                    <br>
                                    <h5>Gaji</h5>
                                    <ul>?? Rp. xxx</ul>
                                    <br>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Taiwan</h2>
                                    <p class="item-intro text-muted">Country Of Destination.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/taiwan2.jpg" alt="..." />
                                    <h5>Kriteria</h5>
                                    <ul>Tinggi badan minimal 165Cm (laki-laki) 150Cm (perempuan)</ul>
                                    <ul>Berat badan proporsional</ul>
                                    <ul>Usia minimal 20 s.d 35 tahun</ul>
                                    <ul>Sehat jasmani dan rohani</ul>
                                    <ul>Pendidikan minimal SLTA / Sederajat</ul>
                                    <ul>Bagi yang Ex. Taiwan harus membawa Paspor lama & ARC</ul>
                                    <br>
                                    <h5>Persyaratan & Ketentuan</h5>
                                    <ul>E-KTP (asli)</ul>
                                    <ul>Kartu Keluarga (asli)</ul>
                                    <ul>Akta Kelahiran (asli)</ul>
                                    <ul>Izin Orang Tua/ Suami (asli)</ul>
                                    <ul>Ijazah (asli)</ul>
                                    <ul>Surat Keterangan Status/ Surat Nikah (asli)</ul>
                                    <ul>SKCK dari Polda</ul>
                                    <br>
                                    <h5>Gaji</h5>
                                    <ul>?? Rp. xxx</ul>
                                    <br>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/5.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Southwest
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Website Design
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/6.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Window
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Photography
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
