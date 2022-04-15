<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'config.php';
$konektor = mysqli_connect("localhost","root","", "tki");

	// membuat variabel untuk menampung data dari form
  $id_dft = $_POST['id_dft'];
  $sektor_malay = $_POST['sektor_malay'];
  $ektp_malay = $_FILES['ektp_malay']['name'];
  $kk_malay = $_FILES['kk_malay']['name'];
  $akte_malay = $_FILES['akte_malay']['name'];
  $suratnikah_malay = $_FILES['suratnikah_malay']['name'];
  $suratijin_malay = $_FILES['suratijin_malay']['name'];
  $expaspor_malay = $_FILES['expaspor_malay']['name'];
  $skck_malay = $_FILES['skck_malay']['name'];
  $status_proses_malay = $_POST['status_proses_malay'];

  if($ektp_malay != "") {
    $ekstensi_diperbolehkanektp = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
    $ektp = explode('.', $ektp_malay); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensiektp = strtolower(end($ektp));
    $file_tmpektp = $_FILES['ektp_malay']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $ektp_baru = $angka_acak.'-'.$ektp_malay; //menggabungkan angka acak dengan nama file sebenarnya
    //kk
    if($kk_malay != "") {
    $ekstensi_diperbolehkankk = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
    $kk = explode('.', $kk_malay); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensikk = strtolower(end($kk));
    $file_tmpkk = $_FILES['kk_malay']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $kk_baru = $angka_acak.'-'.$kk_malay;
    //akte
    if($akte_malay != "") {
    $ekstensi_diperbolehkanakte = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
    $akte = explode('.', $akte_malay); //memisamalayan nama file dengan ekstensi yang diupload
    $ekstensiakte = strtolower(end($akte));
    $file_tmpakte = $_FILES['akte_malay']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $akte_baru = $angka_acak.'-'.$akte_malay;
    //surat nikah
    if($suratnikah_malay != "") {
    $ekstensi_diperbolehkansn = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
    $suratnikah = explode('.', $suratnikah_malay); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensisn = strtolower(end($suratnikah));
    $file_tmpsn = $_FILES['suratnikah_malay']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $suratnikah_baru = $angka_acak.'-'.$suratnikah_malay;
    //surat ijin
    if($suratijin_malay != "") {
    $ekstensi_diperbolehkansi = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
    $suratijin = explode('.', $suratijin_malay); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensisi = strtolower(end($suratijin));
    $file_tmpsi = $_FILES['suratijin_malay']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $suratijin_baru = $angka_acak.'-'.$suratijin_malay;
    //ex paspor
    if($expaspor_malay != "") {
    $ekstensi_diperbolehkanep = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
    $expaspor = explode('.', $expaspor_malay); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensiep = strtolower(end($expaspor));
    $file_tmpep = $_FILES['expaspor_malay']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $expaspor_baru = $angka_acak.'-'.$expaspor_malay;
    //skck
    if($skck_malay != "") {
    $ekstensi_diperbolehkansk = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
    $skck = explode('.', $skck_malay); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensisk = strtolower(end($skck));
    $file_tmpsk = $_FILES['skck_malay']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $skck_baru = $angka_acak.'-'.$skck_malay;

          if(in_array($ekstensiektp, $ekstensi_diperbolehkanektp) === true)  {     
                  move_uploaded_file($file_tmpektp, 'berkas/'.$ektp_baru); //memindah file gambar ke folder gambar
                  if(in_array($ekstensikk, $ekstensi_diperbolehkankk) === true)  {
                  move_uploaded_file($file_tmpkk, 'berkas/'.$kk_baru);
                  if(in_array($ekstensiakte, $ekstensi_diperbolehkanakte) === true)  {
                  move_uploaded_file($file_tmpakte, 'berkas/'.$akte_baru);
                  if(in_array($ekstensisn, $ekstensi_diperbolehkansn) === true)  {
                  move_uploaded_file($file_tmpsn, 'berkas/'.$suratnikah_baru);
                  if(in_array($ekstensisi, $ekstensi_diperbolehkansi) === true)  {
                  move_uploaded_file($file_tmpsi, 'berkas/'.$suratijin_baru);
                  if(in_array($ekstensiep, $ekstensi_diperbolehkanep) === true)  {
                  move_uploaded_file($file_tmpep, 'berkas/'.$expaspor_baru);
                  if(in_array($ekstensisk, $ekstensi_diperbolehkansk) === true)  {
                  move_uploaded_file($file_tmpsk, 'berkas/'.$skck_baru);  
                  // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                    $query = "INSERT INTO malaysia (id_dft, sektor_malay, ektp_malay, kk_malay, akte_malay, suratnikah_malay, suratijin_malay, expaspor_malay, skck_malay, status_proses_malay) VALUES ('$id_dft', '$sektor_malay', '$ektp_baru', '$kk_baru', '$akte_baru', '$suratnikah_baru', '$suratijin_baru', '$expaspor_baru', '$skck_baru', '$status_proses_malay')";
                    $result = mysqli_query($konektor, $query);
                    // periska query apakah ada error
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($konektor).
                             " - ".mysqli_error($konektor));
                    } else {
                      //tampil alert dan akan redirect ke halaman index.php
                      echo "<script>alert('Data berhasil ditambah.');window.location='TKIUploadBerkasMalay.php';</script>";
                    }
  
              }
              }
              }
              }
              }
              }
               else {     
               //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                  echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='TKIUploadBerkasMalayAdd.php';</script>";
              }
            }
  } else {
     $query = "INSERT INTO malaysia (id_dft, sektor_malay, ektp_malay, kk_malay, akte_malay, suratnikah_malay, suratijin_malay, expaspor_malay, skck_malay, status_proses_malay) VALUES ('$id_dft', '$sektor_malay', null, null, null, null, null, null, null, '$status_proses')";
                    $result = mysqli_query($konektor, $query);
                    // periska query apakah ada error
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($konektor).
                             " - ".mysqli_error($konektor));
                    } else {
                      //tampil alert dan akan redirect ke halaman index.php
                      //silahkan ganti index.php sesuai halaman yang akan dituju
                      echo "<script>alert('Data berhasil ditambah.');window.location='TKIUploadBerkasMalay.php';</script>";
                    }
  }
  }
  }
  }
  }
  }
  }
?>