<?php 
// koneksi database
include 'config.php';
$konektor = mysqli_connect("localhost","root","", "tki");
// menangkap data yang di kirim dari form
$id_sertif_hk = $_POST['id_sertif_hk'];
$id = $_POST['id'];
$id_dft = $_POST['id_dft'];
$keahlian_hk = $_FILES['keahlian_hk']['name'];


//Keahlian
if($keahlian_hk != "") {
    $ekstensi_diperbolehkankeahlian = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
    $keahlian = explode('.', $keahlian_hk); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensikeahlian = strtolower(end($keahlian));
    $file_tmpkeahlian = $_FILES['keahlian_hk']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $keahlian_baru = $angka_acak.'-'.$keahlian_hk;

    if(in_array($ekstensikeahlian, $ekstensi_diperbolehkankeahlian) === true)  {     
        move_uploaded_file($file_tmpkeahlian, 'berkas/SertifHongkong/Keahlian/'.$keahlian_baru);
    }
}else {
    $keahlian_baru = $_POST['keahlian_hk_lama'];
}   
$id = $_POST['id_lama']; 
$query = "INSERT INTO sertifhongkong (id_sertif_hk, id, id_dft, keahlian_hk)
        VALUES('$id_sertif_hk', '$id', '$id_dft', '$keahlian_baru')";
        $result = mysqli_query($konektor, $query);
if(!$result){
    die ("Query gagal dijalankan: ".mysqli_errno($konektor).
        " - ".mysqli_error($konektor));
} else {
echo "<script>alert('Data berhasil diubah.');window.location='TKISertifikasiHongkong.php';</script>";
}


?>