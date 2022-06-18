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
        $id_taiwan = $_GET['id_taiwan'];
		$data = mysqli_query($konektor,"SELECT * FROM taiwan 
                                        INNER JOIN user ON taiwan.id = user.id
                                        INNER JOIN tahapdua ON taiwan.id_tahapdua = tahapdua.id_tahapdua
                                        WHERE id_taiwan='$id_taiwan'");
		while($d = mysqli_fetch_array($data)){
	?>
     <div class="card-body">
         <h2>Berkas Data TKI</h2>
            <div class="text-center">
            <table border="1" width= "100%">
            <tr>
                <th>Nama TKI</th>
                <th><?php echo $d['nama_lengkap']; ?></th>
            </tr>
            <tr>
                <th>Sektor</th>
                <th><?php echo $d['sektor_taiw']; ?></th>
            </tr>
            <tr>
                <th>E-KTP</th>
                <th><img src="berkas/Taiwan/<?php echo $d['ektp_taiw']; ?>" style="width: 280px;"></th>
            </tr>
            <tr>
                <th>Kartu Keluarga</th>
                <th><img src="berkas/Taiwan/<?php echo $d['kk_taiw']; ?>" style="width: 280px;"></th>
            </tr>
            <tr>
                <th>Akta Kelahiran</th>
                <th><img src="berkas/Taiwan/<?php echo $d['akte_taiw']; ?>" style="width: 280px;"></th>
            </tr>
            <tr>
                <th>Surat Menikah</th>
                <th><img src="berkas/Taiwan/<?php echo $d['suratnikah_taiw']; ?>" style="width: 280px;"></th>
            </tr>
            <tr>
                <th>Surat Ijin Ortu/Suami</th>
                <th><img src="berkas/Taiwan/<?php echo $d['suratijin_taiw']; ?>" style="width: 280px;"></th>
            </tr>
            <tr>
                <th>Ex Paspor</th>
                <th><img src="berkas/Taiwan/<?php echo $d['expaspor_taiw']; ?>" style="width: 280px;"></th>
            </tr>
            <tr>
                <th>SKCK</th>
                <th><img src="berkas/Taiwan/<?php echo $d['skck_taiw']; ?>" style="width: 280px;"></th>
            </tr>
            <tr>
                <th>Kartu Kuning</th>
                <th>
                <img src="berkas/Taiwan/<?php echo $d['kartukuning_taiw']; ?>" style="width: 280px;"></th>
            </tr>
            <tr>
                <th>Biometri</th>
                <th>
                <img src="berkas/Taiwan/<?php echo $d['biometri_taiw']; ?>" style="width:280px;">
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
                <?php echo $d['keterangan_taiw']; ?>
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