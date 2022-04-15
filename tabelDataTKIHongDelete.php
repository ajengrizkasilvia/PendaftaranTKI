<?php 
// koneksi database
include 'config.php';
$konektor = mysqli_connect("localhost","root","", "tki");
// menangkap data id yang di kirim dari url
$id_hongkong = $_GET['id_hongkong'];
 
 
// menghapus data dari database
mysqli_query($konektor,"DELETE FROM hongkong WHERE id_hongkong='$id_hongkong'");
 
// mengalihkan halaman kembali ke tabelDataTKIHongkong.php
header("location:tabelDataTKIHong.php");
 
?>