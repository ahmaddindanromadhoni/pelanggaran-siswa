<?php
	include '../sess_check.php';
		$no = $_GET['no_peringatan'];	
		$sql = mysqli_query($koneksi, "DELETE FROM pelanggaran WHERE no_peringatan='$no'");
		header("location: ../dataxiirpl1.php?act=delete&msg=success");
?>