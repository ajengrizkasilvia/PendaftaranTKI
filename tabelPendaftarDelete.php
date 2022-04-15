<?php 
// koneksi database
include 'config.php';
$konektor = mysqli_connect("localhost","root","", "tki");
// menangkap data id yang di kirim dari url
$id_dft = $_GET['id_dft'];
 
 
// menghapus data dari database
mysqli_query($konektor,"delete from pendaftaran where id_dft='$id_dft'");
 
// mengalihkan halaman kembali ke tabelPendaftar.php
header("location:tabelPendaftar.php");
 
?>