<?php
	// memulai session
	session_start();
	// membaca nilai variabel session 
	$chk_sess = $_SESSION['admin'];
	// memanggil file koneksi
	include("../koneksi.php");
	// mengambil data pengguna dari tabel pengguna
	$sql_sess = "SELECT * FROM admin WHERE email_adm='". $chk_sess ."'";
	$ress_sess = mysqli_query($koneksi, $sql_sess);
	$p = mysqli_fetch_array($ress_sess);
	// mengarahkan ke halaman login.php apabila session belum terdaftar
	if(! isset($chk_sess)) {
		header("location: login.php?login=false");
	}
?>