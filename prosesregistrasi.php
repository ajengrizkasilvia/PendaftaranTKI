<?php
	require_once("config.php");
	$konektor = mysqli_connect("localhost","root","", "tki");
	$nama_lengkap= $_POST['nama_lengkap'];
	$username = $_POST['username'];
	$pass= $_POST['password'];
	$role= $_POST['role'];
	$cekuser = mysqli_query($konektor,"SELECT * FROM user WHERE username = '$username'");
		if(!$username|| !$pass){
			echo "<div align='center'>Masih ada data yang kosong! <a href='registrasi.php'>Back</a></div>";
		} else {
		$simpan = mysqli_query($konektor,"INSERT INTO user (nama_lengkap, username, password, role) VALUES('$nama_lengkap','$username','$pass', '$role')");	
		if($simpan){
			echo "<div align='center'> Pendaftaran Sukses, Silahkan <a href='index.php'>Login</a></div>";
		} else {
			echo "<div align='center'>Proses Gagal !</div>";
		}
	} 
?>