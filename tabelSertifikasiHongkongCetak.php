<!DOCTYPE html>
<html>
<head>
	<title>Cetak All Sertifikasi Hongkong</title>
</head>
<body>
 
	<?php 
	include 'config.php';
    $konektor = mysqli_connect("localhost","root","", "tki");
	?>

    <?php 
		$no = 1;
		$data = mysqli_query($konektor,"SELECT * FROM sertifhongkong INNER JOIN user ON sertifhongkong.id = user.id");
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
                <th bgcolor=yellow colspan=”2″ align=”center”><font color=black>Penilaian Wawancara</th>
            </tr>
            <tr>
                <th>Perawatan Bayi</th>
                    <th><?php echo $d['perawatanbayi_hk']; ?>
            </tr>
            <tr>
                <th>Peduli Anak-anak</th>
                    <th><?php echo $d['pedulianak_hk']; ?>
            </tr>
            <tr>
                <th>Pekerjaan Rumah Tangga</th>
                    <th><?php echo $d['pekerjaanrt_hk']; ?>
            </tr>
            <tr>
                <th>Perawatan Orangtua/Cacat</th>
                    <th><?php echo $d['perawatanortu_hk']; ?>
            </tr>
            <tr>
                <th>Memasak</th>
                    <th><?php echo $d['memasak_hk']; ?>
            </tr>
            <tr>
                <th>Bahasa Inggris</th>
                    <th><?php echo $d['inggris_hk']; ?>
            </tr>
            <tr>
                <th>Bahasa Kantonis</th>
                    <th><?php echo $d['kantonis_hk']; ?>
            </tr>
            <tr>
                <th>Bahasa Mandarin</th>
                    <th><?php echo $d['mandarin_hk']; ?>
            </tr>
            <tr>
                <th>Sertifikasi Keahlian</th>
                <th>
                <img src="berkas/SertifHongkong/Keahlian/<?php echo $d['keahlian_hk']; ?>" style="width: 280px;"></th>
            </tr>
            <tr>
                <th>Sertifikasi Bahasa</th>
                <th>
                <img src="berkas/SertifHongkong/Bahasa/<?php echo $d['bahasa_hk']; ?>" style="width:280px;">
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