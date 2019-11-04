<?php

$koneksi = mysqli_connect('localhost','root','','tugas');

function query($query) {
    $result = mysqli_query($koneksi, $query);
}

?>