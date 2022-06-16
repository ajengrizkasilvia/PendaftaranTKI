<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'config.php';
$konektor = mysqli_connect("localhost","root","", "tki");

	// membuat variabel untuk menampung data dari form
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
            
        //Rekom id
        if($kartukuning_taiw != "") {
            $ekstensi_diperbolehkanrek = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
            $kartukuning = explode('.', $kartukuning_taiw); //memisahkan nama file dengan ekstensi yang diupload
            $ekstensirek = strtolower(end($kartukuning));
            $file_tmprek = $_FILES['kartukuning_taiw']['tmp_name'];   
            $angka_acak     = rand(1,999);
            $kartukuning_baru = $angka_acak.'-'.$kartukuning_taiw;
    
            if(in_array($ekstensirek, $ekstensi_diperbolehkanrek) === true)  {
                move_uploaded_file($file_tmprek, 'berkas/Taiwan/'.$kartukuning_baru); 
            }
        }else {
            $kartukuning_baru = $_POST['kartukuning_taiw_lama'];
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
        $query = "INSERT INTO taiwan (id, sektor_taiw, ektp_taiw, kk_taiw, akte_taiw, suratnikah_taiw, suratijin_taiw, ijazah_taiw, expaspor_taiw, skck_taiw, kartukuning_taiw, biometri_taiw, id_tahapdua, keterangan_taiw) VALUES ('$id', '$sektor_taiw', '$ektp_baru', '$kk_baru', '$akte_baru', '$suratnikah_baru', '$suratijin_baru', '$ijazah_baru', '$expaspor_baru', '$skck_baru', '$kartukuning_baru', '$biometri_baru', '$id_tahapdua', '$keterangan_taiw')";
        $result = mysqli_query($konektor, $query);
        if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($konektor).
                " - ".mysqli_error($konektor));
        } else {
        echo "<script>alert('Data berhasil diubah.');window.location='tabelDataTKITaiw.php';</script>";
        }

?>