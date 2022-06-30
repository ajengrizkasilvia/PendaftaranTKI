<!DOCTYPE html>
<html>
<head>
    <title>Cetak Sertifikat Uji Kompetensi</title>
    <link rel="icon" type="image/x-icon" href="img\favicon.ico" />
</head>
<body>
 
        <?php 
            include 'config.php';
            $konektor = mysqli_connect("localhost","root","", "tki");
            $no = 1;
            $id_sertif_taiw = $_GET['id_sertif_taiw'];
            $data = mysqli_query($konektor,"SELECT keahlian_taiw FROM sertiftaiwan
                                            INNER JOIN user ON sertiftaiwan.id = user.id 
                                            WHERE id_sertif_taiw='$id_sertif_taiw'");
            while($d = mysqli_fetch_array($data)){
        ?>
     
         <div>
            <table width= "100%">
            <tr>
                <td><img src="berkas/SertifTaiwan/Keahlian/<?php echo $d['keahlian_taiw']; ?>" style="width: 690px;float: left;margin-bottom: 5px;"></td>
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