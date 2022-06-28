<?php
include 'sess_check.php';
$no_kelas = $_POST['no_kelas'];
$nama_kelas = $_POST['nama_kelas'];
$total_siswa = $_POST['total_siswa'];
$wali_kelas = $_POST['wali_kelas'];

$sql = mysqli_query($koneksi, "UPDATE kelas SET nama_kelas='$nama_kelas', total_siswa='$total_siswa', wali_kelas='$wali_kelas' WHERE no_kelas='$no_kelas'");
header("location: data_kelas.php?act=update&msg=success")
?>