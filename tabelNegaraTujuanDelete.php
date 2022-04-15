<?php 
// koneksi database
include 'config.php';
$konektor = mysqli_connect("localhost","root","", "tki");
// menangkap data id yang di kirim dari url
$id_negara = $_GET['id_negara'];
 
 
// menghapus data dari database
mysqli_query($konektor,"delete from negara where id_negara='$id_negara'");
 
// mengalihkan halaman kembali ke index.php
header("location:tabelNegaraTujuan.php");
 
?>