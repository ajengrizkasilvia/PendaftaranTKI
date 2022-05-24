<!DOCTYPE html>
<html>
<head>
</head>
<body>
 
        <?php 
            include 'config.php';
            $konektor = mysqli_connect("localhost","root","", "tki");
            $no = 1;
            $data = mysqli_query($konektor,"SELECT * FROM taiwan 
                    INNER JOIN user ON taiwan.id = user.id");
            while($d = mysqli_fetch_array($data)){
        ?>
     
         <h3 ALIGN="Center">PT. HENDRARTA ARGARAYA</h3>
         <h3 ALIGN="Center">Akte Kelahiran</h3><br><br>
         <div>
            <table width= "100%">
            <tr>
                <td><img src="berkas/Taiwan/<?php echo $d['akte_taiw']; ?>" style="width: 800px;float: left;margin-bottom: 5px;"></td>
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