<?php 
// koneksi database
include 'config.php';
$konektor = mysqli_connect("localhost","root","", "tki");
// menangkap data yang di kirim dari form
$id_sertif_taiw = $_POST['id_sertif_taiw'];
$id_dft = $_POST['id_dft'];
$keahlian_taiw = $_FILES['keahlian_taiw']['name'];
$bahasa_taiw = $_FILES['bahasa_taiw']['name'];


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

//Bahasa
if($bahasa_taiw != "") {
    $ekstensi_diperbolehkanbahasa = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
    $bahasa = explode('.', $bahasa_taiw); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensibahasa = strtolower(end($bahasa));
    $file_tmpbahasa = $_FILES['bahasa_taiw']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $bahasa_baru = $angka_acak.'-'.$bahasa_taiw;

    if(in_array($ekstensibahasa, $ekstensi_diperbolehkanbahasa) === true)  {     
        move_uploaded_file($file_tmpbahasa, 'berkas/SertifTaiwan/Bahasa/'.$bahasa_baru);
    }
}else {
    $bahasa_baru = $_POST['bahasa_taiw_lama'];
} 
$query = "INSERT INTO sertiftaiwan (id_sertif_taiw, id_dft, keahlian_taiw, bahasa_taiw)
        VALUES('$id_sertif_taiw', '$id_dft', '$keahlian_baru', '$bahasa_baru')";
        $result = mysqli_query($konektor, $query);
if(!$result){
    die ("Query gagal dijalankan: ".mysqli_errno($konektor).
        " - ".mysqli_error($konektor));
} else {
echo "<script>alert('Data berhasil diubah.');window.location='TKISertifikasiTaiwan.php';</script>";
}


?>