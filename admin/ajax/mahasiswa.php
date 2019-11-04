<table class="cari">
	</table>
	<table class="modif" id="tablee">
		<tr>
			<th>NIM</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Prodi</th>
			<th>Alamat</th>
            <th>Telepon</th>
			
		</tr>

<?php 
    include("../../config/koneksi.php");
    $keyword = $_GET['keyword'];
    
    $query_mysql = mysqli_query($koneksi, "SELECT * FROM data_mahasiswa where
        nama LIKE '%$keyword%' OR
        jenis_kelamin LIKE '%$keyword%' OR
        prodi LIKE '%$keyword%' OR
        alamat LIKE '%$keyword%' OR
        telpon LIKE '%$keyword%' OR
        nim LIKE '%$keyword%'")
        or die (mysqli_error($koneksi));
        while($data = mysqli_fetch_array($query_mysql)){

        
?>
        <tr>
			<td><?php echo $data['nim']; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['jenis_kelamin']; ?></td>
			<td><?php echo $data['prodi']; ?></td>
			<td><?php echo $data['alamat']?></td>
            <td><?php echo $data['telpon']; ?></td>
		</tr>
    <?php
        }
    ?>
	</table>