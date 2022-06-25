<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'config.php';
$konektor = mysqli_connect("localhost","root","", "tki");

	// membuat variabel untuk menampung data dari form
    $id_test = $_POST['id_test'];
    $id_dft = $_POST['id_dft'];
    $id_negara = $_POST['id_negara'];
    $nilai = $_POST['nilai'];
    $grade = $_POST['grade'];

    // jalankan query UPDATE berdasarkan ID yang negaranya kita edit
    $query  = "UPDATE test SET id_dft = '$id_dft', id_negara  = '$id_negara', score  = '$nilai', grade = '$grade'";
    $query .= "WHERE id_test = '$id_test'";
    $result = mysqli_query($konektor, $query);
    // periska query apakah ada error
    if(!$result){
          die ("Query gagal dijalankan: ".mysqli_errno($konektor).
                           " - ".mysqli_error($konektor));
    } else {
      //tampil alert dan akan redirect ke halaman index.php
      //silahkan ganti index.php sesuai halaman yang akan dituju
        echo "<script>alert('Data berhasil diubah.');window.location='tabelTest.php';</script>";
    }