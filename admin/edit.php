<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/index-admin.css">
    <title>Edit</title>
</head>
<body>
    <div class="bagian-header ">
        <h2>Selamat Datang</h2>
        <div class="menu">
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="tambah.php">Tambah Data Mahasiswa</a></li>
                <li><a href="#">Tentang</a></li>
            </ul>
        </div>
        <div class="logout">
            <a href="logout.php">Logout</a>
        </div>
    </div>
    <?php
	include '../config/koneksi.php';
	$nim = $_GET['nim'];
	$data = mysqli_query($koneksi,"select * from data_mahasiswa where nim='$nim'");
	while($d = mysqli_fetch_array($data)){
		?>
        <form action="update.php" method="post">
            <table>          
            <tr>
                <td>NIM</td>
                <td><input style="box-sizing: border-box; width: 500px; padding: 5px;" type="text" name="nim" value="<?php echo $d['nim']; ?>"></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>                    
                <td><input style="box-sizing: border-box; width: 500px; padding: 5px;" type="text" name="nama" value="<?php echo $d['nama']; ?>"></td>
            </tr>
            <tr>
            <td>Jenis Kelamin</td>
                    <td>
                        <select name="jenis_kelamin" id="" style="box-sizing: border-box; width: 500px; padding: 5px;">
                            <option value="">--------------------------------------------------- Pilih --------------------------------------------------- </option>
                            <option value="laki-laki">Laki-laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>

                    </td>
            <tr>
                <td>Prodi</td>    
                <td><input style="box-sizing: border-box; width: 500px; padding: 5px;" type="text" name="prodi" value="<?php echo $d['prodi']; ?>"></td>
            </tr>
            <tr>
            <tr>
                <td>Alamat</td>                    
                <td><input style="box-sizing: border-box; width: 500px; padding: 5px;" type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
            </tr>
            <tr>
                <td>Nomor telepon</td>    
                <td><input style="box-sizing: border-box; width: 500px; padding: 5px;" type="text" name="telpon" value="<?php echo $d['telpon']; ?>"></td>
            </tr>
            <tr></tr>
            <tr></tr>
            <tr>
                <td> </td>
                <td><input name="submit" style="box-sizing: border-box; width: 500px; padding: 10px; background-color: crimson; color: white; cursor: pointer; border: none;" type="submit" value="UPDATE">
                </td>
            </tr>
            </table>
        </form>
        <?php 
	}
	?>
    
    </body>
</html>