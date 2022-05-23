<?php 
    // koneksi database
	include "config.php";
    $konektor = mysqli_connect("localhost","root","", "tki");
    // menangkap data yang di kirim dari form
    $id_hongkong = $_POST['id_hongkong'];
    $id= $_POST['id'];
	$sektor_hk = $_POST['sektor_hk'];
    $ektp_hk = $_FILES['ektp_hk']['name'];
    $kk_hk = $_FILES['kk_hk']['name'];
    $akte_hk = $_FILES['akte_hk']['name'];
    $suratnikah_hk = $_FILES['suratnikah_hk']['name'];
    $suratijin_hk = $_FILES['suratijin_hk']['name'];
    $expaspor_hk = $_FILES['expaspor_hk']['name'];
    $skck_hk = $_FILES['skck_hk']['name'];
    $rekomid_hk = $_FILES['rekomid_hk']['name'];
    $biometri_hk = $_FILES['biometri_hk']['name'];
    $id_tahapdua = $_POST['id_tahapdua'];
    $keterangan_hk = $_POST['keterangan_hk'];

    //EKTP
	if($ektp_hk != "") {
        $ekstensi_diperbolehkanektp = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
        $ektp = explode('.', $ektp_hk); //memisahkan nama file dengan ekstensi yang diupload
        $ekstensiektp = strtolower(end($ektp));
        $file_tmpektp = $_FILES['ektp_hk']['tmp_name'];   
        $angka_acak     = rand(1,999);
        $ektp_baru = $angka_acak.'-'.$ektp_hk;

        if(in_array($ekstensiektp, $ekstensi_diperbolehkanektp) === true)  {     
            move_uploaded_file($file_tmpektp, 'berkas/Hongkong/'.$ektp_baru);
        } 
    }else {
        $ektp_baru = $_POST['ektp_hk_lama'];
    }
    $id = $_POST['id_lama'];
    $query  = "UPDATE hongkong SET id='$id', sektor_hk='$sektor_hk', ektp_hk='$ektp_baru',
        id_tahapdua='$id_tahapdua', keterangan_hk= '$keterangan_hk' 
        WHERE id_hongkong='$id_hongkong'";
     $result = mysqli_query($konektor, $query);
     if(!$result){
         die ("Query gagal dijalankan: ".mysqli_errno($konektor).
             " - ".mysqli_error($konektor));
     } else {
     echo "<script>alert('Data berhasil diubah.');window.location='tabelDataTKIHong.php';</script>";
     }

    //KK
    if($kk_hk != "") {
        $ekstensi_diperbolehkankk = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
        $kk = explode('.', $kk_hk); //memisahkan nama file dengan ekstensi yang diupload
        $ekstensikk = strtolower(end($kk));
        $file_tmpkk = $_FILES['kk_hk']['tmp_name'];   
        $angka_acak     = rand(1,999);
        $kk_baru = $angka_acak.'-'.$kk_hk;

        if(in_array($ekstensikk, $ekstensi_diperbolehkankk) === true)  {
            move_uploaded_file($file_tmpkk, 'berkas/Hongkong/'.$kk_baru);
        } 
    }else {
        $kk_baru = $_POST['kk_hk_lama'];
    }
    $id = $_POST['id_lama'];
    $query  = "UPDATE hongkong SET id='$id', sektor_hk='$sektor_hk', kk_hk='$kk_baru',
         id_tahapdua='$id_tahapdua', keterangan_hk= '$keterangan_hk' 
        WHERE id_hongkong='$id_hongkong'";
     $result = mysqli_query($konektor, $query);
     if(!$result){
         die ("Query gagal dijalankan: ".mysqli_errno($konektor).
             " - ".mysqli_error($konektor));
     } else {
     echo "<script>alert('Data berhasil diubah.');window.location='tabelDataTKIHong.php';</script>";
     }
    
    //AKTE
    if($akte_hk != "") {
        $ekstensi_diperbolehkanakte = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
        $akte = explode('.', $akte_hk); //memisahkan nama file dengan ekstensi yang diupload
        $ekstensiakte = strtolower(end($akte));
        $file_tmpakte = $_FILES['akte_hk']['tmp_name'];   
        $angka_acak     = rand(1,999);
        $akte_baru = $angka_acak.'-'.$akte_hk;

        if(in_array($ekstensiakte, $ekstensi_diperbolehkanakte) === true)  {
            move_uploaded_file($file_tmpakte, 'berkas/Hongkong/'.$akte_baru);
        } 
    }else {
        $akte_baru = $_POST['akte_hk_lama'];
    }
    $id = $_POST['id_lama'];
    $query  = "UPDATE hongkong SET id='$id', sektor_hk='$sektor_hk', akte_hk='$akte_baru',
        id_tahapdua='$id_tahapdua', keterangan_hk= '$keterangan_hk' 
        WHERE id_hongkong='$id_hongkong'";
     $result = mysqli_query($konektor, $query);
     if(!$result){
         die ("Query gagal dijalankan: ".mysqli_errno($konektor).
             " - ".mysqli_error($konektor));
     } else {
     echo "<script>alert('Data berhasil diubah.');window.location='tabelDataTKIHong.php';</script>";
     }

    //surat nikah
    if($suratnikah_hk != "") {
        $ekstensi_diperbolehkansn = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
        $suratnikah = explode('.', $suratnikah_hk); //memisahkan nama file dengan ekstensi yang diupload
        $ekstensisn = strtolower(end($suratnikah));
        $file_tmpsn = $_FILES['suratnikah_hk']['tmp_name'];   
        $angka_acak     = rand(1,999);
        $suratnikah_baru = $angka_acak.'-'.$suratnikah_hk;

        if(in_array($ekstensisn, $ekstensi_diperbolehkansn) === true)  {
            move_uploaded_file($file_tmpsn, 'berkas/Hongkong/'.$suratnikah_baru);
        } 
    }else {
        $suratnikah_baru = $_POST['suratnikah_hk_lama'];
    }
    $id = $_POST['id_lama'];
    $query  = "UPDATE hongkong SET id='$id', sektor_hk='$sektor_hk', suratnikah_hk='$suratnikah_baru', 
        id_tahapdua='$id_tahapdua', keterangan_hk= '$keterangan_hk' 
        WHERE id_hongkong='$id_hongkong'";
     $result = mysqli_query($konektor, $query);
     if(!$result){
         die ("Query gagal dijalankan: ".mysqli_errno($konektor).
             " - ".mysqli_error($konektor));
     } else {
     echo "<script>alert('Data berhasil diubah.');window.location='tabelDataTKIHong.php';</script>";
     }

    //surat ijin
    if($suratijin_hk != "") {
        $ekstensi_diperbolehkansi = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
        $suratijin = explode('.', $suratijin_hk); //memisahkan nama file dengan ekstensi yang diupload
        $ekstensisi = strtolower(end($suratijin));
        $file_tmpsi = $_FILES['suratijin_hk']['tmp_name'];   
        $angka_acak     = rand(1,999);
        $suratijin_baru = $angka_acak.'-'.$suratijin_hk;

        if(in_array($ekstensisi, $ekstensi_diperbolehkansi) === true)  {
            move_uploaded_file($file_tmpsi, 'berkas/Hongkong/'.$suratijin_baru);
        } 
    }else {
        $suratijin_baru = $_POST['suratijin_hk_lama'];
    }
    $id = $_POST['id_lama'];
    $query  = "UPDATE hongkong SET id='$id', sektor_hk='$sektor_hk', suratijin_hk='$suratijin_baru',
         id_tahapdua='$id_tahapdua', keterangan_hk= '$keterangan_hk' 
        WHERE id_hongkong='$id_hongkong'";
     $result = mysqli_query($konektor, $query);
     if(!$result){
         die ("Query gagal dijalankan: ".mysqli_errno($konektor).
             " - ".mysqli_error($konektor));
     } else {
     echo "<script>alert('Data berhasil diubah.');window.location='tabelDataTKIHong.php';</script>";
     }

    //ex paspor
    if($expaspor_hk != "") {
        $ekstensi_diperbolehkanep = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
        $expaspor = explode('.', $expaspor_hk); //memisahkan nama file dengan ekstensi yang diupload
        $ekstensiep = strtolower(end($expaspor));
        $file_tmpep = $_FILES['expaspor_hk']['tmp_name'];   
        $angka_acak     = rand(1,999);
        $expaspor_baru = $angka_acak.'-'.$expaspor_hk;

        if(in_array($ekstensiep, $ekstensi_diperbolehkanep) === true)  {
            move_uploaded_file($file_tmpep, 'berkas/Hongkong/'.$expaspor_baru);
        } 
    }else {
        $expaspor_baru = $_POST['expaspor_hk_lama'];
    }
    $id = $_POST['id_lama'];
    $query  = "UPDATE hongkong SET id='$id', sektor_hk='$sektor_hk', 
        expaspor_hk='$expaspor_baru',  id_tahapdua='$id_tahapdua', keterangan_hk= '$keterangan_hk' 
        WHERE id_hongkong='$id_hongkong'";
     $result = mysqli_query($konektor, $query);
     if(!$result){
         die ("Query gagal dijalankan: ".mysqli_errno($konektor).
             " - ".mysqli_error($konektor));
     } else {
     echo "<script>alert('Data berhasil diubah.');window.location='tabelDataTKIHong.php';</script>";
     }
        
    //skck
    if($skck_hk != "") {
        $ekstensi_diperbolehkansk = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
        $skck = explode('.', $skck_hk); //memisahkan nama file dengan ekstensi yang diupload
        $ekstensisk = strtolower(end($skck));
        $file_tmpsk = $_FILES['skck_hk']['tmp_name'];   
        $angka_acak     = rand(1,999);
        $skck_baru = $angka_acak.'-'.$skck_hk;

        if(in_array($ekstensisk, $ekstensi_diperbolehkansk) === true)  {
            move_uploaded_file($file_tmpsk, 'berkas/Hongkong/'.$skck_baru); 
        } 
    }else {
        $skck_baru = $_POST['skck_hk_lama'];
    }
    $id = $_POST['id_lama'];
    $query  = "UPDATE hongkong SET id='$id', sektor_hk='$sektor_hk',
        skck_hk='$skck_baru', id_tahapdua='$id_tahapdua', keterangan_hk= '$keterangan_hk' 
        WHERE id_hongkong='$id_hongkong'";
     $result = mysqli_query($konektor, $query);
     if(!$result){
         die ("Query gagal dijalankan: ".mysqli_errno($konektor).
             " - ".mysqli_error($konektor));
     } else {
     echo "<script>alert('Data berhasil diubah.');window.location='tabelDataTKIHong.php';</script>";
     }           
        
    //Rekom id
    if($rekomid_hk != "") {
        $ekstensi_diperbolehkanrek = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
        $rekomid = explode('.', $rekomid_hk); //memisahkan nama file dengan ekstensi yang diupload
        $ekstensirek = strtolower(end($rekomid));
        $file_tmprek = $_FILES['rekomid_hk']['tmp_name'];   
        $angka_acak     = rand(1,999);
        $rekomid_baru = $angka_acak.'-'.$rekomid_hk;

        if(in_array($ekstensirek, $ekstensi_diperbolehkanrek) === true)  {
            move_uploaded_file($file_tmprek, 'berkas/Hongkong/'.$rekomid_baru); 
        }
    }else {
        $rekomid_baru = $_POST['rekomid_hk_lama'];
    } 
    $id = $_POST['id_lama'];
    $query  = "UPDATE hongkong SET id='$id', sektor_hk='$sektor_hk',
        rekomid_hk='$rekomid_baru', id_tahapdua='$id_tahapdua', keterangan_hk= '$keterangan_hk' 
        WHERE id_hongkong='$id_hongkong'";
     $result = mysqli_query($konektor, $query);
     if(!$result){
         die ("Query gagal dijalankan: ".mysqli_errno($konektor).
             " - ".mysqli_error($konektor));
     } else {
     echo "<script>alert('Data berhasil diubah.');window.location='tabelDataTKIHong.php';</script>";
     }                    
    
    //Biometri
    if($biometri_hk != "") {
        $ekstensi_diperbolehkanbio = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
        $biometri = explode('.', $biometri_hk); //memisahkan nama file dengan ekstensi yang diupload
        $ekstensibio = strtolower(end($biometri));
        $file_tmpbio = $_FILES['biometri_hk']['tmp_name'];   
        $angka_acak     = rand(1,999);
        $biometri_baru = $angka_acak.'-'.$biometri_hk;

        if(in_array($ekstensibio, $ekstensi_diperbolehkanbio) === true)  {
            move_uploaded_file($file_tmpbio, 'berkas/Hongkong/'.$biometri_baru); 
        }
    }else {
        $biometri_baru = $_POST['biometri_hk_lama'];
    } 
    $id = $_POST['id_lama'];
    $query  = "UPDATE hongkong SET id='$id', sektor_hk='$sektor_hk',
        biometri_hk='$biometri_baru', id_tahapdua='$id_tahapdua', keterangan_hk= '$keterangan_hk' 
        WHERE id_hongkong='$id_hongkong'";
     $result = mysqli_query($konektor, $query);
     if(!$result){
         die ("Query gagal dijalankan: ".mysqli_errno($konektor).
             " - ".mysqli_error($konektor));
     } else {
     echo "<script>alert('Data berhasil diubah.');window.location='tabelDataTKIHong.php';</script>";
     }


    //EKTP
    if($ektp_hk != "") {
        $ekstensi_diperbolehkanektp = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
        $ektp = explode('.', $ektp_hk); //memisahkan nama file dengan ekstensi yang diupload
        $ekstensiektp = strtolower(end($ektp));
        $file_tmpektp = $_FILES['ektp_hk']['tmp_name'];   
        $angka_acak     = rand(1,999);
        $ektp_baru = $angka_acak.'-'.$ektp_hk;
        if($kk_hk != "") {
            $ekstensi_diperbolehkankk = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
            $kk = explode('.', $kk_hk); //memisahkan nama file dengan ekstensi yang diupload
            $ekstensikk = strtolower(end($kk));
            $file_tmpkk = $_FILES['kk_hk']['tmp_name'];   
            $angka_acak     = rand(1,999);
            $kk_baru = $angka_acak.'-'.$kk_hk;
                //akte
                if($akte_hk != "") {
                    $ekstensi_diperbolehkanakte = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
                    $akte = explode('.', $akte_hk); //memisahkan nama file dengan ekstensi yang diupload
                    $ekstensiakte = strtolower(end($akte));
                    $file_tmpakte = $_FILES['akte_hk']['tmp_name'];   
                    $angka_acak     = rand(1,999);
                    $akte_baru = $angka_acak.'-'.$akte_hk;
                    //surat nikah
                    if($suratnikah_hk != "") {
                        $ekstensi_diperbolehkansn = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
                        $suratnikah = explode('.', $suratnikah_hk); //memisahkan nama file dengan ekstensi yang diupload
                        $ekstensisn = strtolower(end($suratnikah));
                        $file_tmpsn = $_FILES['suratnikah_hk']['tmp_name'];   
                        $angka_acak     = rand(1,999);
                        $suratnikah_baru = $angka_acak.'-'.$suratnikah_hk;
                        //surat ijin
                        if($suratijin_hk != "") {
                            $ekstensi_diperbolehkansi = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
                            $suratijin = explode('.', $suratijin_hk); //memisahkan nama file dengan ekstensi yang diupload
                            $ekstensisi = strtolower(end($suratijin));
                            $file_tmpsi = $_FILES['suratijin_hk']['tmp_name'];   
                            $angka_acak     = rand(1,999);
                            $suratijin_baru = $angka_acak.'-'.$suratijin_hk;
                            //ex paspor
                            if($expaspor_hk != "") {
                                $ekstensi_diperbolehkanep = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
                                $expaspor = explode('.', $expaspor_hk); //memisahkan nama file dengan ekstensi yang diupload
                                $ekstensiep = strtolower(end($expaspor));
                                $file_tmpep = $_FILES['expaspor_hk']['tmp_name'];   
                                $angka_acak     = rand(1,999);
                                $expaspor_baru = $angka_acak.'-'.$expaspor_hk;
                                //skck
                                if($skck_hk != "") {
                                    $ekstensi_diperbolehkansk = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
                                    $skck = explode('.', $skck_hk); //memisahkan nama file dengan ekstensi yang diupload
                                    $ekstensisk = strtolower(end($skck));
                                    $file_tmpsk = $_FILES['skck_hk']['tmp_name'];   
                                    $angka_acak     = rand(1,999);
                                    $skck_baru = $angka_acak.'-'.$skck_hk;
                                    //Rekom id
                                    if($rekomid_hk != "") {
                                        $ekstensi_diperbolehkanrek = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
                                        $rekomid = explode('.', $rekomid_hk); //memisahkan nama file dengan ekstensi yang diupload
                                        $ekstensirek = strtolower(end($rekomid));
                                        $file_tmprek = $_FILES['rekomid_hk']['tmp_name'];   
                                        $angka_acak     = rand(1,999);
                                        $rekomid_baru = $angka_acak.'-'.$rekomid_hk;
                                        //Biometri
                                        if($biometri_hk != "") {
                                            $ekstensi_diperbolehkanbio = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
                                            $biometri = explode('.', $biometri_hk); //memisahkan nama file dengan ekstensi yang diupload
                                            $ekstensibio = strtolower(end($biometri));
                                            $file_tmpbio = $_FILES['biometri_hk']['tmp_name'];   
                                            $angka_acak     = rand(1,999);
                                            $biometri_baru = $angka_acak.'-'.$biometri_hk;

                                            if(in_array($ekstensiektp, $ekstensi_diperbolehkanektp) === true)  {     
                                                move_uploaded_file($file_tmpektp, 'berkas/Hongkong/'.$ektp_baru); //memindah file gambar ke folder gambar
                                                if(in_array($ekstensikk, $ekstensi_diperbolehkankk) === true)  {
                                                    move_uploaded_file($file_tmpkk, 'berkas/Hongkong/'.$kk_baru);
                                                    if(in_array($ekstensiakte, $ekstensi_diperbolehkanakte) === true)  {
                                                        move_uploaded_file($file_tmpakte, 'berkas/Hongkong/'.$akte_baru);
                                                        if(in_array($ekstensisn, $ekstensi_diperbolehkansn) === true)  {
                                                            move_uploaded_file($file_tmpsn, 'berkas/Hongkong/'.$suratnikah_baru);
                                                            if(in_array($ekstensisi, $ekstensi_diperbolehkansi) === true)  {
                                                                move_uploaded_file($file_tmpsi, 'berkas/Hongkong/'.$suratijin_baru);
                                                                if(in_array($ekstensiep, $ekstensi_diperbolehkanep) === true)  {
                                                                    move_uploaded_file($file_tmpep, 'berkas/Hongkong/'.$expaspor_baru);
                                                                    if(in_array($ekstensisk, $ekstensi_diperbolehkansk) === true)  {
                                                                        move_uploaded_file($file_tmpsk, 'berkas/Hongkong/'.$skck_baru);  
                                                                        if(in_array($ekstensirek, $ekstensi_diperbolehkanrek) === true)  {
                                                                            move_uploaded_file($file_tmprek, 'berkas/Hongkong/'.$rekomid_baru); 
                                                                            if(in_array($ekstensibio, $ekstensi_diperbolehkanbio) === true)  {
                                                                                move_uploaded_file($file_tmpbio, 'berkas/Hongkong/'.$biometri_baru);  

                                                                                //Biometri
                                                                                // jalankan query UPDATE berdasarkan ID yang produknya kita edit
                                                                                $id = $_POST['id_lama'];
                                                                                $query  = "UPDATE hongkong SET id='$id', sektor_hk='$sektor_hk', ektp_hk='$ektp_baru', kk_hk='$kk_baru',
                                                                                    akte_hk='$akte_baru', suratnikah_hk='$suratnikah_baru', suratijin_hk='$suratijin_baru',
                                                                                    expaspor_hk='$expaspor_baru', skck_hk='$skck_baru', rekomid_hk='$rekomid_baru',
                                                                                    biometri_hk='$biometri_baru', id_tahapdua='$id_tahapdua', keterangan_hk= '$keterangan_hk' 
                                                                                    WHERE id_hongkong='$id_hongkong'";
                                                                                    $result = mysqli_query($konektor, $query);
                                                                                    if(!$result){
                                                                                        die ("Query gagal dijalankan: ".mysqli_errno($konektor).
                                                                                            " - ".mysqli_error($konektor));
                                                                                    } else {
                                                                                    //tampil alert dan akan redirect ke halaman index.php
                                                                                    //silahkan ganti index.php sesuai halaman yang akan dituju
                                                                                    echo "<script>alert('Data berhasil diubah.');window.location='tabelDataTKIHong.php';</script>";
                                                                                    }
                                                                            } else {     
                                                                            //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                                                                                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tabelDataTKIHongEdit.php';</script>";
                                                                                }

                                                                                } else {     
                                                                                //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                                                                                    echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tabelDataTKIHongEdit.php';</script>";
                                                                                    }
                                                                    
                                                                    } else {     
                                                                        //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                                                                            echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tabelDataTKIHongEdit.php';</script>";
                                                                            }    
                                                                } else {     
                                                                    //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                                                                        echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tabelDataTKIHongEdit.php';</script>";
                                                                        }
                                                            
                                                            } else {     
                                                                //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                                                                    echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tabelDataTKIHongEdit.php';</script>";
                                                                    }
                                                       
                                                        } else {     
                                                            //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                                                                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tabelDataTKIHongEdit.php';</script>";
                                                                }
                                                    
                                                    } else {     
                                                        //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                                                            echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tabelDataTKIHongEdit.php';</script>";
                                                            }
                                               
                                                } else {     
                                                    //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                                                        echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tabelDataTKIHongEdit.php';</script>";
                                                        }
                                                    }
            //file untuk format foto
                                        }  else {
                                            // jalankan query UPDATE berdasarkan ID yang produknya kita edit
                                            $id = $_POST['id_lama'];
                                            $query  = "UPDATE hongkong SET id='$id', sektor_hk='$sektor_hk', id_tahapdua='$id_tahapdua', keterangan_hk= '$keterangan_hk'
                                            WHERE id_hongkong='$id_hongkong'";
                                            $result = mysqli_query($konektor, $query);
                                            // periska query apakah ada error
                                            if(!$result){
                                                die ("Query gagal dijalankan: ".mysqli_errno($konektor).
                                                                 " - ".mysqli_error($konektor));
                                            }else {
                                            echo "<script>alert('Data berhasil diubah.');window.location='tabelDataTKIHong.php';</script>";
                                        }
                                    }

                                    } else {
                                        echo "<script>alert('Data berhasil diubah.');window.location='tabelDataTKIHong.php';</script>";
                                    }
                                    
                                } else {    
                                    echo "<script>alert('Data berhasil diubah.');window.location='tabelDataTKIHong.php';</script>";
                                }
                                
                            } else {   
                                echo "<script>alert('Data berhasil diubah.');window.location='tabelDataTKIHong.php';</script>";
                            }
                            
                        } else {                       
                            echo "<script>alert('Data berhasil diubah.');window.location='tabelDataTKIHong.php';</script>";
                        }
                        
                    } else {
                        echo "<script>alert('Data berhasil diubah.');window.location='tabelDataTKIHong.php';</script>";
                    }
                    
                } else {
                    echo "<script>alert('Data berhasil diubah.');window.location='tabelDataTKIHong.php';</script>";
                }
                
        } else {
        echo "<script>alert('Data berhasil diubah.');window.location='tabelDataTKIHong.php';</script>";
        }

    } else {
    echo "<script>alert('Data berhasil diubah.');window.location='tabelDataTKIHong.php';</script>";
    }
?>
