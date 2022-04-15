<?php 
session_start();

include 'config.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
 
$result = mysqli_query($connect, "SELECT * FROM user where username='$username' and password='$password'");

$cek = mysqli_num_rows($result);
 
if($cek > 0){
 
	$data = mysqli_fetch_assoc($result);
 
	// cek jika user login sebagai admin
	if($data['role']=="1"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['role'] = "1";
		// alihkan ke halaman dashboard admin
		header("location:indexadmin.php");
 
	// cek jika user login sebagai pegawai
	}else if($data['role']=="2"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['role'] = "2";
		// alihkan ke halaman dashboard pegawai
		header("location:indextki.php");
	}
	else{
 
		// alihkan ke halaman login kembali
		header("location:login.php?pesan=gagal");
	}
} else{
	echo "<script>alert('Username/password salah!');history.go(-1);</script>";
}
?>