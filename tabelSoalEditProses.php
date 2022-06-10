<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'config.php';
$konektor = mysqli_connect("localhost", "root", "", "tki");

$soal = $_POST['quest'];
$op_a = $_POST['op_a'];
$op_b = $_POST['op_b'];
$op_c = $_POST['op_c'];
$op_d = $_POST['op_d'];
$jawaban = $_POST['correct_ans'];
$tipe = $_POST['tipe'];
$point = $_POST['point'];

$query = "UPDATE quests SET quest = '$soal', op_a = '$op_a', op_b = '$op_b', op_c = '$op_c', op_d = '$op_d', correct = '$jawaban', type = '$tipe', point = '$point' WHERE id = '$_GET[id]'";
$result = mysqli_query($konektor, $query);
// periska query apakah ada error
if (!$result) {
    die("Query gagal dijalankan: " . mysqli_errno($konektor) .
        " - " . mysqli_error($konektor));
} else {
    //tampil alert dan akan redirect ke halaman index.php
    //silahkan ganti index.php sesuai halaman yang akan dituju
    echo "<script>alert('Data berhasil diubah.');window.location='tabelSoal.php';</script>";
}
