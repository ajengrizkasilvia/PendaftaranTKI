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
            $id_dft = $_GET['id_dft'];
            $data = mysqli_query($konektor,"SELECT * FROM pendaftaran WHERE id_dft='$id_dft'");
            while($d = mysqli_fetch_array($data)){
        ?>
     
         <div>
            <table width= "100%">
            <tr>
                <td><img src="berkas/Medical/<?php echo $d['medical_check']; ?>" style="width: 690px;float: left;margin-bottom: 5px;"></td>
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