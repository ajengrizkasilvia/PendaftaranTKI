<?php 
// koneksi database
include 'config.php';
$konektor = mysqli_connect("localhost","root","", "tki");
// menangkap data yang di kirim dari form
$id_dft = $_POST['id_dft'];
$id_negara = $_POST['id_negara'];
$no_telp = $_POST['no_telp'];
$nik = $_POST['nik'];
$id = $_POST['id'];
$tempat_lahir= $_POST['tempat_lahir'];
$tanggal_lahir= $_POST['tanggal_lahir'];
$umur= $_POST['umur'];
$alamat_lengkap= $_POST['alamat_lengkap'];
$jenis_kelamin= $_POST['jenis_kelamin'];
$tb= $_POST['tb'];
$bb= $_POST['bb'];
$pendidikan_terakhir= $_POST['pendidikan_terakhir'];
$status= $_POST['status'];
$agama= $_POST['agama'];
$pengalaman_kerja= $_POST['pengalaman_kerja'];
$nama_ayah = $_POST['nama_ayah'];
$pekerjaan_ayah = $_POST['pekerjaan_ayah'];
$nama_ibu = $_POST['nama_ibu'];
$pekerjaan_ibu = $_POST['pekerjaan_ibu'];
$jml_brother = $_POST['jml_brother'];
$jml_sister = $_POST['jml_sister'];
$anak_no = $_POST['anak_no'];
$nama_pasangan = $_POST['nama_pasangan'];
$pekerjaan_pasangan = $_POST['pekerjaan_pasangan'];
$jml_anak = $_POST['jml_anak'];
$umur_anak = $_POST['umur_anak'];
$medical_check = $_FILES['medical_check']['name'];
$pas_foto = $_FILES['pas_foto']['name'];
$id_tahapsatu = $_POST['id_tahapsatu'];

    //Medical
    if($medical_check != "") {
      $ekstensi_diperbolehkanmedical = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
      $medical = explode('.', $medical_check); //memisahkan nama file dengan ekstensi yang diupload
      $ekstensimedical = strtolower(end($medical));
      $file_tmpmedical = $_FILES['medical_check']['tmp_name'];   
      $angka_acak     = rand(1,999);
      $medical_baru = $angka_acak.'-'.$medical_check;
  
      if(in_array($ekstensimedical, $ekstensi_diperbolehkanmedical) === true)  {     
        move_uploaded_file($file_tmpmedical, 'berkas/Medical/'.$medical_baru);
      } 
      }else {
          $medical_baru = $_POST['medical_check_lama'];
      }
      $id = $_POST['id_lama'];
      $query = "UPDATE pendaftaran SET id_negara='$id_negara', no_telp='$no_telp', nik='$nik', id='$id', tempat_lahir='$tempat_lahir',
        tanggal_lahir='$tanggal_lahir', umur='$umur', alamat_lengkap='$alamat_lengkap', jenis_kelamin='$jenis_kelamin', tb='$tb', bb='$bb', pendidikan_terakhir='$pendidikan_terakhir',
        status='$status', agama='$agama', pengalaman_kerja='$pengalaman_kerja', nama_ayah='$nama_ayah', pekerjaan_ayah='$pekerjaan_ayah', nama_ibu='$nama_ibu',
        pekerjaan_ibu='$pekerjaan_ibu', jml_brother='$jml_brother', jml_sister='$jml_sister', anak_no='$anak_no', nama_pasangan='$nama_pasangan',
        pekerjaan_pasangan='$pekerjaan_pasangan', jml_anak='$jml_anak', umur_anak='$umur_anak', medical_check='$medical_baru', id_tahapsatu='$id_tahapsatu'
        WHERE id_dft='$id_dft'";
      $result = mysqli_query($konektor, $query);
      if(!$result){
          die ("Query gagal dijalankan: ".mysqli_errno($konektor).
              " - ".mysqli_error($konektor));
      } else {
      echo "<script>alert('Data berhasil diubah.');window.location='tabelPendaftar.php';</script>";
      }
      
      //Pas Foto
      if($pas_foto != "") {
        $ekstensi_diperbolehkanpf = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
        $pasfoto = explode('.', $pas_foto); //memisahkan nama file dengan ekstensi yang diupload
        $ekstensipasfoto = strtolower(end($pasfoto));
        $file_tmppf = $_FILES['pas_foto']['tmp_name'];   
        $angka_acak     = rand(1,999);
        $pasfoto_baru = $angka_acak.'-'.$pas_foto;
  
        if(in_array($ekstensipasfoto, $ekstensi_diperbolehkanpf) === true)  {     
          move_uploaded_file($file_tmppf, 'berkas/PasFoto/'.$pasfoto_baru);
          } 
      }else {
          $pasfoto_baru = $_POST['pas_foto_lama'];
      }
      $id = $_POST['id_lama'];
      $query = "UPDATE pendaftaran SET id_negara='$id_negara', no_telp='$no_telp', nik='$nik', id='$id', tempat_lahir='$tempat_lahir',
        tanggal_lahir='$tanggal_lahir', umur='$umur', alamat_lengkap='$alamat_lengkap', jenis_kelamin='$jenis_kelamin', tb='$tb', bb='$bb', pendidikan_terakhir='$pendidikan_terakhir',
        status='$status', agama='$agama', pengalaman_kerja='$pengalaman_kerja', nama_ayah='$nama_ayah', pekerjaan_ayah='$pekerjaan_ayah', nama_ibu='$nama_ibu',
        pekerjaan_ibu='$pekerjaan_ibu', jml_brother='$jml_brother', jml_sister='$jml_sister', anak_no='$anak_no', nama_pasangan='$nama_pasangan',
        pekerjaan_pasangan='$pekerjaan_pasangan', jml_anak='$jml_anak', umur_anak='$umur_anak', pas_foto='$pasfoto_baru', id_tahapsatu='$id_tahapsatu'
        WHERE id_dft='$id_dft'";
      $result = mysqli_query($konektor, $query);
      if(!$result){
          die ("Query gagal dijalankan: ".mysqli_errno($konektor).
              " - ".mysqli_error($konektor));
      } else {
      echo "<script>alert('Data berhasil diubah.');window.location='tabelPendaftar.php';</script>";
      }
?>