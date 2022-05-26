<!DOCTYPE html>
<html>
<head>
	<title>Cetak All Sertifikasi Taiwan</title>
</head>
<body>
 
	<?php 
	include 'config.php';
    $konektor = mysqli_connect("localhost","root","", "tki");
	?>

    <?php 
		$no = 1;
		$data = mysqli_query($konektor,"SELECT * FROM sertiftaiwan INNER JOIN user ON sertiftaiwan.id = user.id");
		while($d = mysqli_fetch_array($data)){
	?>
    <!-- <h2>Berkas Data TKI</h2> -->
     <div class="card-body">
            <div class="text-center">
            <table border="1" width= "100%">
            <br><br>
            <tr>
                <th colspan="2"><?php echo $no++; ?></th>
            </tr>
            <tr>
                <th>Nama TKI</th>
                <th><?php echo $d['nama_lengkap']; ?>
            </tr>
            <tr>
                <th>Sertifikasi Keahlian</th>
                <th>
                <img src="berkas/SertifTaiwan/Keahlian/<?php echo $d['keahlian_taiw']; ?>" style="width: 280px;"></th>
            </tr>
            <tr>
                <th>Sertifikasi Bahasa</th>
                <th>
                <img src="berkas/SertifTaiwan/Bahasa/<?php echo $d['bahasa_taiw']; ?>" style="width:280px;">
                </th>
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