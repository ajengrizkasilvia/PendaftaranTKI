<!DOCTYPE html>
<html>
<head>
	<title>Biodata Pekerja Migran Indonesia</title>
    <link rel="icon" type="image/x-icon" href="img\favicon.ico" />
</head>
<body>
 
         <h3 ALIGN="Center">PT. HENDRARTA ARGARAYA</h3>
         <h3 ALIGN="Center">Data Pendaftar TKI</h3><br>
         <div>
            <?php 
                include 'config.php';
                $konektor = mysqli_connect("localhost","root","", "tki");
                $no = 1;
                $id_dft = $_GET['id_dft'];
                $data = mysqli_query($konektor,"SELECT * FROM pendaftaran 
                                                INNER JOIN negara ON pendaftaran.id_negara = negara.id_negara
                                                INNER JOIN tahapsatu ON pendaftaran.id_tahapsatu = tahapsatu.id_tahapsatu
                                                INNER JOIN user ON pendaftaran.id = user.id WHERE id_dft='$id_dft'");
                while($d = mysqli_fetch_array($data)){
            ?>
            <table width= "100%">
            <tr>
                <td color="blue"><b>PERSONAL DATA</b></td>
                <td><b>個人紀錄</b><td> 
            </tr>
            <tr>
                <td><b>Nama TKI</b></td>
                <td><?php echo $d['nama_lengkap']; ?></td>
                <td colspan="2"></td>
                <td><b>Age</b></td> 
                <td colspan="2"><?php echo $d['umur']; ?></td>
                
            </tr>
            <tr>
                <td><b>Place / Date of Birtd</b></td>
                <td><?php echo $d['tempat_lahir']; ?> <?php echo $d['tanggal_lahir']; ?></td>
                <td colspan="2"></td>
                <td><b>Weight</b></td>
                <td colspan="2"><?php echo $d['bb']; ?></td>
            </tr>
            <tr>
                <td><b>Religion</b></td>
                <td><?php echo $d['agama']; ?></td>
                <td colspan="2"></td>
                <td><b>Height</b></td>
                <td colspan="2"><?php echo $d['tb']; ?></td>
            </tr>
            <tr>
                <td><b>Marital Status</b></td>
                <td><?php echo $d['status']; ?></td>
            </tr>
            <tr>
                <td><b>Address</b></td>
                <td><?php echo $d['alamat_lengkap']; ?></td>
            </tr>
            <tr>
                <td><b>Telephone</b></td>
                <td><?php echo $d['no_telp']; ?></td>
            </tr>
            <tr>
                <td><br></td>
            </tr>
            <tr>
                <td><b>FAMILY BACKGROUND</b></td>
                <td><b>家庭背景</b></td>
            </tr>
            <tr>
                <td><b>Father's Name</b></td>
                <td><?php echo $d['nama_ayah']; ?></td>
                <td colspan="2"></td>
                <td><b>Name of Spouse</b></td>
                <td colspan="2"><?php echo $d['nama_pasangan']; ?></td>
           </tr>
            <tr>
                <td><b>Occupation</b></td>
                <td><?php echo $d['pekerjaan_ayah']; ?></td>
                <td colspan="2"></td>
                <td><b>Occupation</b></td>
                <td colspan="2"><?php echo $d['pekerjaan_pasangan']; ?></td>
           </tr>
            <tr>
                <td><b>Mother's Name</b></td>
                <td><?php echo $d['nama_ibu']; ?></td>
                <td colspan="2"></td>
                <td><b>No. of Children</b></td>
                <td colspan="2"><?php echo $d['jml_anak']; ?></td>
            </tr>
            <tr>
                <td><b>Occupation</b></td>
                <td><?php echo $d['pekerjaan_ibu']; ?></td>
                <td colspan="2"></td>
                <td><b>Ages of Children</b></td>
                <td colspan="2"><?php echo $d['umur_anak']; ?></td>
            </tr>
            <tr>
                <td><b>No. of Brother</b></td>
                <td><?php echo $d['jml_brother']; ?></td>
            </tr>
            <tr>
                <td><b>No. of Sister</b></td>
                <td><?php echo $d['jml_sister']; ?></td>
            </tr>
            <tr>
                <td><b>In The Family, I'm No.</b></td>
                <td><?php echo $d['anak_no']; ?></td>
            </tr>
            <tr>
                <td><br></td>
            </tr>
            
            <tr>
                <td><b>Pas Foto</b></td>
            </tr>
            <tr>
                <td><img src="berkas/PasFoto/<?php echo $d['pas_foto']; ?>" style="width: 200px;"> </td>
            </tr>
            <tr>
                <td><b>Medical Check</b></td>
            </tr>
            <tr>
                <td><img src="berkas/Medical/<?php echo $d['medical_check']; ?>" style="width: 800px;float: left;margin-bottom: 5px;"></td>
            </tr>
            <tr>
                <td><br></td>
            </tr>
    </table>
            <?php 
                }
            ?>
    </div>
</div>

</div>
	 <script>
		window.print();
	</script>
</body>
</html>