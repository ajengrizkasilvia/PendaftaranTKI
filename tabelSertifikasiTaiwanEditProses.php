<?php 
    // koneksi database
	include "config.php";
    $konektor = mysqli_connect("localhost","root","", "tki");
    // menangkap data yang di kirim dari form
    $id_sertif_taiw = $_POST['id_sertif_taiw'];
    $id = $_POST['id'];
    $keahlian_taiw = $_FILES['keahlian_taiw']['name'];
    $bahasa_taiw = $_FILES['bahasa_taiw']['name'];

    //keahlian
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
    $query  = "UPDATE sertiftaiwan SET id='$id', keahlian_taiw='$keahlian_baru'
        WHERE id_sertif_taiw='$id_sertif_taiw'";
    $result = mysqli_query($konektor, $query);
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($konektor).
            " - ".mysqli_error($konektor));
    } else {
    echo "<script>alert('Data berhasil diubah.');window.location='tabelSertifikasiTaiwan.php';</script>";
    }

    //bahasa
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
    $query  = "UPDATE sertiftaiwan SET id='$id', bahasa_taiw='$bahasa_baru'
        WHERE id_sertif_taiw='$id_sertif_taiw'";
    $result = mysqli_query($konektor, $query);
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($konektor).
            " - ".mysqli_error($konektor));
    } else {
    echo "<script>alert('Data berhasil diubah.');window.location='tabelSertifikasiTaiwan.php';</script>";
    }

   

    if($keahlian_taiw != "") {
        $ekstensi_diperbolehkankeahlian = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
        $keahlian = explode('.', $keahlian_taiw); //memisahkan nama file dengan ekstensi yang diupload
        $ekstensikeahlian = strtolower(end($keahlian));
        $file_tmpkeahlian = $_FILES['keahlian_taiw']['tmp_name'];   
        $angka_acak     = rand(1,999);
        $keahlian_baru = $angka_acak.'-'.$keahlian_taiw;
      
      if($bahasa_taiw != "") {
        $ekstensi_diperbolehkanbahasa = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
        $bahasa = explode('.', $bahasa_taiw); //memisahkan nama file dengan ekstensi yang diupload
        $ekstensibahasa = strtolower(end($bahasa));
        $file_tmpbahasa = $_FILES['bahasa_taiw']['tmp_name'];   
        $angka_acak     = rand(1,999);
        $bahasa_baru = $angka_acak.'-'.$bahasa_taiw;
      
        if(in_array($ekstensikeahlian, $ekstensi_diperbolehkanekeahlian) === true)  {     
            move_uploaded_file($file_tmpkeahlian, 'berkas/SertifTaiwan/Keahlian/'.$keahlian_baru);
            if(in_array($ekstensibahasa, $ekstensi_diperbolehkanbahasa) === true)  {
                move_uploaded_file($file_tmpbahasa, 'berkas/SertifTaiwan/Bahasa/'.$bahasa_baru);
                   
        // jalankan query UPDATE berdasarkan ID yang produknya kita edit
        $query  = "UPDATE sertiftaiwan SET id='$id', keahlian_taiw='$keahlian_baru', bahasa_taiw='$bahasa_baru'
        WHERE id_sertif_taiw='$id_sertif_taiw'";
              $result = mysqli_query($konektor, $query);
              if(!$result){
                die ("Query gagal dijalankan: ".mysqli_errno($konektor).
                     " - ".mysqli_error($konektor));
            } else {
              //tampil alert dan akan redirect ke halaman index.php
              //silahkan ganti index.php sesuai halaman yang akan dituju
              echo "<script>alert('Data berhasil diubah.');window.location='tabelSertifikasiTaiwan.php';</script>";
            }
      } else {     
       //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
          echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tabelSertifikasiTaiwanEdit.php';</script>";
        }
        }
        }
        } else {
        // jalankan query UPDATE berdasarkan ID yang produknya kita edit
        $query  = "UPDATE sertiftaiwan SET id='$id', keahlian_taiw='$keahlian_baru', bahasa_taiw='$bahasa_baru'
        WHERE id_sertif_taiw='$id_sertif_taiw'";
        $result = mysqli_query($konektor, $query);
        // periska query apakah ada error
        if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($konektor).
                            " - ".mysqli_error($konektor));
        } else {
        echo "<script>alert('Data berhasil diubah.');window.location='tabelSertifikasiTaiwan.php';</script>";
        }
        }
?>