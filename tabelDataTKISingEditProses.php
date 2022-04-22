<?php 
    // koneksi database
	include "config.php";
    $konektor = mysqli_connect("localhost","root","", "tki");
    // menangkap data yang di kirim dari form
    $id_singapore = $_POST['id_singapore'];
    $id_dft= $_POST['id_dft'];
	$sektor_sing = $_POST['sektor_sing'];
    $ektp_sing = $_POST['ektp_sing'];
    $kk_sing = $_POST['kk_sing'];
    $akte_sing = $_POST['akte_sing'];
    $suratnikah_sing = $_POST['suratnikah_sing'];
    $suratijin_sing = $_POST['suratijin_sing'];
    $expaspor_sing = $_POST['expaspor_sing'];
    $skck_sing = $_POST['skck_sing'];
    $rekomid_sing = $_POST['rekomid_sing'];
    $biometri_sing = $_POST['biometri_sing'];
	$status_proses_sing= $_POST['status_proses_sing'];
	

    // update data ke database
	mysqli_query($konektor,"UPDATE singapore SET id_dft='$id_dft', sektor_sing='$sektor_sing',ektp='$ektp_sing', kk_sing='$kk_sing',
                                                akte_sing='$akte_sing', suratnikah_sing='$suratnikah_sing', suratijin_sing='$suratijin_sing',
                                                expaspor_sing='$expaspor_sing', skck_sing='$skck_sing', rekomid_sing='$rekomid_sing',
                                                biometri_sing='$biometri_sing',status_proses_sing= '$status_proses_sing' 
                                                WHERE id_singapore='$id_singapore'");
    $result = mysqli_query($konektor, $query);
    if ($result) {
		echo "<script>alert('Berhasil Memperbarui Data!');history.go(-2);</script>";
?>
<?php
	} else {
		echo "<script>alert('Gagal Memperbarui Data!');history.go(-1);</script>".mysqli_error($konektor);
	}
     // mengalihkan halaman kembali ke tabelDataTKISing.php
     header("location:tabelDataTKISing.php");  
 ?>