<!DOCTYPE html>
<html>
<head>
	<title>Cetak All Data TKI Hongkong</title>
</head>
<body>
 
	<?php 
	include 'config.php';
    $konektor = mysqli_connect("localhost","root","", "tki");
	?>

    <?php 
		$no = 1;
		$data = mysqli_query($konektor,"SELECT * FROM hongkong 
                                        INNER JOIN user ON hongkong.id = user.id
                                        INNER JOIN tahapdua ON hongkong.id_tahapdua = tahapdua.id_tahapdua");
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
                <th><?php echo $d['nama_lengkap']; ?></th>
            </tr>
            <tr>
                <th>Sektor</th>
                <th><?php echo $d['sektor_hk']; ?></th>
            </tr>
            <tr>
                <th>E-KTP</th>
                <th><img src="berkas/Hongkong/<?php echo $d['ektp_hk']; ?>" style="width: 280px;"></th>
            </tr>
            <tr>
                <th>Kartu Keluarga</th>
                <th><img src="berkas/Hongkong/<?php echo $d['kk_hk']; ?>" style="width: 280px;"></th>
            </tr>
            <tr>
                <th>Akta Kelahiran</th>
                <th><img src="berkas/Hongkong/<?php echo $d['akte_hk']; ?>" style="width: 280px;"></th>
            </tr>
            <tr>
                <th>Surat Keterangan Status/Surat Menikah</th>
                <th><img src="berkas/Hongkong/<?php echo $d['suratnikah_hk']; ?>" style="width: 280px;"></th>
            </tr>
            <tr>
                <th>Surat Ijin Ortu/Suami</th>
                <th><img src="berkas/Hongkong/<?php echo $d['suratijin_hk']; ?>" style="width: 280px;"></th>
            </tr>
            <tr>
                <th>Ex Paspor</th>
                <th><img src="berkas/Hongkong/<?php echo $d['expaspor_hk']; ?>" style="width: 280px;"></th>
            </tr>
            <tr>
                <th>SKCK</th>
                <th><img src="berkas/Hongkong/<?php echo $d['skck_hk']; ?>" style="width: 280px;"></th>
            </tr>
            <tr>
                <th>Kartu Kuning</th>
                <th>
                <img src="berkas/Hongkong/<?php echo $d['kartukuning_hk']; ?>" style="width: 280px;"></th>
            </tr>
            <tr>
                <th>Biometri</th>
                <th>
                <img src="berkas/Hongkong/<?php echo $d['biometri_hk']; ?>" style="width:280px;">
                </th>
            </tr>
            <tr>
                <th>Status Proses</th>
                <th>
                <?php echo $d['keterangan']; ?>
                </th>
            </tr>
            <tr>
                <th>Keterangan</th>
                <th>
                <?php echo $d['keterangan_hk']; ?>
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