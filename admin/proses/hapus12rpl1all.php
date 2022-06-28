<?php 
include 'sess_check.php';
$sd = mysqli_query($koneksi,"DELETE * FROM pelanggaran WHERE nama_kelas = 'XII-RPL-I'");
header("location:../index.php");
?>