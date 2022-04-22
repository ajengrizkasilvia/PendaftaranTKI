<?php 
    // koneksi database
	include "config.php";
    $konektor = mysqli_connect("localhost","root","", "tki");
    // menangkap data yang di kirim dari form
    $id_malaysia = $_POST['id_malaysia'];
    $id_dft= $_POST['id_dft'];
	$sektor_malay = $_POST['sektor_malay'];
    $ektp_malay = $_POST['ektp_malay'];
    $kk_malay = $_POST['kk_malay'];
    $akte_malay = $_POST['akte_malay'];
    $suratnikah_malay = $_POST['suratnikah_malay'];
    $suratijin_malay = $_POST['suratijin_malay'];
    $expaspor_malay = $_POST['expaspor_malay'];
    $skck_malay = $_POST['skck_malay'];
    $rekomid_malay = $_POST['rekomid_malay'];
    $biometri_malay = $_POST['biometri_malay'];
	$status_proses_malay= $_POST['status_proses_malay'];
	

    // update data ke database
	$query="UPDATE malaysia SET id_dft='$id_dft', sektor_malay='$sektor_malay', ektp_malay='$ektp_malay', kk_malay='$kk_malay',
                                                akte_malay='$akte_malay', suratnikah_malay='$suratnikah_malay',
                                                expaspor_malay='$expaspor_malay', skck_malay='$skck_malay', rekomid_malay='$rekomid_malay',
                                                biometri_malay='$biometri_malay',status_proses_malay= '$status_proses_malay' 
                                                WHERE id_malaysia='$id_malaysia'";
	$result = mysqli_query($konektor, $query);
    if ($result) {
		echo "<script>alert('Berhasil Memperbarui Data!');history.go(-2);</script>";
?>
<?php
	} else {
		echo "<script>alert('Gagal Memperbarui Data!');history.go(-1);</script>".mysqli_error($konektor);
	}
     // mengalihkan halaman kembali ke tabelDataTKIMalay.php
     header("location:tabelDataTKIMalay.php");  
 ?>