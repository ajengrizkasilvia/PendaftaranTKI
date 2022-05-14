<?php 
// koneksi database
include 'config.php';
$konektor = mysqli_connect("localhost","root","", "tki");
// menangkap data yang di kirim dari form
$id_dft = $_POST['id_dft'];
$id_negara = $_POST['id_negara'];
$no_telp = $_POST['no_telp'];
$nik = $_POST['nik'];
$nama_lengkap = $_POST['nama_lengkap'];
$tempat_lahir= $_POST['tempat_lahir'];
$tanggal_lahir= $_POST['tanggal_lahir'];
$umur= $_POST['umur'];
$alamat_lengkap= $_POST['alamat_lengkap'];
$jenis_kelamin= $_POST['jenis_kelamin'];
$tb= $_POST['tb'];
$bb= $_POST['bb'];
$pendidikan_terakhir= $_POST['pendidikan_terakhir'];
$status= $_POST['status'];
$agama= $_POST['agama'];
$pengalaman_kerja= $_POST['pengalaman_kerja'];
$medical_check = $_FILES['medical_check']['name'];
$pas_foto = $_FILES['pas_foto']['name'];
$id_tahapsatu = $_POST['id_tahapsatu'];
 

if($medical_check != "") {
    $ekstensi_diperbolehkanmedical = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
    $medical = explode('.', $medical_check); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensimedical = strtolower(end($medical));
    $file_tmpmedical = $_FILES['medical_check']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $medical_baru = $angka_acak.'-'.$medical_check; //menggabungkan angka acak dengan nama file sebenarnya
    if($pas_foto != "") {
      $ekstensi_diperbolehkanpf = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
      $pasfoto = explode('.', $pas_foto); //memisahkan nama file dengan ekstensi yang diupload
      $ekstensipasfoto = strtolower(end($pasfoto));
      $file_tmppf = $_FILES['pas_foto']['tmp_name'];   
      $angka_acak     = rand(1,999);
      $pasfoto_baru = $angka_acak.'-'.$pas_foto;

    if(in_array($ekstensimedical, $ekstensi_diperbolehkanmedical) === true)  {     
        move_uploaded_file($file_tmpmedical, 'berkas/Medical/'.$medical_baru);
        if(in_array($ekstensipasfoto, $ekstensi_diperbolehkanpf) === true)  {     
          move_uploaded_file($file_tmppf, 'berkas/PasFoto/'.$pasfoto_baru);

        $query = "INSERT INTO pendaftaran (id_dft, id_negara, no_telp, nik, nama_lengkap, tempat_lahir, tanggal_lahir, umur, 
        alamat_lengkap, jenis_kelamin, tb, bb, pendidikan_terakhir, status, agama, pengalaman_kerja, medical_check, pas_foto, id_tahapsatu)
        VALUES('$id_dft', '$id_negara', '$no_telp', '$nik','$nama_lengkap','$tempat_lahir','$tanggal_lahir', '$umur', '$alamat_lengkap',
        '$jenis_kelamin', '$tb', '$bb', '$pendidikan_terakhir', '$status', '$agama', '$pengalaman_kerja', '$medical_baru', '$pasfoto_baru', '$id_tahapsatu')";
        $result = mysqli_query($konektor, $query);
        // periska query apakah ada error
        if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($konektor).
                 " - ".mysqli_error($konektor));
        } else {
          //tampil alert dan akan redirect ke halaman index.php
          echo "<script>alert('Data berhasil ditambah.');window.location='tabelPendaftar.php';</script>";
        }

  }
}
   else {     
   //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
      echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tabelPendaftarAdd.php';</script>";
  }
} else {
    $query = "INSERT INTO pendaftaran (id_dft, id_negara, no_telp, nik, nama_lengkap, tempat_lahir, tanggal_lahir, umur, 
    alamat_lengkap, jenis_kelamin, tb, bb, pendidikan_terakhir, status, agama, pengalaman_kerja, medical_check, pas_foto, id_tahapsatu)
    VALUES('$id_dft','$id_negara', '$no_telp', '$nik','$nama_lengkap','$tempat_lahir','$tanggal_lahir', '$umur', 
    '$alamat_lengkap', '$jenis_kelamin', '$tb', '$bb', '$pendidikan_terakhir',
    '$status', '$agama', '$pengalaman_kerja', null, null, '$id_tahapsatu')";

        $result = mysqli_query($konektor, $query);
        // periska query apakah ada error
        if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($konektor).
                 " - ".mysqli_error($konektor));
        } else {
          //tampil alert dan akan redirect ke halaman index.php
          //silahkan ganti index.php sesuai halaman yang akan dituju
          echo "<script>alert('Data berhasil ditambah.');window.location='tabelPendaftar.php';</script>";
        }
}
    }

?>