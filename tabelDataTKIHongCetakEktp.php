<!DOCTYPE html>
<html>
<head>
    <title>Cetak E-KTP</title>
    <link rel="icon" type="image/x-icon" href="img\favicon.ico" />
</head>
<body>
 
        <?php 
            include 'config.php';
            $konektor = mysqli_connect("localhost","root","", "tki");
            $no = 1;
            $id_hongkong = $_GET['id_hongkong'];
            $data = mysqli_query($konektor,"SELECT ektp_hk FROM hongkong
                                            INNER JOIN user ON hongkong.id = user.id 
                                            WHERE id_hongkong='$id_hongkong'");
            while($d = mysqli_fetch_array($data)){
                
        ?>
    
         <div>
            <table width= "100%">
            <tr>
                <td><img src="berkas/Hongkong/<?php echo $d['ektp_hk']; ?>" style="width: 400px;float: left;margin-bottom: 5px;"></td>
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