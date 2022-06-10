<?php 
// koneksi database
include 'config.php';
$konektor = mysqli_connect("localhost","root","", "tki");
// menangkap data id yang di kirim dari url
$id_test = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($konektor,"DELETE FROM quests WHERE id='$id_test'");
 
// mengalihkan halaman kembali ke tabelTest.php
// alert
echo "<script>alert('Data berhasil dihapus.');window.location='tabelSoal.php';</script>";
?>