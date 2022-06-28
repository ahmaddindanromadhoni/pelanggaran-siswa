<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include '../koneksi.php';
if(isset($_POST['login'])) {
	// mengecek apakah username dan password sudah di isi atau belum
	if(empty($_POST['email_adm']) || empty($_POST['password'])) {
		// mengarahkan ke halaman login.php
		header("location: login.php?err=empty");
	}
	else {
// menangkap data yang dikirim dari form
$email_adm = $_POST['email_adm'];
$password = $_POST['password'];

// menyeleksi data admin dengan nik dan password yang sesuai
$data = mysqli_query($koneksi,"SELECT * FROM admin WHERE email_adm='$email_adm' AND password='$password'");
// menghitung jumlah data yang ditemukan
if(mysqli_num_rows($data) > 0){
	$d = mysqli_fetch_object($data);
	$_SESSION['status_login'] = true;
	$_SESSION['a_global'] = $d;
	$_SESSION['admin'] = $d->email_adm;
	header("location:index.php?login=success");
}else{
	header("location:login.php?err=not_found");
}
	}
}
?>