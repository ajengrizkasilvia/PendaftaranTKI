<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image/x-icon" href="img\favicon.ico" />
</head>
<body>
 
        <?php 
            include 'config.php';
            $konektor = mysqli_connect("localhost","root","", "tki");
            $no = 1;
            $id_sertif_hk = $_GET['id_sertif_hk'];
            $data = mysqli_query($konektor,"SELECT bahasa_hk FROM sertifhongkong
                                            INNER JOIN user ON sertifhongkong.id = user.id 
                                            WHERE id_sertif_hk='$id_sertif_hk'");
            while($d = mysqli_fetch_array($data)){
        ?>
     
         <div>
            <table width= "100%">
            <tr>
                <td><img src="berkas/SertifHongkong/Bahasa/<?php echo $d['bahasa_hk']; ?>" style="width: 690px;float: left;margin-bottom: 5px;"></td>
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