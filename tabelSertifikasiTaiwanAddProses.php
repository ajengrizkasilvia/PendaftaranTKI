<?php 
// koneksi database
include 'config.php';
$konektor = mysqli_connect("localhost","root","", "tki");
// menangkap data yang di kirim dari form
$id_sertif_taiw = $_POST['id_sertif_taiw'];
$id = $_POST['id'];
$id_dft = $_POST['id_dft'];
$perawatanbayi_taiw = $_POST['perawatanbayi_taiw'];
$pedulianak_taiw = $_POST['pedulianak_taiw'];
$pekerjaanrt_taiw = $_POST['pekerjaanrt_taiw'];
$perawatanortu_taiw = $_POST['perawatanortu_taiw'];
$memasak_taiw = $_POST['memasak_taiw'];
$inggris_taiw = $_POST['inggris_taiw'];
$kantonis_taiw = $_POST['kantonis_taiw'];
$mandarin_taiw = $_POST['mandarin_taiw'];
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
$query = "INSERT INTO sertiftaiwan (id_sertif_taiw, id, id_dft, perawatanbayi_taiw, pedulianak_taiw,pekerjaanrt_taiw, perawatanortu_taiw, memasak_taiw, inggris_taiw, kantonis_taiw, mandarin_taiw, keahlian_taiw)
        VALUES('$id_sertif_taiw', '$id', '$id_dft', '$perawatanbayi_taiw','$pedulianak_taiw','$pekerjaanrt_taiw','$perawatanortu_taiw','$memasak_taiw','$inggris_taiw', '$kantonis_taiw', '$mandarin_taiw', '$keahlian_baru')";
        $result = mysqli_query($konektor, $query);
if(!$result){
    die ("Query gagal dijalankan: ".mysqli_errno($konektor).
        " - ".mysqli_error($konektor));
} else {
echo "<script>alert('Data berhasil diubah.');window.location='tabelSertifikasiTaiwan.php';</script>";
}


?>