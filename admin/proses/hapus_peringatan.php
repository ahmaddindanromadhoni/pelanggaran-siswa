<?php
	include'../sess_check.php';
		$id = $_GET['no'];	
		$sql = mysqli_query($koneksi, "DELETE FROM pelanggaran WHERE nis='$id'");
		header("location: ../dataxiirpl1.php?act=delete&msg=success");
?>