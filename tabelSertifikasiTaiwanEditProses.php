<?php 
    // koneksi database
	include "config.php";
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
    $note_taiw = $_POST['note_taiw'];

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
    $id = $_POST['id_lama'];
    $id_dft = $_POST['id_dft_lama'];
    $query  = "UPDATE sertiftaiwan SET id='$id', id_dft='$id_dft', perawatanbayi_taiw='$perawatanbayi_taiw',pedulianak_taiw='$pedulianak_taiw', pekerjaanrt_taiw='$pekerjaanrt_taiw', perawatanortu_taiw='$perawatanortu_taiw',
    memasak_taiw='$memasak_taiw',inggris_taiw='$inggris_taiw', kantonis_taiw='$kantonis_taiw',mandarin_taiw='$mandarin_taiw', keahlian_taiw='$keahlian_baru', note_taiw='$note_taiw'
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
      
      
        if(in_array($ekstensikeahlian, $ekstensi_diperbolehkanekeahlian) === true)  {     
            move_uploaded_file($file_tmpkeahlian, 'berkas/SertifTaiwan/Keahlian/'.$keahlian_baru);
                   
        // jalankan query UPDATE berdasarkan ID yang produknya kita edit
        $id = $_POST['id_lama'];
        $id_dft = $_POST['id_dft_lama'];
        $query  = "UPDATE sertiftaiwan SET id='$id', id_dft='$id_dft', perawatanbayi_taiw='$perawatanbayi_taiw',pedulianak_taiw='$pedulianak_taiw', pekerjaanrt_taiw='$pekerjaanrt_taiw', perawatanortu_taiw='$perawatanortu_taiw',
        memasak_taiw='$memasak_taiw',inggris_taiw='$inggris_taiw', kantonis_taiw='$kantonis_taiw',mandarin_taiw='$mandarin_taiw', keahlian_taiw='$keahlian_baru', note_taiw='$note_taiw'
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
        } else {
        // jalankan query UPDATE berdasarkan ID yang produknya kita edit
        $id = $_POST['id_lama'];
        $id_dft = $_POST['id_dft_lama'];
        $query  = "UPDATE sertiftaiwan SET id='$id', id_dft='$id_dft', perawatanbayi_taiw='$perawatanbayi_taiw',pedulianak_taiw='$pedulianak_taiw', pekerjaanrt_taiw='$pekerjaanrt_taiw', perawatanortu_taiw='$perawatanortu_taiw',
        memasak_taiw='$memasak_taiw',inggris_taiw='$inggris_taiw', kantonis_taiw='$kantonis_taiw',mandarin_taiw='$mandarin_taiw', keahlian_taiw='$keahlian_baru', note_taiw='$note_taiw'
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