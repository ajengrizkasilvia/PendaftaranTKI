<!DOCTYPE html>
<html>
<head>
	<title>Cetak Data Pendaftar</title>
</head>
<body>
 
	<?php 
	include 'config.php';
    $konektor = mysqli_connect("localhost","root","", "tki");
	?>
    <h2>Data TKI</h2>
	<table border="1" style="width: 100%">
		<tr>
			<th>No</th>
            <th>NIK</th>
            <th>Nama Lengkap</th>
            <th>Negara Tujuan</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Umur</th>
            <th>Alamat Lengkap</th>
            <th>Jenis Kelamin</th>
            <th>TB</th>
            <th>BB</th>
            <th>Pendidikan Terakhir</th>
            <th>Status</th>
            <th>Agama</th>
            <th>Pengalaman Kerja</th>
		</tr>
		<?php 
		$no = 1;
		$data = mysqli_query($konektor,"select * from pendaftaran INNER JOIN negara ON pendaftaran.id_negara = negara.id_negara");
		while($d = mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
            <td><?php echo $d['nik']; ?></td>
            <td><?php echo $d['nama_lengkap']; ?></td>
            <td><?php echo $d['negara_tujuan']; ?></td>
            <td><?php echo $d['tempat_lahir']; ?></td>
            <td><?php echo $d['tanggal_lahir']; ?></td>
            <td><?php echo $d['umur']; ?></td>
            <td><?php echo $d['alamat_lengkap']; ?></td>
            <td><?php echo $d['jenis_kelamin']; ?></td>
            <td><?php echo $d['tb']; ?></td>
            <td><?php echo $d['bb']; ?></td>
            <td><?php echo $d['pendidikan_terakhir']; ?></td>
            <td><?php echo $d['status']; ?></td>
            <td><?php echo $d['agama']; ?></td>
            <td><?php echo $d['pengalaman_kerja']; ?></td>
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