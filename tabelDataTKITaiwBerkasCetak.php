<!DOCTYPE html>
<html>
<head>
</head>
<body>
 
        <?php 
            include 'config.php';
            $konektor = mysqli_connect("localhost","root","", "tki");
            $no = 1;
            $data = mysqli_query($konektor,"SELECT * FROM hongkong 
                    INNER JOIN user ON taiwan.id = user.id
                    INNER JOIN tahapdua ON hongkong.id_tahapdua = tahapdua.id_tahapdua");
            while($d = mysqli_fetch_array($data)){
        ?>
     
         <h3 ALIGN="Center">PT. HENDRARTA ARGARAYA</h3>
         <h3 ALIGN="Center">Berkas Kelengkapan Hongkong</h3><br><br>
         <div>
            <table width= "100%">
            <tr>
                <td><b>Nama TKI</b></td>
            </tr>
            <tr>
                <td>nama</td> 
            </tr>
            <tr>
                <td><b>Sektor</b></td>
            </tr>
            <tr>
                <td>sektor</td>
            </tr>
            </table>
            <br>
            <table>
            <tr>
                <td><b>E-KTP</b></td>
                <td>ektp</td>
            </tr>
            <tr>    
            <td><b>Kartu Keluarga</b></td>
                <td>kk</td>
            </tr>
            <tr>
                <td><b>Akte Kelahiran</b></td>
                <td>akte</td>
            </tr>
            <tr>
                <td><b>Surat Menikah</b></td>
                <td>surat nikah</td>
            </tr>
            <tr>
                <td><b>Surat Izin Orang Tua/Suami</b></td>
                <td>surat ijin</td>
            </tr>
            <tr>
                <td><b>Ex Paspor</b></td>
                <td>ex paspor</td>
            </tr>
            <tr>
                <td><b>SKCK</b></td>
                <td>nama ayah</td>  
           </tr>
           <tr>
                <td><b>Kartu Kuning</b></td>
                <td>kartu kuning</td>
            </tr>
            <tr>
                <td><b>Biometri</b></td>
                <td>biometri</td>
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