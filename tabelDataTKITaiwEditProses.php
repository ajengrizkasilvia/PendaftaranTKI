<?php 
    // koneksi database
	include "config.php";
    $konektor = mysqli_connect("localhost","root","", "tki");
    // menangkap data yang di kirim dari form
    $id_taiwan = $_POST['id_taiwan'];
    $id = $_POST['id'];
    $sektor_taiw = $_POST['sektor_taiw'];
    $ektp_taiw = $_FILES['ektp_taiw']['name'];
    $kk_taiw = $_FILES['kk_taiw']['name'];
    $akte_taiw = $_FILES['akte_taiw']['name'];
    $suratnikah_taiw = $_FILES['suratnikah_taiw']['name'];
    $suratijin_taiw = $_FILES['suratijin_taiw']['name'];
    $ijazah_taiw = $_FILES['ijazah_taiw']['name'];
    $expaspor_taiw = $_FILES['expaspor_taiw']['name'];
    $skck_taiw = $_FILES['skck_taiw']['name'];
    $kartukuning_taiw = $_FILES['kartukuning_taiw']['name'];
    $biometri_taiw = $_FILES['biometri_taiw']['name'];
    $id_tahapdua = $_POST['id_tahapdua'];
    $keterangan_taiw = $_POST['keterangan_taiw'];

    //EKTP
  if($ektp_taiw != "") {
    $ekstensi_diperbolehkanektp = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
    $ektp = explode('.', $ektp_taiw); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensiektp = strtolower(end($ektp));
    $file_tmpektp = $_FILES['ektp_taiw']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $ektp_baru = $angka_acak.'-'.$ektp_taiw;

    if(in_array($ekstensiektp, $ekstensi_diperbolehkanektp) === true)  {     
        move_uploaded_file($file_tmpektp, 'berkas/Taiwan/'.$ektp_baru);
    } 
    }else {
        $ektp_baru = $_POST['ektp_taiw_lama'];
    }
    $id = $_POST['id_lama'];
    $query  = "UPDATE taiwan SET id='$id', sektor_taiw='$sektor_taiw', ektp_taiw='$ektp_baru',
        id_tahapdua='$id_tahapdua', keterangan_taiw= '$keterangan_taiw' 
        WHERE id_taiwan='$id_taiwan'";
    $result = mysqli_query($konektor, $query);
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($konektor).
            " - ".mysqli_error($konektor));
    } else {
    echo "<script>alert('Data berhasil diubah.');window.location='tabelDataTKITaiw.php';</script>";
    }

    //KK
    if($kk_taiw != "") {
        $ekstensi_diperbolehkankk = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
        $kk = explode('.', $kk_taiw); //memisahkan nama file dengan ekstensi yang diupload
        $ekstensikk = strtolower(end($kk));
        $file_tmpkk = $_FILES['kk_taiw']['tmp_name'];   
        $angka_acak     = rand(1,999);
        $kk_baru = $angka_acak.'-'.$kk_taiw;

        if(in_array($ekstensikk, $ekstensi_diperbolehkankk) === true)  {
            move_uploaded_file($file_tmpkk, 'berkas/Taiwan/'.$kk_baru);
        } 
    }else {
        $kk_baru = $_POST['kk_taiw_lama'];
    }
    $id = $_POST['id_lama'];
    $query  = "UPDATE taiwan SET id='$id', sektor_taiw='$sektor_taiw', kk_taiw='$kk_baru',
        id_tahapdua='$id_tahapdua', keterangan_taiw= '$keterangan_taiw' 
        WHERE id_taiwan='$id_taiwan'";
    $result = mysqli_query($konektor, $query);
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($konektor).
            " - ".mysqli_error($konektor));
    } else {
    echo "<script>alert('Data berhasil diubah.');window.location='tabelDataTKITaiw.php';</script>";
    }

    //AKTE
    if($akte_taiw != "") {
        $ekstensi_diperbolehkanakte = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
        $akte = explode('.', $akte_taiw); //memisahkan nama file dengan ekstensi yang diupload
        $ekstensiakte = strtolower(end($akte));
        $file_tmpakte = $_FILES['akte_taiw']['tmp_name'];   
        $angka_acak     = rand(1,999);
        $akte_baru = $angka_acak.'-'.$akte_taiw;

        if(in_array($ekstensiakte, $ekstensi_diperbolehkanakte) === true)  {
            move_uploaded_file($file_tmpakte, 'berkas/Taiwan/'.$akte_baru);
        } 
    }else {
        $akte_baru = $_POST['akte_taiw_lama'];
    }
    $id = $_POST['id_lama'];
    $query  = "UPDATE taiwan SET id='$id', sektor_taiw='$sektor_taiw', akte_taiw='$akte_baru',
        id_tahapdua='$id_tahapdua', keterangan_taiw= '$keterangan_taiw' 
        WHERE id_taiwan='$id_taiwan'";
    $result = mysqli_query($konektor, $query);
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($konektor).
            " - ".mysqli_error($konektor));
    } else {
    echo "<script>alert('Data berhasil diubah.');window.location='tabelDataTKITaiw.php';</script>";
    }

    //surat nikah
    if($suratnikah_taiw != "") {
        $ekstensi_diperbolehkansn = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
        $suratnikah = explode('.', $suratnikah_taiw); //memisahkan nama file dengan ekstensi yang diupload
        $ekstensisn = strtolower(end($suratnikah));
        $file_tmpsn = $_FILES['suratnikah_taiw']['tmp_name'];   
        $angka_acak     = rand(1,999);
        $suratnikah_baru = $angka_acak.'-'.$suratnikah_taiw;

        if(in_array($ekstensisn, $ekstensi_diperbolehkansn) === true)  {
            move_uploaded_file($file_tmpsn, 'berkas/Taiwan/'.$suratnikah_baru);
        } 
    }else {
        $suratnikah_baru = $_POST['suratnikah_taiw_lama'];
    }
    $id = $_POST['id_lama'];
    $query  = "UPDATE taiwan SET id='$id', sektor_taiw='$sektor_taiw', suratnikah_taiw='$suratnikah_baru', 
        id_tahapdua='$id_tahapdua', keterangan_taiw= '$keterangan_taiw' 
        WHERE id_taiwan='$id_taiwan'";
    $result = mysqli_query($konektor, $query);
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($konektor).
            " - ".mysqli_error($konektor));
    } else {
    echo "<script>alert('Data berhasil diubah.');window.location='tabelDataTKITaiw.php';</script>";
    }

    //surat ijin
    if($suratijin_taiw != "") {
        $ekstensi_diperbolehkansi = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
        $suratijin = explode('.', $suratijin_taiw); //memisahkan nama file dengan ekstensi yang diupload
        $ekstensisi = strtolower(end($suratijin));
        $file_tmpsi = $_FILES['suratijin_taiw']['tmp_name'];   
        $angka_acak     = rand(1,999);
        $suratijin_baru = $angka_acak.'-'.$suratijin_taiw;

        if(in_array($ekstensisi, $ekstensi_diperbolehkansi) === true)  {
            move_uploaded_file($file_tmpsi, 'berkas/Taiwan/'.$suratijin_baru);
        } 
    }else {
        $suratijin_baru = $_POST['suratijin_taiw_lama'];
    }
    $id = $_POST['id_lama'];
    $query  = "UPDATE taiwan SET id='$id', sektor_taiw='$sektor_taiw', suratijin_taiw='$suratijin_baru',
        id_tahapdua='$id_tahapdua', keterangan_taiw= '$keterangan_taiw' 
        WHERE id_taiwan='$id_taiwan'";
    $result = mysqli_query($konektor, $query);
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($konektor).
            " - ".mysqli_error($konektor));
    } else {
    echo "<script>alert('Data berhasil diubah.');window.location='tabelDataTKITaiw.php';</script>";
    }

     //ijazah
     if($ijazah_taiw != "") {
        $ekstensi_diperbolehkanij = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
        $ijazah = explode('.', $ijazah_taiw); //memisahkan nama file dengan ekstensi yang diupload
        $ekstensiij = strtolower(end($ijazah));
        $file_tmpij = $_FILES['ijazah_taiw']['tmp_name'];   
        $angka_acak     = rand(1,999);
        $ijazah_baru = $angka_acak.'-'.$ijazah_taiw;

        if(in_array($ekstensiij, $ekstensi_diperbolehkanij) === true)  {
            move_uploaded_file($file_tmpij, 'berkas/Taiwan/'.$ijazah_baru);
        } 
    }else {
        $ijazah_baru = $_POST['ijazah_taiw_lama'];
    }
    $id = $_POST['id_lama'];
    $query  = "UPDATE taiwan SET id='$id', sektor_taiw='$sektor_taiw', ijazah_taiw='$ijazah_baru',
         id_tahapdua='$id_tahapdua', keterangan_taiw= '$keterangan_taiw' 
        WHERE id_taiwan='$id_taiwan'";
     $result = mysqli_query($konektor, $query);
     if(!$result){
         die ("Query gagal dijalankan: ".mysqli_errno($konektor).
             " - ".mysqli_error($konektor));
     } else {
     echo "<script>alert('Data berhasil diubah.');window.location='tabelDataTKITaiw.php';</script>";
     }

    //ex paspor
    if($expaspor_taiw != "") {
        $ekstensi_diperbolehkanep = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
        $expaspor = explode('.', $expaspor_taiw); //memisahkan nama file dengan ekstensi yang diupload
        $ekstensiep = strtolower(end($expaspor));
        $file_tmpep = $_FILES['expaspor_taiw']['tmp_name'];   
        $angka_acak     = rand(1,999);
        $expaspor_baru = $angka_acak.'-'.$expaspor_taiw;

        if(in_array($ekstensiep, $ekstensi_diperbolehkanep) === true)  {
            move_uploaded_file($file_tmpep, 'berkas/Taiwan/'.$expaspor_baru);
        } 
    }else {
        $expaspor_baru = $_POST['expaspor_taiw_lama'];
    }
    $id = $_POST['id_lama'];
    $query  = "UPDATE taiwan SET id='$id', sektor_taiw='$sektor_taiw', 
        expaspor_taiw='$expaspor_baru',  id_tahapdua='$id_tahapdua', keterangan_taiw= '$keterangan_taiw' 
        WHERE id_taiwan='$id_taiwan'";
    $result = mysqli_query($konektor, $query);
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($konektor).
            " - ".mysqli_error($konektor));
    } else {
    echo "<script>alert('Data berhasil diubah.');window.location='tabelDataTKITaiw.php';</script>";
    }
        
    //skck
    if($skck_taiw != "") {
        $ekstensi_diperbolehkansk = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
        $skck = explode('.', $skck_taiw); //memisahkan nama file dengan ekstensi yang diupload
        $ekstensisk = strtolower(end($skck));
        $file_tmpsk = $_FILES['skck_taiw']['tmp_name'];   
        $angka_acak     = rand(1,999);
        $skck_baru = $angka_acak.'-'.$skck_taiw;

        if(in_array($ekstensisk, $ekstensi_diperbolehkansk) === true)  {
            move_uploaded_file($file_tmpsk, 'berkas/Taiwan/'.$skck_baru); 
        } 
    }else {
        $skck_baru = $_POST['skck_taiw_lama'];
    }
    $id = $_POST['id_lama'];
    $query  = "UPDATE taiwan SET id='$id', sektor_taiw='$sektor_taiw',
        skck_taiw='$skck_baru', id_tahapdua='$id_tahapdua', keterangan_taiw= '$keterangan_taiw' 
        WHERE id_taiwan='$id_taiwan'";
    $result = mysqli_query($konektor, $query);
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($konektor).
            " - ".mysqli_error($konektor));
    } else {
    echo "<script>alert('Data berhasil diubah.');window.location='tabelDataTKITaiw.php';</script>";
    }           
        
    //Rekom id
    if($kartukuning_taiw != "") {
        $ekstensi_diperbolehkankar = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
        $kartukuning = explode('.', $kartukuning_taiw); //memisahkan nama file dengan ekstensi yang diupload
        $ekstensikar = strtolower(end($kartukuning));
        $file_tmpkar = $_FILES['kartukuning_taiw']['tmp_name'];   
        $angka_acak     = rand(1,999);
        $kartukuning_baru = $angka_acak.'-'.$kartukuning_taiw;

        if(in_array($ekstensikar, $ekstensi_diperbolehkankar) === true)  {
            move_uploaded_file($file_tmpkar, 'berkas/Taiwan/'.$kartukuning_baru); 
        }
    }else {
        $kartukuning_baru = $_POST['kartukuning_taiw_lama'];
    } 
    $id = $_POST['id_lama'];
    $query  = "UPDATE taiwan SET id='$id', sektor_taiw='$sektor_taiw',
        kartukuning_taiw='$kartukuning_baru', id_tahapdua='$id_tahapdua', keterangan_taiw= '$keterangan_taiw' 
        WHERE id_taiwan='$id_taiwan'";
    $result = mysqli_query($konektor, $query);
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($konektor).
            " - ".mysqli_error($konektor));
    } else {
    echo "<script>alert('Data berhasil diubah.');window.location='tabelDataTKITaiw.php';</script>";
    }                    

    //Biometri
    if($biometri_taiw != "") {
        $ekstensi_diperbolehkanbio = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
        $biometri = explode('.', $biometri_taiw); //memisahkan nama file dengan ekstensi yang diupload
        $ekstensibio = strtolower(end($biometri));
        $file_tmpbio = $_FILES['biometri_taiw']['tmp_name'];   
        $angka_acak     = rand(1,999);
        $biometri_baru = $angka_acak.'-'.$biometri_taiw;

        if(in_array($ekstensibio, $ekstensi_diperbolehkanbio) === true)  {
            move_uploaded_file($file_tmpbio, 'berkas/Taiwan/'.$biometri_baru); 
        }
    }else {
        $biometri_baru = $_POST['biometri_taiw_lama'];
    } 
    $id = $_POST['id_lama'];
    $query  = "UPDATE taiwan SET id='$id', sektor_taiw='$sektor_taiw',
        biometri_taiw='$biometri_baru', id_tahapdua='$id_tahapdua', keterangan_taiw= '$keterangan_taiw' 
        WHERE id_taiwan='$id_taiwan'";
    $result = mysqli_query($konektor, $query);
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($konektor).
            " - ".mysqli_error($konektor));
    } else {
    echo "<script>alert('Data berhasil diubah.');window.location='tabelDataTKITaiw.php';</script>";
    }



    if($ektp_taiw != "") {
      $ekstensi_diperbolehkanektp = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
      $ektp = explode('.', $ektp_taiw); //memisahkan nama file dengan ekstensi yang diupload
      $ekstensiektp = strtolower(end($ektp));
      $file_tmpektp = $_FILES['ektp_taiw']['tmp_name'];   
      $angka_acak     = rand(1,999);
      $ektp_baru = $angka_acak.'-'.$ektp_taiw; //menggabungkan angka acak dengan nama file sebenarnya
      //kk
      if($kk_taiw != "") {
      $ekstensi_diperbolehkankk = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
      $kk = explode('.', $kk_taiw); //memisahkan nama file dengan ekstensi yang diupload
      $ekstensikk = strtolower(end($kk));
      $file_tmpkk = $_FILES['kk_taiw']['tmp_name'];   
      $angka_acak     = rand(1,999);
      $kk_baru = $angka_acak.'-'.$kk_taiw;
      //akte
      if($akte_taiw != "") {
      $ekstensi_diperbolehkanakte = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
      $akte = explode('.', $akte_taiw); //memisahkan nama file dengan ekstensi yang diupload
      $ekstensiakte = strtolower(end($akte));
      $file_tmpakte = $_FILES['akte_taiw']['tmp_name'];   
      $angka_acak     = rand(1,999);
      $akte_baru = $angka_acak.'-'.$akte_taiw;
      //surat nikah
      if($suratnikah_taiw != "") {
      $ekstensi_diperbolehkansn = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
      $suratnikah = explode('.', $suratnikah_taiw); //memisataiwan nama file dengan ekstensi yang diupload
      $ekstensisn = strtolower(end($suratnikah));
      $file_tmpsn = $_FILES['suratnikah_taiw']['tmp_name'];   
      $angka_acak     = rand(1,999);
      $suratnikah_baru = $angka_acak.'-'.$suratnikah_taiw;
      //surat ijin
      if($suratijin_taiw != "") {
      $ekstensi_diperbolehkansi = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
      $suratijin = explode('.', $suratijin_taiw); //memisahkan nama file dengan ekstensi yang diupload
      $ekstensisi = strtolower(end($suratijin));
      $file_tmpsi = $_FILES['suratijin_taiw']['tmp_name'];   
      $angka_acak     = rand(1,999);
      $suratijin_baru = $angka_acak.'-'.$suratijin_taiw;
      //ex paspor
      if($expaspor_taiw != "") {
      $ekstensi_diperbolehkanep = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
      $expaspor = explode('.', $expaspor_taiw); //memisahkan nama file dengan ekstensi yang diupload
      $ekstensiep = strtolower(end($expaspor));
      $file_tmpep = $_FILES['expaspor_taiw']['tmp_name'];   
      $angka_acak     = rand(1,999);
      $expaspor_baru = $angka_acak.'-'.$expaspor_taiw;
      //skck
      if($skck_taiw != "") {
      $ekstensi_diperbolehkansk = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
      $skck = explode('.', $skck_taiw); //memisahkan nama file dengan ekstensi yang diupload
      $ekstensisk = strtolower(end($skck));
      $file_tmpsk = $_FILES['skck_taiw']['tmp_name'];   
      $angka_acak     = rand(1,999);
      $skck_baru = $angka_acak.'-'.$skck_taiw;
      //Rekom Id
      if($kartukuning_taiw != "") {
      $ekstensi_diperbolehkankar = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
      $kartukuning = explode('.', $kartukuning_taiw); //memisahkan nama file dengan ekstensi yang diupload
      $ekstensikar = strtolower(end($kartukuning));
      $file_tmpkar = $_FILES['kartukuning_taiw']['tmp_name'];   
      $angka_acak     = rand(1,999);
      $kartukuning_baru = $angka_acak.'-'.$kartukuning_taiw;
      //Biometri
      if($biometri_taiw != "") {
      $ekstensi_diperbolehkanbio = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
      $biometri = explode('.', $biometri_taiw); //memisahkan nama file dengan ekstensi yang diupload
      $ekstensibio = strtolower(end($biometri));
      $file_tmpbio = $_FILES['biometri_taiw']['tmp_name'];   
      $angka_acak     = rand(1,999);
      $biometri_baru = $angka_acak.'-'.$biometri_taiw;
  
            if(in_array($ekstensiektp, $ekstensi_diperbolehkanektp) === true)  {     
                    move_uploaded_file($file_tmpektp, 'berkas/Taiwan/'.$ektp_baru); //memindah file gambar ke folder gambar
                    if(in_array($ekstensikk, $ekstensi_diperbolehkankk) === true)  {
                    move_uploaded_file($file_tmpkk, 'berkas/Taiwan/'.$kk_baru);
                    if(in_array($ekstensiakte, $ekstensi_diperbolehkanakte) === true)  {
                    move_uploaded_file($file_tmpakte, 'berkas/Taiwan/'.$akte_baru);
                    if(in_array($ekstensisn, $ekstensi_diperbolehkansn) === true)  {
                    move_uploaded_file($file_tmpsn, 'berkas/Taiwan/'.$suratnikah_baru);
                    if(in_array($ekstensisi, $ekstensi_diperbolehkansi) === true)  {
                    move_uploaded_file($file_tmpsi, 'berkas/Taiwan/'.$suratijin_baru);
                    if(in_array($ekstensiep, $ekstensi_diperbolehkanep) === true)  {
                    move_uploaded_file($file_tmpep, 'berkas/Taiwan/'.$expaspor_baru);
                    if(in_array($ekstensisk, $ekstensi_diperbolehkansk) === true)  {
                    move_uploaded_file($file_tmpsk, 'berkas/Taiwan/'.$skck_baru);  
                    if(in_array($ekstensikar, $ekstensi_diperbolehkankar) === true)  {
                    move_uploaded_file($file_tmpkar, 'berkas/Taiwan/'.$kartukuning_baru); 
                    if(in_array($ekstensibio, $ekstensi_diperbolehkanbio) === true)  {
                    move_uploaded_file($file_tmpbio, 'berkas/Taiwan/'.$biometri_baru);   
        
        // jalankan query UPDATE berdasarkan ID yang produknya kita edit
        $id = $_POST['id_lama'];
        $query  = "UPDATE taiwan SET id='$id', sektor_taiw='$sektor_taiw', ektp_taiw='$ektp_baru', kk_taiw='$kk_baru',
             akte_taiw='$akte_baru', suratnikah_taiw='$suratnikah_baru', suratijin_taiw='$suratijin_baru',
             expaspor_taiw='$expaspor_baru', skck_taiw='$skck_baru', kartukuning_taiw='$kartukuning_baru',
             biometri_taiw='$biometri_baru', id_tahapdua='$id_tahapdua', keterangan_taiw= '$keterangan_taiw' 
             WHERE id_taiwan='$id_taiwan'";
              $result = mysqli_query($konektor, $query);
              if(!$result){
                die ("Query gagal dijalankan: ".mysqli_errno($konektor).
                     " - ".mysqli_error($konektor));
            } else {
              //tampil alert dan akan redirect ke halaman index.php
              //silahkan ganti index.php sesuai halaman yang akan dituju
              echo "<script>alert('Data berhasil diubah.');window.location='tabelDataTKITaiw.php';</script>";
            }
      } else {     
       //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
          echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tabelDataTKITaiwEdit.php';</script>";
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
$id = $_POST['id_lama'];
$query  = "UPDATE taiwan SET id='$id', sektor_taiw='$sektor_taiw', id_tahapdua='$id_tahapdua', keterangan_taiw= '$keterangan_taiw'
             WHERE id_taiwan='$id_taiwan'";
$result = mysqli_query($konektor, $query);
// periska query apakah ada error
if(!$result){
    die ("Query gagal dijalankan: ".mysqli_errno($konektor).
                     " - ".mysqli_error($konektor));
} else {

  echo "<script>alert('Data berhasil diubah.');window.location='tabelDataTKITaiw.php';</script>";
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