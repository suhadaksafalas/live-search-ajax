<?php
// Mengaktifkan session php
session_start();

// menghubungkan dengan config 
include 'config/koneksi.php';

// menangkap data yang dikirim form
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password 
$data = mysqli_query($koneksi, "select * from user where username='$username' and password='$password'");

// menghitung data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:admin/index.php");
}else{
    header("location:index.php?pesan=gagal");
}



?>