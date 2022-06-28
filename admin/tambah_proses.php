<?php
include 'sess_check.php';

$nama_kelas = $_POST['nama_kelas'];
$jumlah_siswa = $_POST['jumlah_siswa'];
$nama_wali = $_POST['nama_wali'];

$sql = mysqli_query($koneksi,"INSERT INTO kelas VALUES('','$nama_kelas','$jumlah_siswa','$nama_wali')");
if($sql) {
  header("location:data_kelas.php?act=add&msg=success"); 
} else {
  header("location:data_kelas.php?act=add&msg=fail") ; 
}
?>