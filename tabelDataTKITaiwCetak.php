<!DOCTYPE html>
<html>
<head>
	<title>Cetak All Data TKI Taiwan</title>
</head>
<body>
 
	<?php 
	include 'config.php';
    $konektor = mysqli_connect("localhost","root","", "tki");
	?>

    <?php 
		$no = 1;
		$data = mysqli_query($konektor,"SELECT * FROM taiwan 
                                        INNER JOIN user ON taiwan.id = user.id
                                        INNER JOIN tahapdua ON taiwan.id_tahapdua = tahapdua.id_tahapdua");
		while($d = mysqli_fetch_array($data)){
	?>
     <div class="card-body">
         <!-- <h2>Berkas Data TKI</h2> -->
            <div class="text-center">
            <table border="1" width= "100%">
            <br><br>
            <tr>
                <th colspan="2"><?php echo $no++; ?></th>
            </tr>
            <tr>
                <th>Nama TKI</th>
                <td><?php echo $d['nama_lengkap']; ?></td>
            </tr>
            <tr>
                <th>Sektor</th>
                <td><?php echo $d['sektor_taiw']; ?></td>
            </tr>
            <tr>
                <th>E-KTP</th>
                <td><img src="berkas/Taiwan/<?php echo $d['ektp_taiw']; ?>" style="width: 280px;"></td>
            </tr>
            <tr>
                <th>Kartu Keluarga</th>
                <td><img src="berkas/Taiwan/<?php echo $d['kk_taiw']; ?>" style="width: 280px;"></td>
            </tr>
            <tr>
                <th>Akta Kelahiran</th>
                <td><img src="berkas/Taiwan/<?php echo $d['akte_taiw']; ?>" style="width: 280px;"></td>
            </tr>
            <tr>
                <th>Surat Menikah</th>
                <td><img src="berkas/Taiwan/<?php echo $d['suratnikah_taiw']; ?>" style="width: 280px;"></td>
            </tr>
            <tr>
                <th>Surat Ijin Ortu/Suami</th>
                <td><img src="berkas/Taiwan/<?php echo $d['suratijin_taiw']; ?>" style="width: 280px;"></td>
            </tr>
            <tr>
                <th>Ex Paspor</th>
                <td><img src="berkas/Taiwan/<?php echo $d['expaspor_taiw']; ?>" style="width: 280px;"></td>
            </tr>
            <tr>
                <th>SKCK</th>
                <td><img src="berkas/Taiwan/<?php echo $d['skck_taiw']; ?>" style="width: 280px;"></td>
            </tr>
            <tr>
                <th>Kartu Kuning</th>
                <td>
                <img src="berkas/Taiwan/<?php echo $d['kartukuning_taiw']; ?>" style="width: 280px;"></td>
            </tr>
            <tr>
                <th>Biometri</th>
                <td>
                <img src="berkas/Taiwan/<?php echo $d['biometri_taiw']; ?>" style="width:280px;">
                </td>
            </tr>
            <tr>
                <th>Status Proses</th>
                <td>
                <?php echo $d['keterangan']; ?>
                </td>
            </tr>
            <tr>
                <th>Keterangan</th>
                <td>
                <?php echo $d['keterangan_taiw']; ?>
                </td>
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