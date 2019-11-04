<?php
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belom_login");
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="../css/index-admin.css">
	<script type= src="../js/jquery.js"></script>
    <title>Dashboard</title>
</head>
<body>
    <div class="bagian-header">
        <h2>Selamat Datang  <a class="namaAdmin" href="index.php"><?php echo $_SESSION['username']; ?></a></h2>
        <div class="menu">
            <ul>
				<li><a href="index.php">Beranda</a></li>
				<li><a href="#">Profil</a></li>
                <li><a href="#">Tentang</a></li>
            </ul>
        </div>
        <div class="logout">
            <a href="logout.php">Logout</a>
        </div>
    </div>
<br>
<br>
	
	<div class="container">
	<table class="cari">
		<tr>
			<td><a class='tambah' href="tambah.php">+ Tambah </a></td>
			<td class="inp">
				<form method="post">
				<input class="carie" type="text" placeholder="Cari Data" autocomplate="off" id="keyword">
				</form>
			</td>
			<td class="inp"><input class="btn" type="submit" value="Cari" id="tombol-cari"></td>
		</tr>
	</table>
	<table class="modif" id="tablee">
		<tr>
			<th>NIM</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Prodi</th>
			<th>Alamat</th>
            <th>Telepon</th>
			<th>OPSI</th>
		</tr>

<?php 
		include '../config/koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from data_mahasiswa");
		while($d = mysqli_fetch_array($data)){
?>
        <tr>
			<td><?php echo $d['nim']; ?></td>
			<td><?php echo $d['nama']; ?></td>
			<td><?php echo $d['jenis_kelamin']; ?></td>
			<td><?php echo $d['prodi']; ?></td>
			<td><?php echo $d['alamat']?></td>
            <td><?php echo $d['telpon']; ?></td>
			<td class="opsi">
				<a class='edit' href="edit.php?nim=<?php echo $d['nim']; ?>">Edit</a>
				<a class='hapus' href="hapus.php?nim=<?php echo $d['nim']; ?>">Hapus</a>
			</td>
		</tr>
<?php 
        }		
?>
	</table>
	</div>

		<script src="../js/script.js"></script>


</body>
</html>