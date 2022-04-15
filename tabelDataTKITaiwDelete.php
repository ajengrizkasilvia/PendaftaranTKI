<?php 
// koneksi database
include 'config.php';
$konektor = mysqli_connect("localhost","root","", "tki");
// menangkap data id yang di kirim dari url
$id_taiwan = $_GET['id_taiwan'];
 
 
// menghapus data dari database
mysqli_query($konektor,"DELETE FROM hongkong WHERE id_taiwan='$id_taiwan'");
 
// mengalihkan halaman kembali ke tabelDataTKITaiwan.php
header("location:tabelDataTKITaiw.php");
 
?>