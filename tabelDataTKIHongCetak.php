<!DOCTYPE html>
<html>
<head>
	<title>Cetak All Data Pendaftar</title>
</head>
<body>
 
	<?php 
	include 'config.php';
    $konektor = mysqli_connect("localhost","root","", "tki");
	?>

    <?php 
		$no = 1;
		$data = mysqli_query($konektor,"SELECT * FROM hongkong 
                                        INNER JOIN pendaftaran ON hongkong.id_dft = pendaftaran.id_dft
                                        INNER JOIN tahapdua ON hongkong.id_tahapdua = tahapdua.id_tahapdua");
		while($d = mysqli_fetch_array($data)){
	?>
     <div class="card-body">
         <h2>Berkas Data TKI</h2>
            <div class="text-center">
            <table border="1" width= "100%">
            <tr>
                <th colspan="2"><?php echo $no++; ?></th>
            </tr>
            <tr>
                <th>Nama TKI</th>
                <th><?php echo $d['nama_lengkap']; ?>
            </tr>
            <tr>
                <th>Sektor</th>
                <th><?php echo $d['sektor_hk']; ?></th>
            </tr>
            <tr>
                <th>E-KTP</th>
                <th><img src="berkas/<?php echo $d['ektp_hk']; ?>" style="width: 280px;"></th>
            </tr>
            <tr>
                <th>Kartu Keluarga</th>
                <th><img src="berkas/<?php echo $d['kk_hk']; ?>" style="width: 280px;"></th>
            </tr>
            <tr>
                <th>Akta Kelahiran</th>
                <th><img src="berkas/<?php echo $d['akte_hk']; ?>" style="width: 280px;"></th>
            </tr>
            <tr>
                <th>Surat Menikah</th>
                <th><img src="berkas/<?php echo $d['suratnikah_hk']; ?>" style="width: 280px;"></th>
            </tr>
            <tr>
                <th>Surat Ijin Ortu/Suami</th>
                <th><img src="berkas/<?php echo $d['suratijin_hk']; ?>" style="width: 280px;"></th>
            </tr>
            <tr>
                <th>Ex Paspor</th>
                <th><img src="berkas/<?php echo $d['expaspor_hk']; ?>" style="width: 280px;"></th>
            </tr>
            <tr>
                <th>SKCK</th>
                <th><img src="berkas/<?php echo $d['skck_hk']; ?>" style="width: 280px;"></th>
            </tr>
            <tr>
                <th>Rekom Id</th>
                <th>
                <img src="berkas/Hongkong/<?php echo $d['rekomid_hk']; ?>" style="width: 280px;"></th>
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