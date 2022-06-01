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
                $id_sertif_hk = $_GET['id_sertif_hk'];
                $data = mysqli_query($konektor,"SELECT * FROM sertifhongkong
                                    INNER JOIN user ON sertifhongkong.id = user.id
                                    INNER JOIN pendaftaran ON sertifhongkong.id_dft = pendaftaran.id_dft WHERE id_sertif_hk='$id_sertif_hk'");
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
                <th></th>
                <td rowspan="5"><img src="berkas/PasFoto/<?php echo $d['pas_foto']; ?>" style="width: 210px;"></td>
            </tr>
            <tr>
                <td></td>
                <th>平</th>
                <th>好</th>
                <th>優</th>
            </tr>
            <tr>
                <td><b>Babies Caring</b></td>
                <td><input type="checkbox" id="pb1" name="perawatanbayi_hk" value="rata-rata" <?php if($d['perawatanbayi_hk']== "rata-rata") echo "checked"?> class="custom-control-input"></td>
                <td><input type="checkbox" id="pb2" name="perawatanbayi_hk" value="baik" <?php if($d['perawatanbayi_hk']== "baik") echo "checked"?> class="custom-control-input"></td>
                <td><input type="checkbox" id="pb3" name="perawatanbayi_hk" value="baik sekali" <?php if($d['perawatanbayi_hk']=="baik sekali") echo "checked"?> class="custom-control-input"></td>                                                                           
            </tr>
            <tr>
                <td><b>Children Caring</b></td>
                <td><input type="checkbox" id="pa1" name="pedulianak_hk" value="rata-rata" <?php if($d['pedulianak_hk']== "rata-rata") echo "checked"?> class="custom-control-input">    
                <td><input type="checkbox" id="pa2" name="pedulianak_hk" value="baik" <?php if($d['pedulianak_hk']== "baik") echo "checked"?> class="custom-control-input"></td>
                <td><input type="checkbox" id="pa3" name="pedulianak_hk" value="baik sekali" <?php if($d['pedulianak_hk']== "baik sekali") echo "checked"?> class="custom-control-input"></td></td>
            </tr>
            <tr>
                <td><b>Household Works</b></td>                                          
                <td><input type="checkbox" id="prt1" name="pekerjaanrt_hk" value="rata-rata" <?php if($d['pekerjaanrt_hk']== "rata-rata") echo "checked"?> class="custom-control-input"></td>
                <td><input type="checkbox" id="prt2" name="pekerjaanrt_hk" value="baik" <?php if($d['pekerjaanrt_hk']== "baik") echo "checked"?> class="custom-control-input"></td>
                <td><input type="checkbox" id="prt3" name="pekerjaanrt_hk" value="baik sekali"<?php if($d['pekerjaanrt_hk']== "baik sekali") echo "checked"?> class="custom-control-input"></td>
            </tr>
            <tr>
                <td><b>Care of Elder / Disabled</b></td>
                <td><input type="checkbox" id="poc1" name="perawatanortu_hk" value="rata-rata"<?php if($d['perawatanortu_hk']== "rata-rata") echo "checked"?> class="custom-control-input"></td>
                <td><input type="checkbox" id="poc2" name="perawatanortu_hk" value="baik"<?php if($d['perawatanortu_hk']== "baik") echo "checked"?> class="custom-control-input"></td>
                <td><input type="checkbox" id="poc3" name="perawatanortu_hk" value="baik sekali"<?php if($d['perawatanortu_hk']== "baik sekali") echo "checked"?> class="custom-control-input"></td>                                              
            </tr>
            <tr>
                <td><b>Cooking</b></td>                                           
                <td><input type="checkbox" id="memasak1" name="memasak_hk" value="rata-rata"<?php if($d['memasak_hk']== "rata-rata") echo "checked"?> class="custom-control-input"></td>
                <td><input type="checkbox" id="memasak2" name="memasak_hk" value="baik"<?php if($d['memasak_hk']== "baik") echo "checked"?> class="custom-control-input"></td>
                <td><input type="checkbox" id="memasak3" name="memasak_hk" value="baik sekali"<?php if($d['memasak_hk']== "baik sekali") echo "checked"?> class="custom-control-input"></td>
            </tr>
            <tr>
                <td><b>Spoken English</b></td>                                            
                <td><input type="checkbox" id="i1" name="inggris_hk" value="rata-rata"<?php if($d['inggris_hk']== "rata-rata") echo "checked"?> class="custom-control-input"></td>
                <td><input type="checkbox" id="i2" name="inggris_hk" value="baik"<?php if($d['inggris_hk']== "baik") echo "checked"?> class="custom-control-input"></td>
                <td><input type="checkbox" id="i3" name="inggris_hk" value="baik sekali"<?php if($d['inggris_hk']== "baik sekali") echo "checked"?> class="custom-control-input"></td>
            </tr>
            <tr>
                <td><b>Spoken Cantonesse</b></td>                                         
                <td><input type="checkbox" id="k1" name="kantonis_hk" value="rata-rata"<?php if($d['kantonis_hk']== "rata-rata") echo "checked"?> class="custom-control-input"></td>
                <td><input type="checkbox" id="k2" name="kantonis_hk" value="baik"<?php if($d['kantonis_hk']== "baik") echo "checked"?> class="custom-control-input"></td>
                <td><input type="checkbox" id="k3" name="kantonis_hk" value="baik sekali"<?php if($d['kantonis_hk']== "baik sekali") echo "checked"?> class="custom-control-input"> </td>
            </tr>
            <tr>
                <td><b>Spoken Mandarin</b></td>
                <td><input type="checkbox" id="m1" name="mandarin_hk" value="rata-rata"<?php if($d['mandarin_hk']== "rata-rata") echo "checked"?> class="custom-control-input"></td>
                <td><input type="checkbox" id="m2" name="mandarin_hk" value="baik"<?php if($d['mandarin_hk']== "baik") echo "checked"?> class="custom-control-input"></td>
                <td><input type="checkbox" id="m3" name="mandarin_hk" value="baik sekali"<?php if($d['mandarin_hk']== "baik sekali") echo "checked"?> class="custom-control-input">  </td>
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