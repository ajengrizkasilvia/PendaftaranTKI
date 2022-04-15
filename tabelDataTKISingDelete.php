<?php 
// koneksi database
include 'config.php';
$konektor = mysqli_connect("localhost","root","", "tki");
// menangkap data id yang di kirim dari url
$id_singapore = $_GET['id_singapore'];
 
 
// menghapus data dari database
mysqli_query($konektor,"DELETE FROM singapore WHERE id_singapore='$id_singapore'");
 
// mengalihkan halaman kembali ke tabelDataTKISing.php
header("location:tabelDataTKISing.php");
 
?>