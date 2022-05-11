<?php 
    // koneksi database
	include "config.php";
    $konektor = mysqli_connect("localhost","root","", "tki");
    // menangkap data yang di kirim dari form
    $id_malaysia = $_POST['id_malaysia'];
    $id_dft = $_POST['id_dft'];
    $sektor_malay = $_POST['sektor_malay'];
    $ektp_malay = $_FILES['ektp_malay']['name'];
    $kk_malay = $_FILES['kk_malay']['name'];
    $akte_malay = $_FILES['akte_malay']['name'];
    $suratnikah_malay = $_FILES['suratnikah_malay']['name'];
    $suratijin_malay = $_FILES['suratijin_malay']['name'];
    $expaspor_malay = $_FILES['expaspor_malay']['name'];
    $skck_malay = $_FILES['skck_malay']['name'];
    $rekomid_malay = $_FILES['rekomid_malay']['name'];
    $biometri_malay = $_FILES['biometri_malay']['name'];
    $id_tahapdua = $_POST['id_tahapdua'];
    $keterangan_malay = $_POST['keterangan_malay'];
  
    if($ektp_malay != "") {
      $ekstensi_diperbolehkanektp = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
      $ektp = explode('.', $ektp_malay); //memisahkan nama file dengan ekstensi yang diupload
      $ekstensiektp = strtolower(end($ektp));
      $file_tmpektp = $_FILES['ektp_malay']['tmp_name'];   
      $angka_acak     = rand(1,999);
      $ektp_baru = $angka_acak.'-'.$ektp_malay; //menggabungkan angka acak dengan nama file sebenarnya
      //kk
      if($kk_malay != "") {
      $ekstensi_diperbolehkankk = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
      $kk = explode('.', $kk_malay); //memisahkan nama file dengan ekstensi yang diupload
      $ekstensikk = strtolower(end($kk));
      $file_tmpkk = $_FILES['kk_malay']['tmp_name'];   
      $angka_acak     = rand(1,999);
      $kk_baru = $angka_acak.'-'.$kk_malay;
      //akte
      if($akte_malay != "") {
      $ekstensi_diperbolehkanakte = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
      $akte = explode('.', $akte_malay); //memisamalayan nama file dengan ekstensi yang diupload
      $ekstensiakte = strtolower(end($akte));
      $file_tmpakte = $_FILES['akte_malay']['tmp_name'];   
      $angka_acak     = rand(1,999);
      $akte_baru = $angka_acak.'-'.$akte_malay;
      //surat nikah
      if($suratnikah_malay != "") {
      $ekstensi_diperbolehkansn = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
      $suratnikah = explode('.', $suratnikah_malay); //memisahkan nama file dengan ekstensi yang diupload
      $ekstensisn = strtolower(end($suratnikah));
      $file_tmpsn = $_FILES['suratnikah_malay']['tmp_name'];   
      $angka_acak     = rand(1,999);
      $suratnikah_baru = $angka_acak.'-'.$suratnikah_malay;
      //surat ijin
      if($suratijin_malay != "") {
      $ekstensi_diperbolehkansi = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
      $suratijin = explode('.', $suratijin_malay); //memisahkan nama file dengan ekstensi yang diupload
      $ekstensisi = strtolower(end($suratijin));
      $file_tmpsi = $_FILES['suratijin_malay']['tmp_name'];   
      $angka_acak     = rand(1,999);
      $suratijin_baru = $angka_acak.'-'.$suratijin_malay;
      //ex paspor
      if($expaspor_malay != "") {
      $ekstensi_diperbolehkanep = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
      $expaspor = explode('.', $expaspor_malay); //memisahkan nama file dengan ekstensi yang diupload
      $ekstensiep = strtolower(end($expaspor));
      $file_tmpep = $_FILES['expaspor_malay']['tmp_name'];   
      $angka_acak     = rand(1,999);
      $expaspor_baru = $angka_acak.'-'.$expaspor_malay;
      //skck
      if($skck_malay != "") {
      $ekstensi_diperbolehkansk = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
      $skck = explode('.', $skck_malay); //memisahkan nama file dengan ekstensi yang diupload
      $ekstensisk = strtolower(end($skck));
      $file_tmpsk = $_FILES['skck_malay']['tmp_name'];   
      $angka_acak     = rand(1,999);
      $skck_baru = $angka_acak.'-'.$skck_malay;
      //Rekom ID
      if($rekomid_malay != "") {
        $ekstensi_diperbolehkanrek = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
        $rekomid = explode('.', $rekomid_malay); //memisahkan nama file dengan ekstensi yang diupload
        $ekstensirek = strtolower(end($rekomid));
        $file_tmprek = $_FILES['rekomid_malay']['tmp_name'];   
        $angka_acak     = rand(1,999);
        $rekomid_baru = $angka_acak.'-'.$rekomid_malay;
      //Biometri
      if($biometri_malay != "") {
        $ekstensi_diperbolehkanbio = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
        $biometri = explode('.', $biometri_malay); //memisahkan nama file dengan ekstensi yang diupload
        $ekstensibio = strtolower(end($biometri));
        $file_tmpbio = $_FILES['biometri_malay']['tmp_name'];   
        $angka_acak     = rand(1,999);
        $biometri_baru = $angka_acak.'-'.$biometri_malay;
  
            if(in_array($ekstensiektp, $ekstensi_diperbolehkanektp) === true)  {     
                    move_uploaded_file($file_tmpektp, 'berkas/Malaysia/'.$ektp_baru); //memindah file gambar ke folder gambar
                    if(in_array($ekstensikk, $ekstensi_diperbolehkankk) === true)  {
                    move_uploaded_file($file_tmpkk, 'berkas/Malaysia/'.$kk_baru);
                    if(in_array($ekstensiakte, $ekstensi_diperbolehkanakte) === true)  {
                    move_uploaded_file($file_tmpakte, 'berkas/Malaysia/'.$akte_baru);
                    if(in_array($ekstensisn, $ekstensi_diperbolehkansn) === true)  {
                    move_uploaded_file($file_tmpsn, 'berkas/Malaysia/'.$suratnikah_baru);
                    if(in_array($ekstensisi, $ekstensi_diperbolehkansi) === true)  {
                    move_uploaded_file($file_tmpsi, 'berkas/Malaysia/'.$suratijin_baru);
                    if(in_array($ekstensiep, $ekstensi_diperbolehkanep) === true)  {
                    move_uploaded_file($file_tmpep, 'berkas/Malaysia/'.$expaspor_baru);
                    if(in_array($ekstensisk, $ekstensi_diperbolehkansk) === true)  {
                    move_uploaded_file($file_tmpsk, 'berkas/Malaysia/'.$skck_baru);  
                    if(in_array($ekstensirek, $ekstensi_diperbolehkanrek) === true)  {
                    move_uploaded_file($file_tmprek, 'berkas/Malaysia/'.$rekomid_baru); 
                    if(in_array($ekstensibio, $ekstensi_diperbolehkanbio) === true)  {
                    move_uploaded_file($file_tmpbio, 'berkas/Malaysia/'.$biometri_baru);     
        
        // jalankan query UPDATE berdasarkan ID yang produknya kita edit
        $query  = "UPDATE malaysia SET id_dft='$id_dft', sektor_malay='$sektor_malay', ektp_malay='$ektp_baru', kk_malay='$kk_baru',
             akte_malay='$akte_baru', suratnikah_malay='$suratnikah_baru', suratijin_malay='$suratijin_baru',
             expaspor_malay='$expaspor_baru', skck_malay='$skck_baru', rekomid_malay='$rekomid_baru',
             biometri_malay='$biometri_baru', id_tahapdua='$id_tahapdua', keterangan_malay= '$keterangan_malay' 
             WHERE id_malaysia='$id_malaysia'";
              $result = mysqli_query($konektor, $query);
              if(!$result){
                die ("Query gagal dijalankan: ".mysqli_errno($konektor).
                     " - ".mysqli_error($konektor));
            } else {
              //tampil alert dan akan redirect ke halaman index.php
              //silahkan ganti index.php sesuai halaman yang akan dituju
              echo "<script>alert('Data berhasil diubah.');window.location='tabelDataTKIMalay.php';</script>";
            }
      } else {     
       //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
          echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tabelDataTKIMalayEdit.php';</script>";
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
$query  = "UPDATE malaysia SET id_dft='$id_dft', sektor_malay='$sektor_malay', id_tahapdua='$id_tahapdua', keterangan_malay= '$keterangan_malay'
WHERE id_malaysia='$id_malaysia'";
$result = mysqli_query($konektor, $query);
// periska query apakah ada error
if(!$result){
    die ("Query gagal dijalankan: ".mysqli_errno($konektor).
                     " - ".mysqli_error($konektor));
} else {

  echo "<script>alert('Data berhasil diubah.');window.location='tabelDataTKIMalay.php';</script>";
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