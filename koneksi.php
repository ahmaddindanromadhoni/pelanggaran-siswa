<?php
$koneksi = mysqli_connect('localhost','root','','peringatan_hk');
if(mysqli_connect_errno()){
    echo"Koneksi Database Gagal " . mysqli_connect_error();
}
?>