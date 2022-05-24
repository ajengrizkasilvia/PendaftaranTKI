<!DOCTYPE html>
<html>
<head>
</head>
<body>
 
        <?php 
            include 'config.php';
            $konektor = mysqli_connect("localhost","root","", "tki");
            $no = 1;
            $id_taiwan = $_GET['id_taiwan'];
            $data = mysqli_query($konektor,"SELECT skck_taiw FROM taiwan
                                            INNER JOIN user ON taiwan.id = user.id  
                                            WHERE id_taiwan='$id_taiwan'");
            while($d = mysqli_fetch_array($data)){
        ?>
     
         <div>
            <table width= "100%">
            <tr>
                <td><img src="berkas/Taiwan/<?php echo $d['skck_taiw']; ?>" style="width: 800px;float: left;margin-bottom: 5px;"> </td>
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