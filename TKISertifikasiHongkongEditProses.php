<?php 
    // koneksi database
	include "config.php";
    $konektor = mysqli_connect("localhost","root","", "tki");
    // menangkap data yang di kirim dari form
    $id_sertif_hk = $_POST['id_sertif_hk'];
    $id = $_POST['id'];
    $keahlian_hk = $_FILES['keahlian_hk']['name'];

    //keahlian
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
    $query  = "UPDATE sertifhongkong SET id='$id', keahlian_hk='$keahlian_baru'
        WHERE id_sertif_hk='$id_sertif_hk'";
    $result = mysqli_query($konektor, $query);
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($konektor).
            " - ".mysqli_error($konektor));
    } else {
    echo "<script>alert('Data berhasil diubah.');window.location='TKISertifikasiHongkong.php';</script>";
    }

   

    if($keahlian_hk != "") {
        $ekstensi_diperbolehkankeahlian = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
        $keahlian = explode('.', $keahlian_hk); //memisahkan nama file dengan ekstensi yang diupload
        $ekstensikeahlian = strtolower(end($keahlian));
        $file_tmpkeahlian = $_FILES['keahlian_hk']['tmp_name'];   
        $angka_acak     = rand(1,999);
        $keahlian_baru = $angka_acak.'-'.$keahlian_hk;
      
        if(in_array($ekstensikeahlian, $ekstensi_diperbolehkanekeahlian) === true)  {     
            move_uploaded_file($file_tmpkeahlian, 'berkas/SertifHongkong/Keahlian/'.$keahlian_baru);
                   
        // jalankan query UPDATE berdasarkan ID yang produknya kita edit
        $id = $_POST['id_lama'];
        $query  = "UPDATE sertifhongkong SET id='$id', keahlian_hk='$keahlian_baru'
        WHERE id_sertif_hk='$id_sertif_hk'";
              $result = mysqli_query($konektor, $query);
              if(!$result){
                die ("Query gagal dijalankan: ".mysqli_errno($konektor).
                     " - ".mysqli_error($konektor));
            } else {
              //tampil alert dan akan redirect ke halaman index.php
              //silahkan ganti index.php sesuai halaman yang akan dituju
              echo "<script>alert('Data berhasil diubah.');window.location='TKISertifikasiHongkong.php';</script>";
            }
      } else {     
       //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
          echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='TKISertifikasiHongkongEdit.php';</script>";
        }
        } else {
        // jalankan query UPDATE berdasarkan ID yang produknya kita edit
        $id = $_POST['id_lama'];
        $query  = "UPDATE sertifhongkong SET id='$id', keahlian_hk='$keahlian_baru'
        WHERE id_sertif_hk='$id_sertif_hk'";
        $result = mysqli_query($konektor, $query);
        // periska query apakah ada error
        if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($konektor).
                            " - ".mysqli_error($konektor));
        } else {
        echo "<script>alert('Data berhasil diubah.');window.location='TKISertifikasiHongkong.php';</script>";
        }
        }
?>