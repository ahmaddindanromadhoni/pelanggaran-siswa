<?php
	// login message
	if(isset($_GET['err']) && $_GET['err'] == "empty") {
		echo '<div class="alert alert-warning alert-dismissable">';
		echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
		echo "Maaf, email pengguna atau kata sandi belum diisi.";
		echo '</div>';
	}
	elseif(isset($_GET['err']) && $_GET['err'] == "not_found") {
		echo '<div class="alert alert-danger alert-dismissable">';
		echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
		echo "Maaf, email pengguna atau password salah.";
		echo '</div>';
	}
		// insert message
		if(isset($_GET['act']) && $_GET['act'] == "add" && $_GET['msg'] == "success") {
			echo '<div class="alert alert-success alert-dismissable">';
			echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
			echo "Data berhasil disimpan.";
			echo '</div>';
		}
		elseif(isset($_GET['act']) && $_GET['act'] == "add" && $_GET['msg'] == "fail") {
			echo '<div class="alert alert-danger alert-dismissable">';
			echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
			echo "Gagal menyimpan data.";
			echo '</div>';
		}
// delete message
	if(isset($_GET['act']) && $_GET['act'] == "delete" && $_GET['msg'] == "success") {
		echo '<div class="alert alert-success alert-dismissable">';
		echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
		echo "Data berhasil dihapus.";
		echo '</div>';
	}
	elseif(isset($_GET['act']) && $_GET['act'] == "delete" && $_GET['msg'] == "fail") {
		echo '<div class="alert alert-danger alert-dismissable">';
		echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
		echo "Gagal menghapus data.";
		echo '</div>';
	}
    if(isset($_GET['act']) && $_GET['act'] == "update" && $_GET['msg'] == "success") {
		echo '<div class="alert alert-success alert-dismissable">';
		echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
		echo "Data berhasil diperbarui.";
		echo '</div>';
	}
	elseif(isset($_GET['act']) && $_GET['act'] == "update" && $_GET['msg'] == "fail") {
		echo '<div class="alert alert-danger alert-dismissable">';
		echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
		echo "Gagal memperbarui data.";
		echo '</div>';
	}
	// alert logout
	if(isset($_GET['act']) && $_GET['act'] == "logout" && $_GET['msg'] == "success") {
		echo '<div class="alert alert-success alert-dismissable">';
		echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
		echo "Berhasil Logout.";
		echo '</div>';
	}