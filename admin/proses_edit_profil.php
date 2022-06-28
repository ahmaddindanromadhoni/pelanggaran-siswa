<?php
include 'sess_check.php';
$admin_id = $_POST['admin_id'];
$nama_adm = $_POST['nama_adm'];
$email_adm = $_POST['email_adm'];
$password = $_POST['password'];

$sql = mysqli_query($koneksi, "UPDATE admin SET nama_adm='$nama_adm', email_adm='$email_adm', password='$password' WHERE admin_id='$admin_id'");
if($sql) {
    header("location:index.php?act=update&msg=success") ;
  } else {
    header("location:index.php?act=update&msg=fail") ;
  }
?>