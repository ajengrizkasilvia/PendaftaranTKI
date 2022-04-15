<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'config.php';
$konektor = mysqli_connect("localhost","root","", "tki");

	// membuat variabel untuk menampung data dari form
  $negara_tujuan = $_POST['negara_tujuan'];
  $kriteria = $_POST['kriteria'];
  $persyaratan = $_POST['persyaratan'];
  $jumlah_gaji = $_POST['jumlah_gaji'];
  $gambar_negara = $_FILES['gambar_negara']['name'];

  if($gambar_negara != "") {
    $ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
    $x = explode('.', $gambar_negara); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['gambar_negara']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $nama_gambar_baru = $angka_acak.'-'.$gambar_negara; //menggabungkan angka acak dengan nama file sebenarnya
          if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                  move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru); //memindah file gambar ke folder gambar
                    // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                    $query = "INSERT INTO negara (negara_tujuan, kriteria, persyaratan, jumlah_gaji, gambar_negara) VALUES ('$negara_tujuan', '$kriteria', '$persyaratan', '$jumlah_gaji', '$nama_gambar_baru')";
                    $result = mysqli_query($konektor, $query);
                    // periska query apakah ada error
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($konektor).
                             " - ".mysqli_error($konektor));
                    } else {
                      //tampil alert dan akan redirect ke halaman index.php
                      //silahkan ganti index.php sesuai halaman yang akan dituju
                      echo "<script>alert('Data berhasil ditambah.');window.location='tabelNegaraTujuan.php';</script>";
                    }
  
              } else {     
               //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                  echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tabelNegaraTujuanAdd.php';</script>";
              }
  } else {
     $query = "INSERT INTO negara_tujuan (negara_tujuan, kriteria, persyaratan, jumlah_gaji, gambar_negara) VALUES ('$negara_tujuan', '$kriteria', '$persyaratan', '$jumlah_gaji', null)";
                    $result = mysqli_query($konektor, $query);
                    // periska query apakah ada error
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($konektor).
                             " - ".mysqli_error($konektor));
                    } else {
                      //tampil alert dan akan redirect ke halaman index.php
                      //silahkan ganti index.php sesuai halaman yang akan dituju
                      echo "<script>alert('Data berhasil ditambah.');window.location='tabelNegaraTujuan.php';</script>";
                    }
  }
  ?>