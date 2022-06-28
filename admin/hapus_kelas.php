<?php
	include 'sess_check.php';
		$id = $_GET['no_kelas'];	
		$sql = mysqli_query($koneksi, "DELETE FROM kelas WHERE no_kelas='$id'");
		header("location: data_kelas.php?act=delete&msg=success");
?>