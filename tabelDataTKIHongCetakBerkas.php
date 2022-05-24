<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 
	<?php 
	include 'config.php';
    $konektor = mysqli_connect("localhost","root","", "tki");
		$no = 1;
        $id_hongkong = $_GET['id_hongkong'];
		$data = mysqli_query($konektor,"SELECT * FROM hongkong 
                                        INNER JOIN user ON hongkong.id = user.id
                                        INNER JOIN tahapdua ON hongkong.id_tahapdua = tahapdua.id_tahapdua
                                        WHERE id_hongkong='$id_hongkong'");
		while($d = mysqli_fetch_array($data)){
	?>
     <div class="card-body">
         <h2>Berkas Data TKI</h2>
            <div class="text-center">
            <table border="1" width= "100%">
            <tr>
                <th>Nama TKI</th>
                <td><?php echo $d['nama_lengkap']; ?><td>
            </tr>
            <tr>
                <th>Sektor</th>
                <td><?php echo $d['sektor_hk']; ?></td>
            </tr>
            <tr>
                <th>E-KTP</th>
                <td><img src="berkas/Hongkong/<?php echo $d['ektp_hk']; ?>" style="width: 280px;"></td>
            </tr>
            <tr>
                <th>Kartu Keluarga</th>
                <td><img src="berkas/Hongkong/<?php echo $d['kk_hk']; ?>" style="width: 280px;"></td>
            </tr>
            <tr>
                <th>Akta Kelahiran</th>
                <td><img src="berkas/Hongkong/<?php echo $d['akte_hk']; ?>" style="width: 280px;"></td>
            </tr>
            <tr>
                <th>Surat Menikah</th>
                <td><img src="berkas/Hongkong/<?php echo $d['suratnikah_hk']; ?>" style="width: 280px;"></td>
            </tr>
            <tr>
                <th>Surat Ijin Ortu/Suami</th>
                <td><img src="berkas/Hongkong/<?php echo $d['suratijin_hk']; ?>" style="width: 280px;"></td>
            </tr>
            <tr>
                <th>Ex Paspor</th>
                <td><img src="berkas/Hongkong/<?php echo $d['expaspor_hk']; ?>" style="width: 280px;"></td>
            </tr>
            <tr>
                <th>SKCK</th>
                <td><img src="berkas/Hongkong/<?php echo $d['skck_hk']; ?>" style="width: 280px;"></td>
            </tr>
            <tr>
                <th>Kartu Kuning</th>
                <td>
                <img src="berkas/Hongkong/<?php echo $d['kartukuning_hk']; ?>" style="width: 280px;"></td>
            </tr>
            <tr>
                <th>Biometri</th>
                <td>
                <img src="berkas/Hongkong/<?php echo $d['biometri_hk']; ?>" style="width:280px;">
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
                <?php echo $d['keterangan_hk']; ?>
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