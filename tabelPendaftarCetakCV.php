 <!DOCTYPE html>
<html>
<head>
	<title>Curriculum Vitae</title>
</head>
<body>
 
         <h3 ALIGN="Center">PT. HENDRARTA ARGARAYA</h3>
         <h3 ALIGN="Center">APPLICANT'S INFORMATION SHEET</h3><br>
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
                <td>nama ayah</td>
                <td colspan="2"></td>
                <td><b>Name of Spouse</b></td>
                <td colspan="2">nama suami/istri</td>
           </tr>
            <tr>
                <td><b>Occupation</b></td>
                <td>nama</td>
                <td colspan="2"></td>
                <td><b>Occupation</b></td>
                <td colspan="2">nama</td>
           </tr>
            <tr>
                <td><b>Mother's Name</b></td>
                <td>nama ibu</td>
                <td colspan="2"></td>
                <td><b>No. of Children</b></td>
                <td colspan="2">jumlah anak</td>
            </tr>
            <tr>
                <td><b>No. of Brother</b></td>
                <td>jumlah saudara laki-laki</td>
                <td colspan="2"></td>
                <td><b>Ages of Children</b></td>
                <td colspan="2">umur anak</td>
            </tr>
            <tr>
                <td><b>No. of Sister</b></td>
                <td>jumlah saudara perempuan</td>
            </tr>
            <tr>
                <td><b>In The Family, I'm No.</b></td>
                <td>anak ke-</td>
            </tr>
            <tr>
                <td><br></td>
            </tr>
    </table>
    <table width= "100%">
            <tr>
                <td><b>INTERVIEW APPRAISAL</b></td>
                <td><b>面試評價 </b></td>
                <td colspan="4"></td>
            </tr>
            <tr>
                <td></td>
                <th>Average</th>
                <th>Good</th>
                <th>Excelent</th>
                <td rowspan="11"><b>Foto</b></td>
            </tr>
            <tr>
                <td></td>
                <th>平</th>
                <th>好</th>
                <th>優</th>
            </tr>
            <tr>
                <td><b>Babies Caring</b></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><b>Children Caring</b></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><b>Household Works</b></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><b>Care of Elder / Disabled</b></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><b>Cooking</b></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><b>Spoken English</b></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><b>Spoken Cantonesse</b></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><b>Spoken Mandarin</b></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><b>Otder Country Exp.</b></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><br></td>
            </tr>
            <tr>
                <td><b>R  E  M  A  R  K  S</b></td>
                <td colspan="4">MAID EVER BEEN WORKING IN HONGKONG - MALAYSIA </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="4">MAID EVER BEEN WORKING IN HONGKONG - MALAYSIA </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="4">SHE HAS EXPERIENCE TAKE CARE OF BABY - ELDERLY - CHILDREN</td>
            </tr>
            <tr>
                <td></td>
                <td colspan="4">SHE HAS EXPERIENCE TAKE CARE OF BABY - ELDERLY - CHILDREN</td>
            </tr>
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