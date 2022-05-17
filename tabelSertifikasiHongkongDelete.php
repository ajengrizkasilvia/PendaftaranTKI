<?php 
// koneksi database
include 'config.php';
$konektor = mysqli_connect("localhost","root","", "tki");
// menangkap data id yang di kirim dari url
$id_sertif_hk = $_GET['id_sertif_hk'];
 
 
// menghapus data dari database
mysqli_query($konektor,"DELETE FROM sertifhongkong WHERE id_sertif_hk='$id_sertif_hk'");
 
// mengalihkan halaman kembali ke tabelSertifikasiHongkong.php
header("location:tabelSertifikasiHongkong.php");
 
?>