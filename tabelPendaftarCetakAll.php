<!DOCTYPE html>
<html>
<head>
	<title>Cetak Data Pendaftar</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="img\favicon.ico" />
</head>
<body>
 
	<?php 
	include 'config.php';
    $konektor = mysqli_connect("localhost","root","", "tki");
	?>
    <h2>Data TKI</h2>
	<table border="1" style="width: 100%">
    <?php 
		$no = 1;
		$data = mysqli_query($konektor,"SELECT * FROM pendaftaran 
                                        INNER JOIN user ON pendaftaran.id = user.id
                                        INNER JOIN negara ON pendaftaran.id_negara = negara.id_negara");
		while($d = mysqli_fetch_array($data)){
		?>
		<tr>
			<th>No</th>
            <th><?php echo $no++; ?></th>
        </tr>
        <tr>    
            <th>Tanggal Pendaftaran</th>
            <th><?php echo $d['tgl_daftar']; ?></th>
        </tr>
        <tr>
            <th>NIK</th>
            <th><?php echo $d['nik']; ?></th>
        </tr>
        <tr>
            <th>Nama Lengkap</th>
            <th><?php echo $d['nama_lengkap']; ?></th>
        </tr>
        <tr>
            <th>Negara Tujuan</th>
            <th><?php echo $d['negara_tujuan']; ?></th>
        </tr>
        <tr>
            <th>Tempat Lahir</th>
            <th><?php echo $d['tempat_lahir']; ?></th>
        </tr>
        <tr>
            <th>Tanggal Lahir</th>
            <th><?php echo $d['tanggal_lahir']; ?></th>
        </tr>
        <tr>
            <th>Umur</th>
            <th><?php echo $d['umur']; ?> tahun</th>
        </tr>
        <tr>
            <th>Alamat Lengkap</th>
            <th><?php echo $d['alamat_lengkap']; ?></th>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <th><?php echo $d['jenis_kelamin']; ?></th>
        </tr>
        <tr>
            <th>TB</th>
            <th><?php echo $d['tb']; ?></th>
        </tr>
        <tr>
            <th>BB</th>
            <th><?php echo $d['bb']; ?></th>
        </tr>
        <tr>
            <th>Pendidikan Terakhir</th>
            <th><?php echo $d['pendidikan_terakhir']; ?></th>
        </tr>
        <tr>
            <th>Status</th>
            <th><?php echo $d['status']; ?></th>
        </tr>
        <tr>
            <th>Agama</th>
            <th><?php echo $d['agama']; ?></th>
        </tr>
        <tr>
            <th>Pengalaman Kerja</th>
            <th><?php echo $d['pengalaman_kerja']; ?></th>
        </tr>
        <tr>
            <th>Medical Check</th>
            <th><img src="berkas/Medical/<?php echo $d['medical_check']; ?>" style="width: 100px;"></th>
        </tr>
        <tr> 
            <th>Pas Foto</th>
            <th><img src="berkas/PasFoto/<?php echo $d['pas_foto']; ?>" style="width: 100px;"> </th>
		</tr>
		<?php 
		}
		?>
	</table>
	<script>
		window.print();
	</script>
 
</body>
</html>