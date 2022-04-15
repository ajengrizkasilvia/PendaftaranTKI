<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'config.php';
$konektor = mysqli_connect("localhost","root","", "tki");

	// membuat variabel untuk menampung data dari form
  $id_dft = $_POST['id_dft'];
  $sektor_taiw = $_POST['sektor_taiw'];
  $ektp_taiw = $_FILES['ektp_taiw']['name'];
  $kk_taiw = $_FILES['kk_taiw']['name'];
  $akte_taiw = $_FILES['akte_taiw']['name'];
  $suratnikah_taiw = $_FILES['suratnikah_taiw']['name'];
  $suratijin_taiw = $_FILES['suratijin_taiw']['name'];
  $expaspor_taiw = $_FILES['expaspor_taiw']['name'];
  $skck_taiw = $_FILES['skck_taiw']['name'];
  $status_proses_taiw = $_POST['status_proses_taiw'];

  if($ektp_taiw != "") {
    $ekstensi_diperbolehkanektp = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
    $ektp = explode('.', $ektp_taiw); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensiektp = strtolower(end($ektp));
    $file_tmpektp = $_FILES['ektp_taiw']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $ektp_baru = $angka_acak.'-'.$ektp_taiw; //menggabungkan angka acak dengan nama file sebenarnya
    //kk
    if($kk_taiw != "") {
    $ekstensi_diperbolehkankk = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
    $kk = explode('.', $kk_taiw); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensikk = strtolower(end($kk));
    $file_tmpkk = $_FILES['kk_taiw']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $kk_baru = $angka_acak.'-'.$kk_taiw;
    //akte
    if($akte_taiw != "") {
    $ekstensi_diperbolehkanakte = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
    $akte = explode('.', $akte_taiw); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensiakte = strtolower(end($akte));
    $file_tmpakte = $_FILES['akte_taiw']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $akte_baru = $angka_acak.'-'.$akte_taiw;
    //surat nikah
    if($suratnikah_taiw != "") {
    $ekstensi_diperbolehkansn = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
    $suratnikah = explode('.', $suratnikah_taiw); //memisataiwan nama file dengan ekstensi yang diupload
    $ekstensisn = strtolower(end($suratnikah));
    $file_tmpsn = $_FILES['suratnikah_taiw']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $suratnikah_baru = $angka_acak.'-'.$suratnikah_taiw;
    //surat ijin
    if($suratijin_taiw != "") {
    $ekstensi_diperbolehkansi = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
    $suratijin = explode('.', $suratijin_taiw); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensisi = strtolower(end($suratijin));
    $file_tmpsi = $_FILES['suratijin_taiw']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $suratijin_baru = $angka_acak.'-'.$suratijin_taiw;
    //ex paspor
    if($expaspor_taiw != "") {
    $ekstensi_diperbolehkanep = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
    $expaspor = explode('.', $expaspor_taiw); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensiep = strtolower(end($expaspor));
    $file_tmpep = $_FILES['expaspor_taiw']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $expaspor_baru = $angka_acak.'-'.$expaspor_taiw;
    //skck
    if($skck_taiw != "") {
    $ekstensi_diperbolehkansk = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
    $skck = explode('.', $skck_taiw); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensisk = strtolower(end($skck));
    $file_tmpsk = $_FILES['skck_taiw']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $skck_baru = $angka_acak.'-'.$skck_taiw;

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
                    $query = "INSERT INTO taiwan (id_dft, sektor_taiw, ektp_taiw, kk_taiw, akte_taiw, suratnikah_taiw, suratijin_taiw, expaspor_taiw, skck_taiw, status_proses_taiw) VALUES ('$id_dft', '$sektor_taiw', '$ektp_baru', '$kk_baru', '$akte_baru', '$suratnikah_baru', '$suratijin_baru', '$expaspor_baru', '$skck_baru', '$status_proses_taiw')";
                    $result = mysqli_query($konektor, $query);
                    // periska query apakah ada error
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($konektor).
                             " - ".mysqli_error($konektor));
                    } else {
                      //tampil alert dan akan redirect ke halaman index.php
                      echo "<script>alert('Data berhasil ditambah.');window.location='tabelDataTKITaiw.php';</script>";
                    }
  
              }
              }
              }
              }
              }
              }
               else {     
               //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                  echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tabelDataTKITaiwAdd.php';</script>";
              }
            }
  } else {
     $query = "INSERT INTO taiwan (id_dft, sektor_taiw, ektp_taiw, kk_taiw, akte_taiw, suratnikah_taiw, suratijin_taiw, expaspor_taiw, skck_taiw, status_proses_taiw) VALUES ('$id_dft', '$sektor_taiw', null, null, null, null, null, null, null, '$status_proses')";
                    $result = mysqli_query($konektor, $query);
                    // periska query apakah ada error
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($konektor).
                             " - ".mysqli_error($konektor));
                    } else {
                      //tampil alert dan akan redirect ke halaman index.php
                      //silahkan ganti index.php sesuai halaman yang akan dituju
                      echo "<script>alert('Data berhasil ditambah.');window.location='tabelDataTKITaiw.php';</script>";
                    }
  }
  }
  }
  }
  }
  }
  }
?>