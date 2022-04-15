<?php 
// koneksi database
include 'config.php';
$konektor = mysqli_connect("localhost","root","", "tki");
// menangkap data id yang di kirim dari url
$id_blk = $_GET['id_blk'];
 
 
// menghapus data dari database
mysqli_query($konektor,"DELETE FROM blkln WHERE id_blk='$id_blk'");
 
// mengalihkan halaman kembali ke tabelBlkln.php
header("location:tabelBlkln.php");
 
?>