<?php 
// koneksi database
include 'config.php';
$konektor = mysqli_connect("localhost","root","", "tki");
// menangkap data yang di kirim dari form
$id = $_POST['id'];
    $nama_lengkap= $_POST['nama_lengkap'];
	$username = $_POST['username'];
	$password= $_POST['password'];
	$role= $_POST['role'];
 
// menginput data ke database
mysqli_query($konektor,"insert into user values('','$nama_lengkap','$username','$password','$role')");
 
// mengalihkan halaman kembali ke tabelManageUser.php
header("location:tabelManageUser.php");
 
?>