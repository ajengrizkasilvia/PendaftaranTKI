<?php 
// koneksi database
include 'config.php';
$konektor = mysqli_connect("localhost","root","", "tki");
// menangkap data id yang di kirim dari url
$id_sertif_hk = $_GET['id_sertif_taiw'];
 
 
// menghapus data dari database
mysqli_query($konektor,"DELETE FROM sertiftaiwan WHERE id_sertif_hk='$id_sertif_taiw'");
 
// mengalihkan halaman kembali ke tabelSertifikasiTaiwan.php
header("location:tabelSertifikasiTaiwan.php");
 
?>