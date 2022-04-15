<?php 
// koneksi database
include 'config.php';
$konektor = mysqli_connect("localhost","root","", "tki");
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($konektor,"delete from user where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:tabelManageUser.php");
 
?>