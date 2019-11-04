<?php 
session_start();
include '../config/koneksi.php';
 
if (isset($_POST['submit'])) {
    $nim =  $_POST['nim'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $prodi = $_POST['prodi'];
    $alamat = $_POST['alamat'];
    $telpon = $_POST['telpon'];
    $update = mysqli_query($koneksi, "UPDATE data_mahasiswa SET nama='$nama', jenis_kelamin='$jenis_kelamin', prodi='$prodi', alamat='$alamat', telpon='$telpon' WHERE nim='$nim'");
    if ($update==1) {
        $_SESSION['berhasil'] = "berhasil";
        header('Location:index.php?update=sukses');
    }   
    
}