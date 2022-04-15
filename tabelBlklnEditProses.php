<?php 
    // koneksi database
	include "config.php";
    $konektor = mysqli_connect("localhost","root","", "tki");
    // menangkap data yang di kirim dari form
    $id_blk = $_POST['id_blk'];
    $id_dft= $_POST['id_dft'];
	$id_negara = $_POST['id_negara'];
    $jabatan_sektor = $_POST['jabatan_sektor'];
    $medical = $_POST['medical'];

    // update data ke database
	$query="UPDATE hongkong SET id_dft='$id_dft', id_negara='$id_negara', 
                                jabatan_sektor='$jabatan_sektor', medical='$medical' 
                                WHERE id_blk='$id_blk'";
	$result = mysqli_query($konektor, $query);
    if ($result) {
		echo "<script>alert('Berhasil Memperbarui Data!');history.go(-2);</script>";
?>
<?php
	} else {
		echo "<script>alert('Gagal Memperbarui Data!');history.go(-1);</script>".mysqli_error($konektor);
	}
     // mengalihkan halaman kembali ke tabelBlkln.php
     header("location:tabelBlkln.php");  
 ?>
 