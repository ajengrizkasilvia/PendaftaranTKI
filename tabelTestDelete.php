<?php 
// koneksi database
include 'config.php';
$konektor = mysqli_connect("localhost","root","", "tki");
// menangkap data id yang di kirim dari url
$id_test = $_GET['id_test'];
 
 
// menghapus data dari database
mysqli_query($konektor,"DELETE FROM test WHERE id_test='$id_test'");
 
// mengalihkan halaman kembali ke tabelTest.php
header("location:tabelTest.php");
 
?>