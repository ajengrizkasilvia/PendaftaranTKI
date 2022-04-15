<?php 
    // koneksi database
	include "config.php";
    $konektor = mysqli_connect("localhost","root","", "tki");
    // menangkap data yang di kirim dari form
    $id_hongkong = $_POST['id_hongkong'];
    $id_dft= $_POST['id_dft'];
	$sektor_hk = $_POST['sektor_hk'];
    $ektp_hk = $_POST['ektp_hk'];
    $kk_hk = $_POST['kk_hk'];
    $akte_hk = $_POST['akte_hk'];
    $suratnikah_hk = $_POST['suratnikah_hk'];
    $suratijin_hk = $_POST['suratijin_hk'];
    $expaspor_hk = $_POST['expaspor_hk'];
    $skck_hk = $_POST['skck_hk'];
	$status_proses_hk= $_POST['status_proses_hk'];
	

    // update data ke database
	$query="UPDATE hongkong SET id_dft='$id_dft', sektor_hk='$sektor_hk', ektp_hk='$ektp_hk', kk_hk='$kk_hk',
                                                akte_hk='$akte_hk', suratnikah_hk='$suratnikah_hk',
                                                expaspor_hk='$expaspor_hk', skck_hk='$skck_hk', status_proses_hk= '$status_proses_hk' 
                                                WHERE id_hongkong='$id_hongkong'";
	$result = mysqli_query($konektor, $query);
    if ($result) {
		echo "<script>alert('Berhasil Memperbarui Data!');history.go(-2);</script>";
?>
<?php
	} else {
		echo "<script>alert('Gagal Memperbarui Data!');history.go(-1);</script>".mysqli_error($konektor);
	}
     // mengalihkan halaman kembali ke tabelDataTKIHong.php
     header("location:tabelDataTKIHong.php");  
 ?>
 