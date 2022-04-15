<?php 
    // koneksi database
	include "config.php";
    $konektor = mysqli_connect("localhost","root","", "tki");
    // menangkap data yang di kirim dari form
    $id_taiwan = $_POST['id_taiwan'];
    $id_dft= $_POST['id_dft'];
	$sektor_taiw = $_POST['sektor_taiw'];
    $ektp_taiw = $_POST['ektp_taiw'];
    $kk_taiw = $_POST['kk_taiw'];
    $akte_taiw = $_POST['akte_taiw'];
    $suratnikah_taiw = $_POST['suratnikah_taiw'];
    $suratijin_taiw = $_POST['suratijin_taiw'];
    $expaspor_taiw = $_POST['expaspor_taiw'];
    $skck_taiw = $_POST['skck_taiw'];
	$status_proses_taiw= $_POST['status_proses_taiw'];
	

    // update data ke database
	$query="UPDATE taiwan SET id_dft='$id_dft', sektor_taiw='$sektor_taiw', ektp_taiw='$skck_taiw', kk_taiw='$kk_taiw',
                                                akte_taiw='$akte_taiw', suratnikah_taiw='$suratnikah_taiw',
                                                expaspor_taiw='$expaspor_taiw', skck_taiw='$skck_taiw', status_proses_taiw= '$status_proses_taiw' 
                                                WHERE id_taiwan='$id_taiwan'";
    $result = mysqli_query($konektor, $query);
    if ($result) {
		echo "<script>alert('Berhasil Memperbarui Data!');history.go(-2);</script>";
?>
<?php
	} else {
		echo "<script>alert('Gagal Memperbarui Data!');history.go(-1);</script>".mysqli_error($konektor);
	}
     // mengalihkan halaman kembali ke tabelPendaftar.php
     header("location:tabelDataTKITaiw.php");  
 ?>