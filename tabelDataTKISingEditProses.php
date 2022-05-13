<?php 
    // koneksi database
	include "config.php";
    $konektor = mysqli_connect("localhost","root","", "tki");
    // menangkap data yang di kirim dari form
    $id_singapore = $_POST['id_singapore'];
    $id_dft = $_POST['id_dft'];
    $sektor_sing = $_POST['sektor_sing'];
    $ektp_sing = $_FILES['ektp_sing']['name'];
    $kk_sing = $_FILES['kk_sing']['name'];
    $akte_sing = $_FILES['akte_sing']['name'];
    $suratnikah_sing = $_FILES['suratnikah_sing']['name'];
    $suratijin_sing = $_FILES['suratijin_sing']['name'];
    $expaspor_sing = $_FILES['expaspor_sing']['name'];
    $skck_sing = $_FILES['skck_sing']['name'];
    $rekomid_sing = $_FILES['rekomid_sing']['name'];
    $biometri_sing = $_FILES['biometri_sing']['name'];
    $id_tahapdua = $_POST['id_tahapdua'];
    $keterangan_sing = $_POST['keterangan_sing'];
  
    if($ektp_sing != "") {
      $ekstensi_diperbolehkanektp = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
      $ektp = explode('.', $ektp_sing); //memisahkan nama file dengan ekstensi yang diupload
      $ekstensiektp = strtolower(end($ektp));
      $file_tmpektp = $_FILES['ektp_sing']['tmp_name'];   
      $angka_acak     = rand(1,999);
      $ektp_baru = $angka_acak.'-'.$ektp_sing; //menggabungkan angka acak dengan nama file sebenarnya
      //kk
      if($kk_sing != "") {
      $ekstensi_diperbolehkankk = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
      $kk = explode('.', $kk_sing); //memisahkan nama file dengan ekstensi yang diupload
      $ekstensikk = strtolower(end($kk));
      $file_tmpkk = $_FILES['kk_sing']['tmp_name'];   
      $angka_acak     = rand(1,999);
      $kk_baru = $angka_acak.'-'.$kk_sing;
      //akte
      if($akte_sing != "") {
      $ekstensi_diperbolehkanakte = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
      $akte = explode('.', $akte_sing); //memisahkan nama file dengan ekstensi yang diupload
      $ekstensiakte = strtolower(end($akte));
      $file_tmpakte = $_FILES['akte_sing']['tmp_name'];   
      $angka_acak     = rand(1,999);
      $akte_baru = $angka_acak.'-'.$akte_sing;
      //surat nikah
      if($suratnikah_sing != "") {
      $ekstensi_diperbolehkansn = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
      $suratnikah = explode('.', $suratnikah_sing); //memisahkan nama file dengan ekstensi yang diupload
      $ekstensisn = strtolower(end($suratnikah));
      $file_tmpsn = $_FILES['suratnikah_sing']['tmp_name'];   
      $angka_acak     = rand(1,999);
      $suratnikah_baru = $angka_acak.'-'.$suratnikah_sing;
      //surat ijin
      if($suratijin_sing != "") {
      $ekstensi_diperbolehkansi = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
      $suratijin = explode('.', $suratijin_sing); //memisahkan nama file dengan ekstensi yang diupload
      $ekstensisi = strtolower(end($suratijin));
      $file_tmpsi = $_FILES['suratijin_sing']['tmp_name'];   
      $angka_acak     = rand(1,999);
      $suratijin_baru = $angka_acak.'-'.$suratijin_sing;
      //ex paspor
      if($expaspor_sing != "") {
      $ekstensi_diperbolehkanep = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
      $expaspor = explode('.', $expaspor_sing); //memisasingan nama file dengan ekstensi yang diupload
      $ekstensiep = strtolower(end($expaspor));
      $file_tmpep = $_FILES['expaspor_sing']['tmp_name'];   
      $angka_acak     = rand(1,999);
      $expaspor_baru = $angka_acak.'-'.$expaspor_sing;
      //skck
      if($skck_sing != "") {
      $ekstensi_diperbolehkansk = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
      $skck = explode('.', $skck_sing); //memisahkan nama file dengan ekstensi yang diupload
      $ekstensisk = strtolower(end($skck));
      $file_tmpsk = $_FILES['skck_sing']['tmp_name'];   
      $angka_acak     = rand(1,999);
      $skck_baru = $angka_acak.'-'.$skck_sing;
      //Rekom id
      if($rekomid_sing != "") {
      $ekstensi_diperbolehkanrek = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
      $rekomid = explode('.', $rekomid_sing); //memisahkan nama file dengan ekstensi yang diupload
      $ekstensirek = strtolower(end($rekomid));
      $file_tmprek = $_FILES['rekomid_sing']['tmp_name'];   
      $angka_acak     = rand(1,999);
      $rekomid_baru = $angka_acak.'-'.$rekomid_sing;
      //Biometri
      if($biometri_sing != "") {
      $ekstensi_diperbolehkanbio = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
      $biometri = explode('.', $biometri_sing); //memisahkan nama file dengan ekstensi yang diupload
      $ekstensibio = strtolower(end($biometri));
      $file_tmpbio = $_FILES['biometri_sing']['tmp_name'];   
      $angka_acak     = rand(1,999);
      $biometri_baru = $angka_acak.'-'.$biometri_sing;
  
            if(in_array($ekstensiektp, $ekstensi_diperbolehkanektp) === true)  {     
                    move_uploaded_file($file_tmpektp, 'berkas/Singapore/'.$ektp_baru); //memindah file gambar ke folder gambar
                    if(in_array($ekstensikk, $ekstensi_diperbolehkankk) === true)  {
                    move_uploaded_file($file_tmpkk, 'berkas/Singapore/'.$kk_baru);
                    if(in_array($ekstensiakte, $ekstensi_diperbolehkanakte) === true)  {
                    move_uploaded_file($file_tmpakte, 'berkas/Singapore/'.$akte_baru);
                    if(in_array($ekstensisn, $ekstensi_diperbolehkansn) === true)  {
                    move_uploaded_file($file_tmpsn, 'berkas/Singapore/'.$suratnikah_baru);
                    if(in_array($ekstensisi, $ekstensi_diperbolehkansi) === true)  {
                    move_uploaded_file($file_tmpsi, 'berkas/Singapore/'.$suratijin_baru);
                    if(in_array($ekstensiep, $ekstensi_diperbolehkanep) === true)  {
                    move_uploaded_file($file_tmpep, 'berkas/Singapore/'.$expaspor_baru);
                    if(in_array($ekstensisk, $ekstensi_diperbolehkansk) === true)  {
                    move_uploaded_file($file_tmpsk, 'berkas/Singapore/'.$skck_baru);  
                    if(in_array($ekstensirek, $ekstensi_diperbolehkanrek) === true)  {
                    move_uploaded_file($file_tmprek, 'berkas/Singapore/'.$rekomid_baru); 
                    if(in_array($ekstensibio, $ekstensi_diperbolehkanbio) === true)  {
                    move_uploaded_file($file_tmpbio, 'berkas/Singapore/'.$biometri_baru); 
        
        // jalankan query UPDATE berdasarkan ID yang produknya kita edit
        $query  = "UPDATE singapore SET id_dft='$id_dft', sektor_sing='$sektor_sing', ektp_sing='$ektp_baru', kk_sing='$kk_baru',
             akte_sing='$akte_baru', suratnikah_sing='$suratnikah_baru', suratijin_sing='$suratijin_baru',
             expaspor_sing='$expaspor_baru', skck_sing='$skck_baru', rekomid_sing='$rekomid_baru',
             biometri_sing='$biometri_baru', id_tahapdua='$id_tahapdua', keterangan_sing= '$keterangan_sing'  
             WHERE id_singapore='$id_singapore'";
              $result = mysqli_query($konektor, $query);
              if(!$result){
                die ("Query gagal dijalankan: ".mysqli_errno($konektor).
                     " - ".mysqli_error($konektor));
            } else {
              //tampil alert dan akan redirect ke halaman index.php
              //silahkan ganti index.php sesuai halaman yang akan dituju
              echo "<script>alert('Data berhasil diubah.');window.location='tabelDataTKISing.php';</script>";
            }
      } else {     
       //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
          echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tabelDataTKISingEdit.php';</script>";
        }
        }
        }
        }
        }
        }
        }
        }
        }
} else {
// jalankan query UPDATE berdasarkan ID yang produknya kita edit
$query  = "UPDATE singapore SET id_dft='$id_dft', sektor_sing='$sektor_sing', id_tahapdua='$id_tahapdua', keterangan_sing= '$keterangan_sing'
 WHERE id_singapore='$id_singapore'";
$result = mysqli_query($konektor, $query);
// periska query apakah ada error
if(!$result){
    die ("Query gagal dijalankan: ".mysqli_errno($konektor).
                     " - ".mysqli_error($konektor));
} else {

  echo "<script>alert('Data berhasil diubah.');window.location='tabelDataTKISing.php';</script>";
}
}
}
}
}
}
}
}
}
}
?>