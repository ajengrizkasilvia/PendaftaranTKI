<?php 
// koneksi database
include 'config.php';
$konektor = mysqli_connect("localhost","root","", "tki");
// menangkap data yang di kirim dari form
$id_sertif_taiw = $_POST['id_sertif_taiw'];
$id = $_POST['id'];
$keahlian_taiw = $_FILES['keahlian_taiw']['name'];


//Keahlian
if($keahlian_taiw != "") {
    $ekstensi_diperbolehkankeahlian = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
    $keahlian = explode('.', $keahlian_taiw); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensikeahlian = strtolower(end($keahlian));
    $file_tmpkeahlian = $_FILES['keahlian_taiw']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $keahlian_baru = $angka_acak.'-'.$keahlian_taiw;

    if(in_array($ekstensikeahlian, $ekstensi_diperbolehkankeahlian) === true)  {     
        move_uploaded_file($file_tmpkeahlian, 'berkas/SertifTaiwan/Keahlian/'.$keahlian_baru);
    }
}else {
    $keahlian_baru = $_POST['keahlian_taiw_lama'];
}                   

$id = $_POST['id_lama'];
$query = "INSERT INTO sertiftaiwan (id_sertif_taiw, id, keahlian_taiw)
        VALUES('$id_sertif_taiw', '$id', '$keahlian_baru')";
        $result = mysqli_query($konektor, $query);
if(!$result){
    die ("Query gagal dijalankan: ".mysqli_errno($konektor).
        " - ".mysqli_error($konektor));
} else {
echo "<script>alert('Data berhasil diubah.');window.location='TKISertifikasiTaiwan.php';</script>";
}


?>