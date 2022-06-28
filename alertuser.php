<?php
		// insert message
		if(isset($_GET['act']) && $_GET['act'] == "add" && $_GET['msg'] == "success") {
			echo '<div class="alert alert-success alert-dismissable">';
			echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
			echo "Data berhasil dikirim.";
			echo '</div>';
		}
        elseif(isset($_GET['act']) && $_GET['act'] == "add" && $_GET['msg'] == "fail") {
			echo '<div class="alert alert-danger alert-dismissable">';
			echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
			echo "Gagal Mengirim data.";
			echo '</div>';
		}