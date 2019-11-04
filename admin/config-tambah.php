<?php 
// koneksi database
include '../config/koneksi.php';
 
// menangkap data yang di kirim dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$prodi = $_POST['prodi'];
$alamat = $_POST['alamat'];
$telpon = $_POST['telpon'];
 
// menginput data ke database
mysqli_query($koneksi,"INSERT INTO  data_mahasiswa (nim,nama,jenis_kelamin,prodi,alamat,telpon) 
	values('$nim','$nama','$jenis_kelamin','$prodi','$alamat','$telpon')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>