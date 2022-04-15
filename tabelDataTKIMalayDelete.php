<?php 
// koneksi database
include 'config.php';
$konektor = mysqli_connect("localhost","root","", "tki");
// menangkap data id yang di kirim dari url
$id_malaysia = $_GET['id_malaysia'];
 
 
// menghapus data dari database
mysqli_query($konektor,"DELETE FROM malaysia WHERE id_malaysia='$id_malaysia'");
 
// mengalihkan halaman kembali ke tabelDataTKIMalaysia.php
header("location:tabelDataTKIMalay.php");
 
?>