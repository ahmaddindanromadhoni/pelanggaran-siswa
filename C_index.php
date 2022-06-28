<?php
include 'koneksi.php';

$nis = $_POST['nis'];
$nama_user = $_POST['nama_user'];
$nama_wali = $_POST['nama_wali'];
$nama_kelas = $_POST['nama_kelas'];
$tanggal = $_POST['tanggal'];
$pelanggaran = $_POST['pelanggaran'];

$data = mysqli_query($koneksi, "INSERT INTO pelanggaran VALUES('','$nis','$nama_user','$nama_wali','$nama_kelas','$tanggal','$pelanggaran')");
if($data) {
    header("location:index.php?act=add&msg=success");
} else {
   header("location:index.php?act=update&msg=fail");
}
?>